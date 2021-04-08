<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // route jika gagal autentikasi
            // aku buat sendiri
            // prefix admin
            // return redirect('/');
            if (request()->is('admin/*') || request()->is('admin')) {
                return route('admin.login');
            }
            else{
                // ini default
                return redirect('/');
            }
        }
    }
}
