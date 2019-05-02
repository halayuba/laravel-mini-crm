<?php
use App\Models\Role;

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
    return 'text-green-light font-semibold border-b-2 border-green';
  }
  else {
    return 'text-green-dark hover:text-green-light opacity-75 hover:opacity-100 border-b border-transparent hover:border-green-dark';
  }
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
