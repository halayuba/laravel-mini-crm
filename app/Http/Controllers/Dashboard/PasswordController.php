<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Dashboard\PasswordRequest;

class PasswordController extends Controller
{
  public function index()
  {
    return view("dashboard.password");
  }

  public function store(PasswordRequest $request)
  {
    $request->user()->update([
      'password' => bcrypt($request->password)
    ]);

    return back()->with(flash_message("success", "Done! Your password has been updated successfully."));
  }
}
