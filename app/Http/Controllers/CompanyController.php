<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Repositories\ValidateAndStoreUpload;
use Illuminate\Support\Facades\Storage;
use Gate;

class CompanyController extends Controller
{
  protected $upload;

  public function __construct(ValidateAndStoreUpload $upload)
  {
    $this->upload = $upload;
  }

  /* //====================
    //== INDEX
   //==================== */
  public function index()
  {
    $companies = Company::paginate(10);
    return view("companies.index", compact('companies'));
  }

  /* //====================
    //== CREATE
   //==================== */
  public function create()
  {
    return view("companies.create");
  }

  /* //====================
    //== STORE
   //==================== */
  public function store(CompanyRequest $request)
  {
       //== VALIDATION: NO DUPLICATE NAME
      //====================
      if ( Company::isDuplicate($request->name)->count() )
      {
        return back()->with(flash_message("warning", "Duplicate company name."));
      }
      else
      {
        /* == USE REPOSITORY FOR VAIDATING AND STORING IMAGE == */
        $image_name = $this->upload->uploadValidation($request);

         //== SAVE TO DB
        //====================
        $status = Company::create([
          'name' => $request->name,
          'slug' => str_slug($request->name),
          'email' => $request->email,
          'website' => $request->website,
          'file' => $image_name,
        ]);

        if ( $status )
        {
          return redirect("/companies")->with(flash_message("success", "New company added successfully."));
        }
        else
        {
          return redirect("/companies")->with(flash_message("warning", "Adding a new company failed. Please try again later."));
        }
      }
  }

  /* //====================
    //== SEARCH
   //==================== */
  public function search(Request $request)
  {
    if ( strlen(trim($request->company)) >= 3 )
    {
      $companies = Company::searchByName($request->company)->paginate(10);
      return view("companies.index", compact('companies'));
    }
    else
    {
      return redirect('/companies')->with(flash_message("warning", "Search field must contain 3 characters at least."));
    }

  }

  /* //====================
    //== SHOW
   //==================== */
  public function show(Company $company)
  {
    return view("companies.show", compact('company'));
  }

  /* //====================
    //== EDIT
   //==================== */
  public function edit(Company $company)
  {
    return view("companies.edit", compact('company'));
  }

  /* //====================
    //== UPDATE
   //==================== */
  public function update(Request $request, Company $company)
  {
     //== SHOWING ANOTHER WAY TO VALLIDATE RATHER USING "App\Http\Requests\CompanyRequest"
    //====================
    $this->validate(request(), [
      'name' => 'required|min:3|max:75|unique:companies,name,' . $company->id,
      'file' => 'image|dimensions:min_width=100,min_height=100'
    ], ['name.unique' => 'Your attempt to update this company is rejected since the name already exists in the database!']);

    /* == GRAB THE CURRENT FILE NAME (LOGO) IF EXISTS == */
    $current_image_name = $company->file;

    /* == USE REPOSITORY FOR VAIDATING AND STORING IMAGE == */
    $image_name = $this->upload->uploadValidation($request);

    /* == ASSUMING NO UPDATE WAS NEEDED FOR THE LOGO == */
    $image_name = empty($image_name)?: $current_image_name;

     //== SAVE TO DB
    //====================
    $status = $company->update([
      'name' => $request->name,
      'slug' => str_slug($request->name),
      'email' => $request->email,
      'website' => $request->website,
      'file' => $image_name
    ]);

    if ( $status )
    {
      return redirect("/companies")->with(flash_message("success", "Company updated successfully."));
    }
    else
    {
      return redirect("/companies")->with(flash_message("warning", "Failed to update company. Please try again later."));
    }

  }

  /* //====================
    //== DESTROY
   //==================== */
  public function destroy(Company $company)
  {
    if( Gate::allows('perform-admin-actions') )
    {
      /* == PROPAGATE TO DELETE ALL EMPLOYEES == */
      if ( $company->employees )
      {
        $company->employees->each->delete();
      }

      /* == PERFORM DELETE == */
      if ( $company->delete() )
      {
        /* == UPLOADED IMAGE (LOGO) EXISTS == */
        if ( $company->file )
        {
          $pathAndName = 'public/uploads/' . $company->file;
          $exists = Storage::exists($pathAndName);
          if( $exists ) Storage::delete($pathAndName);
        }

        return redirect("/companies")->with(flash_message("success", "Company deleted successfully."));
      }

      return redirect("/companies")->with(flash_message("danger", "Failed to delete company."));
    }
    else
    {
      return back()->with(flash_message("danger", "You don't have enough permissions to perform this action."));
    }
  }

}
