<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Company};

class PermissionController extends Controller
{
  /* //====================
    //== CREATE
   //==================== */
  public function create(Request $request, User $user)
  {
    return view('permissions.create', compact('user'));
  }

  /* //====================
    //== STORE
   //==================== */
  public function store(Request $request, User $user)
  {
    $companyIds = $request->input('companies');

    $user = User::find($request->user_id);

    $user->companies()->attach($companyIds);

    return redirect("/managers")->with(flash_message("success", "New access permissions has been added."));

  }

  /* //====================
    //== EDIT
   //==================== */
  public function edit(User $user)
  {
    
  }

  /* //====================
    //== UPDATE
   //==================== */
  public function update(Request $request, User $user)
  {

  }
}
