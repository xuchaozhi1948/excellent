<?php
/* Smarty version 3.1.30, created on 2018-01-18 11:29:50
  from "F:\wamp\www\php\a1.16\excellent\views\index\tishi_wzm.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60771eccd450_30539560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a813e50f23a54e46cac5c3da24b08208915bdb1' => 
    array (
      0 => 'F:\\wamp\\www\\php\\a1.16\\excellent\\views\\index\\tishi_wzm.html',
      1 => 1516266696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60771eccd450_30539560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wzm_css/tishi_wzm.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <style>
        .box2 span{
            color: red;
        }
    </style>
</head>
<body>
<div class="box">
<div class="box1"><?php echo $_smarty_tpl->tpl_vars['tishi']->value;?>
</div>
<div class="box2">还有<span>5</span>s后返回 <a href="?<?php echo $_smarty_tpl->tpl_vars['lujing']->value;?>
">立即返回</a></div>
</div>
</body>
<?php echo '<script'; ?>
>
    var a=document.querySelector('a');
        let s=5;
        let t=setInterval(function () {
            s--;
            $('.box2 span').html(s);
            if(s==0){
                location.href=a.href;
            }
        },1000);
<?php echo '</script'; ?>
>
</html><?php }
}
