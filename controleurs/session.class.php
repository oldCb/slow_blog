<?php

// class session singleton

class Session {
	
    private static $session = false;

    public static function startSession(){
    	if(self::$session == false){
    		session_start();
    		self::$session = true;
    	}
    }

    public static function setSession($key, $value){
		$_SESSION[$key] = $value;
		return $_SESSION[$key];
    }

    public static function getSession($key){
    	if (isset($_SESSION[$key])) {
    		return $_SESSION[$key];
    	}
    	else{
    		return false;
    	}
    }
}


?>