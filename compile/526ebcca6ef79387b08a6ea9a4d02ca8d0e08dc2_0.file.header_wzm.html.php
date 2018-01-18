<?php
/* Smarty version 3.1.30, created on 2018-01-18 13:43:13
  from "F:\wamp\www\php\a1.16\excellent\views\index\header_wzm.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6096614f8857_22364314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526ebcca6ef79387b08a6ea9a4d02ca8d0e08dc2' => 
    array (
      0 => 'F:\\wamp\\www\\php\\a1.16\\excellent\\views\\index\\header_wzm.html',
      1 => 1516278450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6096614f8857_22364314 (Smarty_Internal_Template $_smarty_tpl) {
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
wzm_css/header_wzm.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wzm_js/header_wzm.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wzm_box">
<ul class="wzm_box1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <a href="?a=<?php echo $_smarty_tpl->tpl_vars['item']->value['curl'];?>
"><li class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></div></li></a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!--<a href=""><li>甜品<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span>甜品</span></div></li></a>-->
    <!--<a href=""><li>服务<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span>服务</span></div></li></a>-->
    <li class='logo'><img src="<?php echo IMG_PATH;?>
wzm_img/logo.png" alt=""></li>
    <!--<a href=""><li>动态<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span>动态</span></div></li></a>-->
    <!--<a href=""><li>诚聘<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span>诚聘</span></div></li></a>-->
    <!--<a href=""><li>我们<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span>我们</span></div></li></a>-->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <a href="?a=<?php echo $_smarty_tpl->tpl_vars['item']->value['curl'];?>
"><li class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<div class="wzm_backimg"><img src="<?php echo IMG_PATH;?>
wzm_img/1000.png" alt=""><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></div></li></a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<div class="wzm_box2">我们
<div class="wzm_logo1">
    <img src="<?php echo IMG_PATH;?>
wzm_img/logo.png" alt="">
</div>

<div class="wzm_caidan iconfont">
    &#xe62e;
</div>

</div>
<div class="wzm_caidan1 iconfont1">
    &#xe618;
</div>
<div class="zhezhao">
    <a href=""><div class="wzm_yiji">
    首页
    </div></a>
    <a href=""><div class="wzm_yiji">甜品</div></a>
    <a href=""><div class="wzm_yiji">服务</div></a>
    <a href=""><div class="wzm_yiji">动态</div></a>
    <a href=""><div class="wzm_yiji">诚聘</div></a>
    <a href=""><div class="wzm_yiji">我们</div></a>
</div>
</div>
</body>
</html><?php }
}
