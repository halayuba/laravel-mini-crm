<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyEmployeeController extends Controller
{
  /* //====================
    //== LIST EMPLOYEES ASSOCIATED WITH A COMPANY
   //==================== */
   public function __invoke(Request $request, Company $company)
   {
     $employees = $company->employees()->paginate(10);
     return view("employees.index", compact('employees'));
   }
}
