<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        $user = $request->user();
            //$request->user() === Auth::user()
            //dd($user);
            // if the user is admin
            if ($user && $user->role_id==5) {
                return $next($request);
            }
        else { // else: redirect to login page/dashboard page/error page/ unauthorized page
                return redirect('/home');
            }
    }
}
