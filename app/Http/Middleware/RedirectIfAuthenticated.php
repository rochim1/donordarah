<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // pada middleware guest ini dimungkinkan bahwa user yang telah login akan redirect kehalaman dashboard
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
        // todo : guard pada laravel ?
            if (Auth::guard($guard)->check()) {
                
                // atau juga bisa di definisikan di file fortifyServiceProvider
                if (request()->is('admin/*') || request()->is('admin')) {
                    // return "mantap";
                    return redirect('/admin');
                }else {
                    return redirect(RouteServiceProvider::HOME);
                }

            }
        }

        return $next($request);
    }
}
