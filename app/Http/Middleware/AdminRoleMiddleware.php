<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;

class AdminRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $adminID = Role::admin()->first()->id;

      if( $request->is('managers') && $request->user()->role_id !== $adminID )
      {
        return redirect('/home')->with(flash_message('danger', 'You do not have enough permissions to access this area.'));
      }
        return $next($request);
    }
}
