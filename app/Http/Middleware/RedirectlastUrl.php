<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectlastUrl {
	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;
	
	/**
	 * Create a new filter instance.
	 *
	 * @param Guard $auth        	
	 * @return void
	 */
	public function __construct(Guard $auth) {
		$this->auth = $auth;
	}
	
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @param \Closure $next        	
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		$last_url = $request->path ();
		if ($request->is ( 'admin*' )) {
			Config::set ( 'auth.model', 'Adminuser' );
		} else {
			if ($last_url == 'login' || $last_url == '404error' || $request->is ( 'assets*' )
				|| $request->is ( 'uploads*' ) || Request::ajax()) {
				if (Session::has ( 'last_url' ))
					Session::put ( 'last_url', Session::get ( 'last_url' ) );
			} else {
				Session::put ( 'last_url', $last_url );
				if ($request->is ( 'finishGetPass*' ))
					Session::put ( 'last_url', '/' );
			}
		}
		return $next($request);
	}
}
