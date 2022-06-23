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
        
            if ($this->user_permis() == $userId)
            {
               return $next($request);
            }
            else {

                return response()->json('you are not allowed');
            }


        
    }

    public function user_permis(){
            $permi = new Permission();
            $userId = Auth::user()->id;
            $permis = $permi->first()->whereUser_id($userId)->get();
                foreach($permis as $permission){
                    $user_id = $permission->user_id;
                    return $user_id;
                }
        
        }
}
