<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Permission;
use Auth;


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
        $permi = new Permission();
        $permis = $permi->first();
        

        
            if ($permis->user_id == $userId)
            {
               return $next($request);
            }
            else {

                return response()->json('you are not allowed');
            }
        
    }
}
