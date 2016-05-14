<?php namespace App\Http\Middleware;


use Config;
 class AdminRoles {
    public static function getList(){
    	$roles=Config::get("settings.roles");
    	
    	return $roles;
    	
    }
    public static function getJsonList(){
        $roles=Config::get("settings.roles");
       
       
       
       
        return json_encode($roles);
         
    }
    public static function toString($roleId){
        $roles=Config::get("settings.roles");
        foreach ($roles as $key=>$value){
        	if($key==$roleId)
        	    return $value;
        	
        }
        return '';
        
    }
}