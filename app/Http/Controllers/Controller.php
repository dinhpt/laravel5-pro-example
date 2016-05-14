<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function fomartError($codeError, $strs, $func) {
        $pos = strpos ( $strs, $codeError );
        if ($pos !== false) {
            if ($func == 'update')
                return Lang::get ( "messageInfo.error.update.name" );
             
            return Lang::get ( "messageInfo.error.delete.name" );
        } else {
            return Lang::get ( "messageInfo.error.system" );
        }
        return "";
    }
}

