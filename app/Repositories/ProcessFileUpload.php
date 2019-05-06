<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class ProcessFileUpload
{

  protected $request, $path, $company;

  public function __construct(Request $request, Company $company)
  {
      $this->request = $request;
      $this->path = 'public/uploads';
      $this->company = $company;
  }

  public function validateAndStoreUpload()
  {
    $image = $this->request->file('file');
    if ( $this->request->hasFile('file') && $image->isValid() )
    {
      $image_name = snake_case(trim($image->getClientOriginalName()));
      $pathAndName = $this->path.'/'.$image_name;

      /* == CONFIRM NO DUPICATE IN THE DB TBL == */
      $duplicate = Company::imageExists($image_name)->count();

      /* == NEW UPLOAD == */
      if ( $duplicate == 0 )
      {
        /* == SAVE TO STORAGE == */
        $image->storeAs($this->path, $image_name);
      }
      /* == DUPLICATE EXISTS IN DB == */
      else
      {
        /* == CHECK IF THE SAME DB RECORD IS ATTEMPTING TO UPLOAD AN UPDATED FILE (NEW VERSION) == */
        if ( $this->company->file && $this->company->file === $image_name )
        {
          /* == IMAGE EXISTS IN LOCAL STORAGE FILE == */
          $exists = Storage::exists($pathAndName);

          /* == REMOVE OLD IMAGE FROM THE FILE STORAGE == */
          if( $exists ) Storage::delete($pathAndName);

          /* == STORE FILE UPLOAD (ASSUMING A NEW VERSION) == */
          $image->storeAs($this->path, $image_name);
        }
        /* ==  DUPLICATE NOT ASSOCIATED WITH "THIS" DB RECORD == */
        elseif ( $this->company->file && $this->company->file != $image_name )
        {
          /* == REMOVE OLD IMAGE FROM THE FILE STORAGE == */
          $pathAndName = $this->path.'/'.$this->book->file;
          $exists = Storage::exists($pathAndName);
          if( $exists ) Storage::delete($pathAndName);

          $image_name = uniqid() . '_' . $image_name;
          $image->storeAs($this->path, $image_name);
        }
        else
        {
          /* == RENAME IMAGE THEN STORE == */
          $image_name = uniqid() . '_' . $image_name;
          $image->storeAs($this->path, $image_name);
        }
      }
      return $image_name;
    }
    /* == NO FILE UPLOAD == */
    return '';
  }

  public function removeStoredUpload($file)
  {
    $pathAndName = $this->path.'/'.$file;

    /* == CONFIRM THE IMAGE EXISTS IN THE LOCAL FILE STORAGE == */
    $exists = Storage::exists($pathAndName);

    /* == REMOVE IMAGE FROM THE LOCAL FILE STORAGE == */
    if( $exists ) Storage::delete($pathAndName);
  }

}
