<?php
/* Smarty version 3.1.30, created on 2018-01-18 08:41:40
  from "F:\wamp\www\php\a1.16\excellent\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a604fb45d13e3_08144813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c56c13546ad860864443a3dcbfa673f3d7920b' => 
    array (
      0 => 'F:\\wamp\\www\\php\\a1.16\\excellent\\index.php',
      1 => 1516079558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a604fb45d13e3_08144813 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>/**
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

<?php }
}
