<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        $getRoleId = User::getRoleId();

        /* if the user did not have the permission */
        if ($getRoleId != $role) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
