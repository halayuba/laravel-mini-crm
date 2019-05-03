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
    $user = User::find($request->user_id);

    $user->companies()->attach($request->input('companies'));

    return redirect("/managers")->with(flash_message("success", "New access permissions has been added."));

  }

  /* //====================
    //== EDIT
   //==================== */
  public function edit(User $user)
  {
      return view('permissions.edit', compact('user'));
  }

  /* //====================
    //== UPDATE
   //==================== */
  public function update(Request $request, User $user)
  {
    $user->companies()->sync($request->input('companies'));

    return back()->with(flash_message("success", "Permissions were updated successfully."));
  }

  /* //====================
    //== DESTROY
   //==================== */
  public function destroy(User $user)
  {
    /* == USER MODEL >> FETCH THE IDs OF THE COMPANIES ASSOCIATED WITH THE USER  == */
    $user->companies()->detach($user->fetchAccessIds());

    return back()->with(flash_message("success", "All permissions were removed successfully."));
  }
}