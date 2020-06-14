<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

/**
 * Class UserHasAdminPrivileges.
 */
class UserHasAdminPrivileges
{
    /**
     * Show 401 error if Auth::user()->isAdmin() == false or if Auth::check() == false
     *
     * @param $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            abort(401, 'User not authorised: You are not logged in.');
        }

        if (!Auth::user()->isAdmin()) {
            abort(401, 'User not authorised: Your account is not Admin.');
        }

        return $next($request);
    }
}
