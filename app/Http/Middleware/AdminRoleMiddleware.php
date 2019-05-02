<?php

namespace App\Http\Middleware;

use Closure;

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
      if( $request->is('managers') && $request->user()->role_id !== adminRole() )
      {
        return redirect('/home')->with(flash_message('danger', 'You do not have enough permissions to access this area.'));
      }
        return $next($request);
    }
}
