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


     //== RELATIONSHIPS
    //====================
    public function Compnay()
    {
        return $this->belongsTo(Company::class);
    }

}
