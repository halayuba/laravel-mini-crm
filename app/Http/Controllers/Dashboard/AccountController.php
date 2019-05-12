<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Dashboard\ProfileRequest;

class AccountController extends Controller
{
    public function index()
    {
      return view("dashboard.accounts");
    }

    public function store(ProfileRequest $request)
    {
      $request->user()->update($request->only('name', 'email'));

      return back()->with(flash_message("success", "Done! Your account has been updated successfully."));

    }
}
