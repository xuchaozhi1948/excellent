<?php
/* Smarty version 3.1.30, created on 2018-01-18 14:15:28
  from "D:\wamp64\www\nodejs\excellent\views\index\chengpingjs_xcz.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60ac00714512_18521866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97051d30139da3e3765327c06423be622445361' => 
    array (
      0 => 'D:\\wamp64\\www\\nodejs\\excellent\\views\\index\\chengpingjs_xcz.html',
      1 => 1516284927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header_wzm.html' => 1,
    'file:index/footer_wzm.html' => 1,
  ),
),false)) {
function content_5a60ac00714512_18521866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header_wzm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
css_xcz/base_xcz.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
css_xcz/chengpingjs.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
js_xcz/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<!--焦点图-->
<div class="xcz_focus">
    <h1>安逸 の 午后</h1>
    <h2>WHY IS IT THAT I DON'T KNOW</h2>
    <h2>THAT THIS RESTAERANT'S BREAD AND CAKES ARE SO CHEAP AND</h2>
    <p>山/有/木/兮/木/有/枝</p>
</div>
<!--内容框架-->
<div class="xcz_content">
    <div class="xcz_content-box">
        <div class="xcz_content-top">
            <i class="iconfont icon-choiceO" style="font-size: 16px;line-height: 55px"></i>诚聘
        </div>
        <div class="xcz_cp-cont">
            <div class="xcz_cp-login">
                <div class="xcz_cp-login2">
                    <i class="iconfont icon-wutouxiang"></i><b>12345678900</b><i id="xcz_sj" class="iconfont icon-icon_arrow_right"></i>
                </div>
                <div class="xcz_cp-dl"><a href="">退出当前登录</a></div>
            </div>
            <div class="xcz_cp-title">
                <img src="<?php echo IMG_PATH;?>
veronesse_001.png" alt="">
                <h5>一路相伴，共创辉煌</h5>
                <p>GO HAND CREATE BRILLIANCE</p>
            </div>
            <div class="xcz_cp-box">
                <h1>您的简历已提交成功！</h1>
                <h2>我们会第一时间与您联系</h2>
                <h3>感谢您的支持。</h3>
                <p>Your resume has been submitted successfully!</p>
                <p>We will contact you the first time<br>
                    thank you for your support.</p>
            </div>
            <div class="xcz_cp-jrwm">加入我们</div>
        </div>
    </div>
</div>
<div style="margin-top: 740px"></div>
<?php echo '<script'; ?>
>
    $("#xcz_sj").click(function(){
        $(".xcz_cp-dl").slideToggle(300);
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer_wzm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
