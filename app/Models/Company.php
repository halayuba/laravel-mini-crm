<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Company\CompanyFilters;
use Storage;

class Company extends Model
{
    protected $guarded = ['id'];

    public $appends = [ 'employeeCount' ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getEmployeeCountAttribute()
    {
      return $this->employees->count();
    }

     //== SEARCH COMPANIES BY NAME
    //====================
    public function scopeSearchByName($query, $value)
    {
        $query->where('name', 'like', '%'.$value.'%');
    }

     //== CHECK IF NAME IS DUPLICATE
    //====================
    public function scopeIsDuplicate($query, $value)
    {
        $query->where('name', $value);
    }

     //== CHECK IF IMAGE EXISTS (FILE ATTRIBUTE NOT EMPTY)
    //====================
    public function scopeImageExists($query, $value)
    {
        $query->where('file', $value);
    }

     //== FILTER SCOPE
    //====================
    public function scopeFilter(Builder $builder, $request)
    {
        return (new CompanyFilters($request))->filter($builder);
    }
    // public function scopeFilter(Builder $builder, $request, array $filters = [])
    // {
    //     return (new CompanyFilters($request))->add($filters)->filter($builder);
    // }

    public function imagePathName()
    {
      return Storage::disk('local')->url('public/uploads/' . $this->file);
    }

     //== UPDATE THE ATTRIBUTE "FILE" TO NULL AFTER DELETING THE LOGO
    //====================
    public function removeLogo()
    {
      return $this->update(['file' => NULL]);
    }

     //== RELATIONSHIPS
    //====================
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
