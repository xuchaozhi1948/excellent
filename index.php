<?php

/**
 * @Author: Administrator
 * @Date:   2018-01-15 14:54:55
 * @Last Modified by:   Administrator
 * @Last Modified time: 2018-01-15 14:56:21
 */


header('content-type:text/html;charset=utf8');
$str=substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/'));
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].$str.'/');

define('ROOT_PATH',__DIR__.'/');
define('LIBS_PATH',ROOT_PATH.'libs/');
define('SRC_PATH',WEB_PATH.'src/');


define("JS_PATH",WEB_PATH."src/js/");
define("CSS_PATH",WEB_PATH."src/css/");
define("IMG_PATH",WEB_PATH."src/img/");
define("FONT_PATH",WEB_PATH."src/font/");
include_once LIBS_PATH."Smaty/Smarty.class.php";
include_once LIBS_PATH.'router.class.php';
include_once LIBS_PATH.'indexMain.class.php';
include_once LIBS_PATH.'pages.php';
include_once LIBS_PATH.'db.php';
$r=new router();
$r->getInfo();

