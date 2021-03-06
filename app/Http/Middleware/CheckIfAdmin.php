<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    /**
     * Checked that the logged in user is an administrator.
     *
     * --------------
     * VERY IMPORTANT
     * --------------
     * If you have both regular users and admins inside the same table,
     * change the contents of this method to check that the logged in user
     * is an admin, and not a regular user.
     *
     * @param [type] $user [description]
     *
     * @return bool [description]
     */
    private function checkIfUserIsAdmin($user)
    {
        // return ($user->is_admin == 1);
        return true;
    }

    /**
     * Answer to unauthorized access request.
     *
     * @param [type] $request [description]
     *
     * @return [type] [description]
     */
    private function respondToUnauthorizedRequest($request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response(trans('backpack::base.unauthorized'), 401);
        } else {
            return redirect()->guest(backpack_url('login'));
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->guest(backpack_url('login'));
        }

        if (backpack_auth()->guest()) {
            return $this->respondToUnauthorizedRequest($request);
        }

        $user = backpack_user();

        $routeName = $user->roles->get(0)->name;

        if (!in_array($routeName,
                ['SUPERADMIN-XEPANUNTY', 'PROFESSIONAL', 'STARTER', 'FREE', "ENTERPRISE", "SALES", "PERSONAL"])) {
            return $this->respondToUnauthorizedRequest($request);
        }

        /*switch ($routeName) {
            case 'SUPERADMIN-XEPANUNTY' :
                //return redirect()->route(backpack_url('dashboard'));
                break;
            case 'PROFESSIONAL' :
                return redirect()->route('professional');
                break;
            case 'STARTER' :
                break;
                return redirect()->route('starter');
            case 'FREE' :
                return redirect()->route('free');
                break;
            case 'ENTERPRISE' :
                return redirect()->route('enterprise');
                break;
            case 'USER-SALES' :
                return redirect()->route('sale');
                break;
        }*/


        return $next($request);
    }
}
