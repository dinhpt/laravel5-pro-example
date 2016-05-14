<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Services\ImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Auth;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Adminusers;
use Datatables;
use App\Roles;

class BaseController extends Controller
{
    
    /**
     * The defined edit form or not
     *
     * @var boolean
     */
     protected  $isEdit ;
     
    

}
