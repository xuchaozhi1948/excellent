<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 11:52
 */

class index extends indexMain
{
    function init(){
        $this->s->display('index/index.html');

    }
    function validation_login(){
        $name=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $db=new db('user');
        $db->add('name',"$name");
    }
    function login(){
        $this->s->display('index/login_wzm.html');
    }
    function zhuce(){
        $this->s->display('index/zhuce_wzm.html');
    }
}