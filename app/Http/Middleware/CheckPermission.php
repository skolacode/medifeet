<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckPermission
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

        /* Check the permission base on $permissions param 
            > if have the permission then allowed it 
            > else redirect to home page
        */

        $getRoleId = User::getRoleId();

        if (empty($getRoleId)) {

            return redirect()->route('/login');
        }

        return $next($request);
    }
}
