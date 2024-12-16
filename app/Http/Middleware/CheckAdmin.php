<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class CheckAdmin
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
       
        $user = Auth::user();
        
        if ($user && $user->role_id == '3') {
            return $next($request);
        }

        return redirect('/');
    }
}
