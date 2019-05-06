<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Company extends Model
{
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

     //== SEARCH COMPANIES BY NAME
    //====================
    public function scopeSearchByName($query, $value)
    {
        $query->where('name', 'like', '%'.$value.'%');
    }

    public function scopeIsDuplicate($query, $value)
    {
        $query->where('name', $value);
    }

    public function scopeImageExists($query, $value)
    {
        $query->where('file', $value);
    }

    public function imagePathName()
    {
      return Storage::disk('local')->url('public/uploads/' . $this->file);
    }

    public function removeLogo()
    {
      return $this->update(['file' => '']);
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
