<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 10:27
 */

class indexMain
{
    public $s;
    function __construct()
    {

        $this->s=new Smarty();
        $this->s->setCompileDir(ROOT_PATH.'compile/');
        $this->s->setTemplateDir(ROOT_PATH.'views/');

    }
}