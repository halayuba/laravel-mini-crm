<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

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
