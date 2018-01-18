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
    function header(){
        $db=new db('category');
        $result=$db->selAll('*',"pid=0 limit 0,3");
        $this->s->assign("row",$result);
        $result1=$db->selAll('*',"pid=0 limit 3,6");
        $this->s->assign("arr",$result1);
        $this->s->display('index/header_wzm.html');
    }
    function shouye(){
        $this->s->display('index/index.html');
    }
    function tianpin(){
        $this->s->display('index/tianpin.html');
    }
    function fuwu(){
        $this->s->display('index/fuwu.html');
    }
    function dongtai(){
        $this->s->display('index/dongtai.html');
    }
    function chengpin(){
        $this->s->display('index/chengpin.html');
    }
    function women(){
        $this->s->display('index/women.html');
    }
    function validation_zhuce(){
        $name=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $db=new db('user');
        $result=$db->add("name,pass","'{$name}','{$pass}'");
//        var_dump($result);
        if($result==1){
            $this->s->display('index/login_wzm.html');
        }
        else{
            $this->s->assign("tishi","注册失败");
            $this->s->assign('lujing',"a=zhuce");
            $this->s->display("index/tishi_wzm.html");
        }
    }
    function validation_login(){
        $name=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $db=new db('user');
        $result=$db->selone('*',"name='{$name}'");
        if($result){
            if($result['name']==$name){
                if($result['pass']==$pass){
                    $this->s->assign('tishi',"登陆成功");
                    $this->s->assign("lujing","a=init");
                    $this->s->display("index/tishi_wzm.html");
                }
                else{
                    $this->s->assign('tishi',"密码错误");
                    $this->s->assign("lujing","a=login");
                    $this->s->display("index/tishi_wzm.html");
                }
            }
            else{
                $this->s->assign('tishi',"账号不存在");
                $this->s->assign("lujing","a=login");
                $this->s->display("index/tishi_wzm.html");
            }
        }
        else{
            $this->s->assign('tishi',"账号不存在");
            $this->s->assign("lujing","a=login");
            $this->s->display('index/login_wzm.html');
        }

    }
    function login(){
        $this->s->display("index/login_wzm.html");
    }
    function zhuce(){
        $this->s->display('index/zhuce_wzm.html');
    }
}