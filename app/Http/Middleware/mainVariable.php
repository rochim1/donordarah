<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\webprofile;
class mainVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = webprofile::first();
        if ($data) {
            // set parameter untuk passing data ke route/view/controller
            $request->route()->setParameter('data', $data);
            return $next($request);
        } else {
            return "halaman tidak dapat di akses, setting web profil di halaman admin";
        }
    }
}
