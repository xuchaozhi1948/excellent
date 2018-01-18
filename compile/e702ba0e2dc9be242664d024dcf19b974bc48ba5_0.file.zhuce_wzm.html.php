<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:21:03
  from "F:\wamp\www\php\a1.16\excellent\views\index\zhuce_wzm.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a603ccf01ccd9_80139480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e702ba0e2dc9be242664d024dcf19b974bc48ba5' => 
    array (
      0 => 'F:\\wamp\\www\\php\\a1.16\\excellent\\views\\index\\zhuce_wzm.html',
      1 => 1516256460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a603ccf01ccd9_80139480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            font-size: 12px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wzm_css/zhuce_wzm.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/zhuce_wzm.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"><?php echo '</script'; ?>
>

    <style>
        .loginli{
            height:auto;
        }

    </style>
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
            <div class="denglu">注册</div>
            <div class="user_login">USER ZHUCE</div>
        </div>
        <form class="loginli" action="?a=validation_login" method="post">
            <div class="a">
                <div class="wzm_close iconfont">&#xe61a;</div>
            </div>
            <div class="yonghu">
                用户名 <span>NAME</span>
            </div>
            <input type="text" name="user" class="username iconfont" placeholder="&#xe851;请输入用户名/手机号/邮箱">
            <div class="password">
                密码 <span>PASSWORD</span>
            </div>
            <input type="password" name="pass" class="username pass iconfont" placeholder="&#xe652;请输入密码">
            <div class="password">
                确认密码 <span>CONFIRM PASSWORD</span>
            </div>
            <input type="password" name="passto" class="username iconfont" placeholder="&#xe652;再次输入密码">
            <div class="gongneng">
                <div class="dianji iconfont">&#xe61b;</div>
                <span>我已阅读并遵守该服务条款</span>
            </div>
            <button class="anniu">
                立即注册
            </button>
            <a href="?a=login"><div class="loginfangshi">
                < <span>已有账号登陆</span>
            </div></a>
        </form>
        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    $('form').validate({
        rules:{
            user:{
                required:true,
            },
            pass:{
                required:true,
                minlength:6,
                maxlength:10,
            },
            passto:{
                required:true,
                minlength:6,
                maxlength:10,
                equalTo:'.pass'
            }
        }
    })
<?php echo '</script'; ?>
>
</html><?php }
}
