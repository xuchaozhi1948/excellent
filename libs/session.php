<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2 0002
 * Time: 下午 2:18
 */

class session
{
    function __construct()
    {
        session_start();
    }
    public function set($key,$vaule){
        $_SESSION[$key]=$vaule;
    }
    public function got($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    public function del($key){
        unset($_SESSION[$key]);
    }

}