<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Permission;
use Auth;
use App\Models\Permission;

class PermisMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $userId = Auth::user()->id;
        $permis = new Permission();
        

        if($permis->whereUser_id($userId)) {
            if ($permis->permis == true)
            {
               return $next($request);
            }
            else {

                return redirect('/');
            }
        }
    }
}
