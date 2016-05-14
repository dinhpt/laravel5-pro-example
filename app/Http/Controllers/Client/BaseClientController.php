<?php
namespace App\Http\Controllers\Client;

use App\Http\Requests\Admin\UserRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Services\ImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Datatables;
use Illuminate\Support\Facades\Session;

class BaseClientController extends Controller
{
    protected $layout = 'layouts.client';
    protected function setupLayout(){
        if (! is_null($this->layout)) {
           return View( $this->layout );
        }
    }
}
