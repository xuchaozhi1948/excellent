<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:40:16
  from "E:\wamp64\www\excellent\views\index\login_wzm.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a604f60a4dd80_92440077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4ab812ece01303dd9152c26ef5e13e2c5341fb' => 
    array (
      0 => 'E:\\wamp64\\www\\excellent\\views\\index\\login_wzm.html',
      1 => 1516260945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a604f60a4dd80_92440077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/login_wzm.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wzm_css/login_wzm.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wzm_zhezhao">
     <div class="wzm_login">
         <div class="kuang">
         <div class="wzm_logo">
             <img src="<?php echo IMG_PATH;?>
wzm_img/drawing_39.png" alt="" class="wzm_logoimg">
         </div>
         <div class="wzm_title">
             <img src="<?php echo IMG_PATH;?>
wzm_img/drawing_40.png" alt="" class="wzm_titleimg">
             <div class="denglu">登陆</div>
             <div class="user_login">USER　LOGIN</div>
         </div>
         <form class="loginli">
             <div class="a">
                 <div class="wzm_close iconfont">&#xe61a;</div>
             </div>
             <div class="yonghu">
                 用户名 <span>NAME</span>
             </div>
             <input type="text" class="username iconfont" placeholder="&#xe851;请输入用户名/手机号/邮箱">
             <div class="password">
                 密码 <span>PASSWORD</span>
             </div>
             <input type="password" class="username iconfont" placeholder="&#xe652;请输入密码">
             <div class="gongneng">
                 <div class="passradio">
                 <input type="radio" class="passradios">
                 <span>记住密码</span>
                 </div>
                 <a href=""><div class="wangjipass">忘记密码?</div></a>
             </div>
             <div class="anniu">
                 <button class="lijilogin">立即登陆</button>
                 <a href="?a=zhuce"><div class="zhuce">请注册</div></a>
             </div>
             <div class="loginfangshi">
                 <a href="" class="weixins"><div class="weixin iconfont">&#xe631;</div></a>
                 <a href="" class="weixins"><div class="weixin iconfont">&#xe65e;</div></a>
                 <a href="" class="weixins"><div class="weixin iconfont">&#xe619;</div></a>
             </div>
         </form>
         </div>
     </div>
</div>
</body>
</html><?php }
}
