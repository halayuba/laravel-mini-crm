<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Manager\ManagerFilters;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAdminRole($query)
    {
      $query->where('role_id', 1);
        // $query->join('roles', 'users.role_id', '=', 'roles.id')
        //       ->where('roles.name', 'admin')
        // ;
    }

    public function scopeManagers($query)
    {
        $query->where('role_id', 2);
    }

    //== FILTER SCOPE
   //====================
   public function scopeFilter(Builder $builder, $request)
   {
       return (new ManagerFilters($request))->filter($builder);
   }

    //== SEARCH USERS BY NAME
   //====================
   public function scopeSearchByName($query, $value)
   {
       $query->where('name', 'like', '%'.$value.'%')
              ->where('role_id', 2);
   }

   public static function boot()
   {
     parent::boot();
     static::creating(function ($user) {
       $user->password = bcrypt('password');
       $user->role_id = 2;
     });
   }

   /* == FETCH COMPANY IDs FOR WHICH THIS USER HAS ACCESS PERMISSION TO == */
   public function fetchAccessIds()
   {
     return $this->companies()->pluck('id')->toArray();
   }

     //== RELATIONSHIPS
    //====================
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    // public function employees()
    // {
    //     return $this->hasManyThrough(Employee::class, Company::class);
    // }
}
