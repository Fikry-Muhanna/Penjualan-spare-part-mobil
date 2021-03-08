<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Auth;
 
class AdminMiddleware
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
        if (!session('admin_id')){
            return redirect('/admin/auth/login');
        }
        return $next($request);
    }
}