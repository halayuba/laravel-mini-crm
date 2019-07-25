<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'company_id'];

    //== SEARCH EMPLOYEES BY NAME
   //====================
   public function scopeSearchByName($query, $value)
   {
       $query->where('first_name', 'like', '%'.$value.'%')
              ->orWhere('last_name', 'like', '%'.$value.'%');
   }

    //== LIMIT THE SEARCH RESULT TO ONLY SHOW EMPLOYEES THE REQUESTER HAS PERMISSION TO ACCESS
   //====================
   public function scopeEmployeeSearchByManager($query, $value)
   {
       $query->join('companies', 'employees.company_id', '=', 'companies.id')
              ->join('company_user', 'companies.id', '=', 'company_user.company_id')
              ->join('users', 'company_user.user_id', '=', 'users.id')
              ->where('users.id', auth()->id())
              ->where('employees.first_name', 'like', '%'.$value.'%')
              ->orWhere('employees.last_name', 'like', '%'.$value.'%');
   }

    //== COUNT THE EMPLOYEES THE REQUESTER HAS PERMISSION TO ACCESS
   //====================
   public function scopeCountEmployeeSearchByManager($query)
   {
       $query->join('companies', 'employees.company_id', '=', 'companies.id')
              ->join('company_user', 'companies.id', '=', 'company_user.company_id')
              ->join('users', 'company_user.user_id', '=', 'users.id')
              ->where('users.id', auth()->id());
   }

     //== RELATIONSHIPS
    //====================
    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

}
