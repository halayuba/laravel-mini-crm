<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Employee, Company};
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
      /* //====================
        //== INDEX
       //==================== */
      public function index()
      {
        $employees = Employee::with('company')->paginate(10);
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
        return view("employees.createSpecific", compact('id'));
      }

      /* //====================
        //== STORE
       //==================== */
      public function store(EmployeeRequest $request)
      {
        Employee::create($request->all());

        if ( $request->return_to_route == 'companies' )
        {
          $company = Company::find($request->company_id)->name;
          return redirect()->route('companies.index')->with(flash_message("success", "A new employee has been added successfully to company '" . $company . "'."));
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
        return view("employees.show", compact('employee'));
      }

      /* //====================
        //== EDIT
       //==================== */
      public function edit(Employee $employee)
      {
        return view("employees.edit", compact('employee'));
      }

      /* //====================
        //== UPDATE
       //==================== */
      public function update(EmployeeRequest $request, Employee $employee)
      {
        if ( $employee->update($request->all()) )
        {
          return redirect("/employees")->with(flash_message("success", "Employee created successfully."));
        }
        else
        {
          return redirect("/employees")->with(flash_message("danger", "Update failed."));
        }

      }

      /* //====================
        //== DESTROY
       //==================== */
      public function destroy(Employee $employee)
      {
        if ( $employee->delete() )
        {
          return redirect("/employees")->with(flash_message("success", "Employee deleted successfully."));
        }
        else
        {
          return redirect("/employees")->with(flash_message("danger", "Failed to delete employee."));
        }
      }
}
