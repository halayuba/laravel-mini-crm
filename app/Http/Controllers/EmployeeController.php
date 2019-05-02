<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Employee, Company};

class EmployeeController extends Controller
{
      /* //====================
        //== INDEX
       //==================== */
      public function index()
      {
        $employees = Employee::with('company');
        return view("employees.index", compact('employees'));
      }

      /* //====================
        //== CREATE
       //==================== */
      public function create()
      {
        return view("employees.create");
      }

      /* //====================
        //== CREATE NEW EMP FOR A SPECIFIC COMPANY
       //==================== */
      public function createSpecific($id)
      {
        // dd(str_contains(request()->path(), 'create-specific'));
        return view("employees.createSpecific", compact('id'));
      }

      /* //====================
        //== STORE
       //==================== */
      public function store(Request $request)
      {
        // dd(Company::find($request->company_id)->name);

        request()->validate([
          'first_name' => 'required',
          'last_name' => 'required'
        ]);

        Employee::create($request->all());

        if ( $request->return_to_route == 'companies' )
        {
          $company = Company::find($request->company_id)->name;
          return redirect()->route('companies.index')->with(flash_message("success", "A new employee has been added successfully to company " . $company . "."));
        }
        else
        {
          return redirect("/employees")->with(flash_message("success", "Employee created successfully."));
        }
      }

      /* //====================
        //== SEARCH
       //==================== */
      public function search(Request $request)
      {
        if ( strlen(trim($request->employee)) >= 3 )
        {
          $employees = Employee::searchByName($request->employee)->paginate(10);
          return view("employees.index", compact('employees'));
        }
        else
        {
          return redirect('/employees')->with(flash_message("warning", "Search field must contain 3 characters at least."));
        }

      }

      /* //====================
        //== SHOW
       //==================== */
      public function show(Employee $employee)
      {

      }

      /* //====================
        //== EDIT
       //==================== */
      public function edit(Employee $employee)
      {

      }

      /* //====================
        //== UPDATE
       //==================== */
      public function update(Request $request, Employee $employee)
      {

      }

      /* //====================
        //== DESTROY
       //==================== */
      public function destroy(Employee $employee)
      {

      }
}
