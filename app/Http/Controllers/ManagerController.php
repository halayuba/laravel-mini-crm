<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /* //====================
      //== INDEX
     //==================== */
    public function index()
    {
      $managers = User::managers()->paginate(10);
      return view("managers.index", compact('managers'));
    }

    /* //====================
      //== CREATE
     //==================== */
    public function create()
    {

    }

    /* //====================
      //== STORE
     //==================== */
    public function store(Request $request)
    {

    }

    /* //====================
      //== SEARCH
     //==================== */
    public function search(Request $request)
    {
      if ( strlen(trim($request->manager)) >= 3 )
      {
        $managers = User::searchByName($request->manager)->paginate(10);
        return view("managers.index", compact('managers'));
      }
      else
      {
        return redirect('/managers')->with(flash_message("warning", "Search field must contain 3 characters at least."));
      }

    }

    /* //====================
      //== SHOW
     //==================== */
    public function show(User $user)
    {

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

    /* //====================
      //== ASSIGN
     //==================== */
    public function assign(Request $request, User $user)
    {
      
    }

    /* //====================
      //== DESTROY
     //==================== */
    public function destroy(User $user)
    {
      if ( $user->delete() )
      {
        return redirect("/managers")->with(flash_message("success", "Manager deleted successfully."));
      }

      return redirect("/managers")->with(flash_message("danger", "Failed to delete manager."));
    }

}
