<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class ValidateAndStoreUpload
{

  protected $request, $path;

  public function __construct(Request $request)
  {
      $this->request = $request;
      $this->path = 'public/uploads';
  }

  public function uploadValidation()
  {
    $image = $this->request->file('file');
    if ( $this->request->hasFile('file') && $image->isValid() )
    {
      $image_name = snake_case(trim($image->getClientOriginalName()));
      $pathAndName = $this->path.'/'.$image_name;

      /* == CONFIRM NO DUPICATE == */
      $duplicate = Company::imageExists($image_name)->count();

      /* == NEW RECORD == */
      if ( $duplicate == 0 )
      {
        /* == SAVE TO STORAGE == */
        $image->storeAs($this->path, $image_name);
      }
      else
      {
        /* == SAME IMAGE EXISTS NO NEED TO SAVE TO STORAGE == */
        $exists = Storage::exists($pathAndName);

        /* == SAVE IF IMAGE DOES NOT EXIST IN STORAGE == */
        if( ! $exists ) $image->storeAs($this->path, $image_name);

        /* == DUPLICATE EXISTS BUT NOT ASSOCIATED WITH "ANY" RECORD: WHEN STORE == */
        else
        {
          $image_name = uniqid() . '_' . $image_name;
          $image->storeAs($this->path, $image_name);
        }

      }

      return $image_name;

    }

    return '';

  }

}
