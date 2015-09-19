<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Model\User as UserModel;

class AuthAdmin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Session::get('user');

        if(!$user){
            return view('auth.login');
        }

        $userCk = UserModel::where("rol_id", 1)->first();

        if(count($userCk) <=0 ){
            return "Error role";
        }

        $request->auth = $userCk;

        return $next($request);
    }
}
