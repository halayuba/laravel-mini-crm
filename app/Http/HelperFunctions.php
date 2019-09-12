<?php
use App\Models\{Role, Company};
use Carbon\Carbon;

function flash_message($state, $msg)
{
  session()->flash('state', $state);
  session()->flash('message', $msg);
}

function notification_state()
{
  if(session('state') == 'success') return 'success';
  elseif(session('state') == 'warning') return 'warning';
  elseif(session('state') == 'danger') return 'danger';
  elseif(session('state') == 'info') return 'info';
  elseif(session('state') == 'default') return '';
}

function loop_errors($errors)
{
  // $result = '';
  $result = '<ul>';
  foreach ($errors->all() as $error) {
    $result .= '<li>'.$error.'</li>';
  }
  return $result .= '</ul>';
}

  //== TRIM URL
 //====================
 function clean_url($url)
 {
   $url = str_after($url, 'http://www.');
   $url = str_after($url, 'https://www.');
   return (strlen($url)<=30)? $url : substr($url,0,30)."...";
 }

 //== ACTIVE TOP NAV MENU ITEM
//====================
function active_topNav($passed_value = '/')
{
  $uri = request()->path();
  if ( ends_with($uri, $passed_value) || str_contains($uri, $passed_value)) {
    return 'text-green-300 font-semibold border-b-2 border-green-500';
  }
  else {
    return 'text-green-600 hover:text-green-300 opacity-75 hover:opacity-100 border-b border-transparent hover:border-green-600';
  }
}

 //== ACTIVE FILTER
//====================
function active_filter($passed_value = '/')
{
  $uri = $_SERVER['QUERY_STRING'];
  if ( str_contains($uri, $passed_value)) {
    return 'bg-gray-300 p-1 font-semibold cursor-default -m-1';
  }
  else {
    return 'hover:underline hover:text-green-700';
  }
}

   //== ACTIVE DASHBOARD NAV MENU ITEM
  //====================
  function active_dashboard($passed_value = '/')
  {
   $uri = request()->path();
   return ends_with($uri, $passed_value)? 'pl-3 bg-white border-l-4 border-teal-800' : 'pl-4 hover:bg-gray-300';
  }

 //== FUNCTION WILL RETURN "SELECTED" USED IN FORM LOOKUP SELECT LIST
//====================
function selected($old, $compare_to, $stored='')
{
 if(!empty($stored))
 {
   //== USE THE OLD VALUE OF THE FORM FIELD IF EXITS OR USE THE STORED VALUE: BOTH ARE PASSED TO THIS FUNCTION
   //====================
   $val = (isset($old) && !empty($old))? $old : $stored;
   return ($val == $compare_to)? ' selected' : '';
 }
 else return ($old == $compare_to)? ' selected' : '';
}

function adminRole()
{
  return App\Models\Role::admin()->first()->id;
}

function mailCompanies($ids)
{
  $companies = [];
  for($i=0; $i<=count($ids)-1; $i++){
    $companies[] = Company::find($ids[$i])->name;
  }
  return array_sort($companies);
}

 //== APPLICATION TIMEZONE
//====================
function appTz()
{
  $tz = config('app.timezone')?? 'America/Chicago';
  return Carbon::now(new DateTimeZone($tz));
}

  //== RETURN DATE = 7 DAYS AGO (ex: 2018-12-28)
 //====================
function last_week()
{
  return appTz()->subWeek()->toDateString();
}

 //== COMPANIES WITH/WITHOUT EMPLOYEES
//====================
function companies_filter()
{
  $uri = $_SERVER['QUERY_STRING'];
  if ( str_contains($uri, 'employees=true') ) return '(with employees)';
  elseif ( str_contains($uri, 'employees=false') ) return '(with no employees)';
  elseif ( str_contains($uri, 'recent=true') ) return '(recently added)';
}
