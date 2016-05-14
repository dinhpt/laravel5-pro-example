<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;

class HomeController extends BaseClientController {
	protected $layout = 'layouts.client';
	public function index() {
		Log::info ( "=====start home=====" );
		Session::forget ( 'email_input' );
		
		return view ( $this->layout, [ 'content' => view ( 'client.home') ] );
	}
}
