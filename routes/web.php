<?php

Route::redirect('/', '/home');
Route::view('/technologies', 'pages.technologies');
Route::view('workflow', 'pages.workflow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 //== COMPANIES
//====================
Route::prefix('companies')->middleware(['auth'])->group(function(){
  Route::get('/', 'CompanyController@index')->name('companies.index');
  Route::get('/create', 'CompanyController@create')->name('company.create');
  Route::post('/', 'CompanyController@store')->name('company.store');
  Route::get('/{company}', 'CompanyController@show')->name('company.show');
  Route::get('/{company}/edit', 'CompanyController@edit')->name('company.edit');
  Route::patch('/{company}', 'CompanyController@update')->name('company.update');
  Route::delete('/{company}', 'CompanyController@destroy')->name('company.destroy');
  Route::post('/search', 'CompanyController@search')->name('companies.search');
});

 //== EMPLOYEES
//====================
Route::prefix('employees')->middleware(['auth'])->group(function(){
  Route::get('/', 'EmployeeController@index')->name('employees.index');
  Route::get('/create', 'EmployeeController@create')->name('employee.create');
  Route::get('create-specific/{id}', 'EmployeeController@createSpecific')->name('employee.createSpecific');
  Route::post('/', 'EmployeeController@store')->name('employee.store');
  Route::get('/{employee}', 'EmployeeController@show')->name('employee.show');
  Route::get('/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');
  Route::patch('/{employee}', 'EmployeeController@update')->name('employee.update');
  Route::delete('/{employee}', 'EmployeeController@destroy')->name('employee.destroy');
  Route::post('/search', 'EmployeeController@search')->name('employees.search');
});


 //== COMPANY-EMPLOYEE: SHOW EMPLOYEES FOR A GIVEN COMPANY
//====================
Route::get('companies/{company}/employees', 'CompanyEmployeeController')->name('company.employees');

 //== MANAGERS
//====================
Route::prefix('managers')->middleware(['auth', 'adminRole'])->group(function(){
  Route::get('/', 'ManagerController@index')->name('managers.index');
  Route::get('/create', 'ManagerController@create')->name('manager.create');
  Route::post('/', 'ManagerController@store')->name('manager.store');
  // Route::get('/{user}', 'ManagerController@show')->name('manager.show');
  Route::get('/{user}/edit', 'ManagerController@edit')->name('manager.edit');
  Route::patch('/{user}', 'ManagerController@update')->name('manager.update');
  Route::delete('/{user}', 'ManagerController@destroy')->name('manager.destroy');
  Route::post('/search', 'ManagerController@search')->name('managers.search');
  // Route::post('/assign', 'ManagerController@assign')->name('managers.assign');
});

//== ASSIGN-COMPANIES: PROVIDE ACCESS PERMISSIONS TO A MANAGER
//====================
Route::prefix('permissions')->middleware(['auth', 'adminRole'])->group(function(){
  Route::get('/{user}/create', 'PermissionController@create')->name('permissions.create');
  Route::post('/', 'PermissionController@store')->name('permissions.store');
  Route::get('/{user}/edit', 'PermissionController@edit')->name('permissions.edit');
  Route::patch('/{user}', 'PermissionController@update')->name('permissions.update');
});
