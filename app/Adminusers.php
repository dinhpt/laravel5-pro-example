<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Lang;

class Adminusers extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adminusers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
     
    public static function validate($isEdit,$input,$id){
        $niceNames = array(
            'username' => Lang::get('properties.validator.form.username'),
            'password' => Lang::get('properties.validator.form.password'),
            'confirm_password'=>Lang::get('properties.validator.form.confirm_password'),
            'email' => Lang::get('properties.validator.form.email'),
            //'role'=>Lang::get('properties.validator.form.role_id'),
        );
        if($isEdit==false){
            $validator = Validator::make($input, [
                'username' => 'required|max:32|unique:adminusers,username,'.$id,
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'email' => 'required|email|max:32|unique:adminusers,email,'.$id,
                ]);
        }
        else
        {
             $validator = Validator::make($input, [
                'role' => 'required',
                ]);
        }
        $validator->setAttributeNames($niceNames);
        return $validator ;
    }
}
