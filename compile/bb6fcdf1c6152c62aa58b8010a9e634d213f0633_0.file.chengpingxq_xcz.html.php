<?php
/* Smarty version 3.1.30, created on 2018-01-18 14:26:02
  from "D:\wamp64\www\nodejs\excellent\views\index\chengpingxq_xcz.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60ae7a32d491_09442726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb6fcdf1c6152c62aa58b8010a9e634d213f0633' => 
    array (
      0 => 'D:\\wamp64\\www\\nodejs\\excellent\\views\\index\\chengpingxq_xcz.html',
      1 => 1516285561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header_wzm.html' => 1,
    'file:index/footer_wzm.html' => 1,
  ),
),false)) {
function content_5a60ae7a32d491_09442726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header_wzm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
css_xcz/base_xcz.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
css_xcz/chengpingxq.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
js_xcz/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
js_xcz/jquery.validate.js"><?php echo '</script'; ?>
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
                <form id="xcz_bd" method="get" action="">
                    <div class="xcz_group">
                        <label for="xcz_name">姓名：</label>
                        <input type="name" class="xcz_control" name="name" id="xcz_name" placeholder="请输入您的姓名">
                         <b class="xcz_block"></b>
                    </div>
                    <div class="xcz_group">
                        <label for="xcz_phone">手机：</label>
                        <input type="phone" class="xcz_control" name="phone" id="xcz_phone" placeholder="请输入您的手机">
                         <b class="xcz_block"></b>
                    </div>
                    <div class="xcz_group">
                        <label for="xcz_email">邮箱：</label>
                        <input type="email" class="xcz_control" name="email" id="xcz_email" placeholder="请输入您的邮箱">
                         <b class="xcz_block"></b>
                    </div>
                    <div class="xcz_group">
                        <label for="xcz_email">职位：</label>
                        <select class="xcz_control xcz_conts" name="sele">
                            <option selected>请选择应聘职位</option>
                            <option>助理西点师</option>
                            <option>营养顾问</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="xcz_group">
                        <label class="xcz_sss">工作经历：</label>
                        <textarea class="xcz_wby" name="tltle" rows="3" placeholder="不超过400字"></textarea>
                    </div>
                    <div class="xcz_group">
                        <label class="xcz_sss">获得荣誉：</label>
                        <textarea class="xcz_wby xcz_gro" name="titles" rows="3"></textarea>
                    </div>
                    <a href="index.php?m=index&a=chengpingjs">a<input class="xcz_cp-jrwm" type="submit" value="提交"></a>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 1070px"></div>
<?php echo '<script'; ?>
>
    $("#xcz_sj").click(function(){
        $(".xcz_cp-dl").slideToggle(300);
    });
    $("#xcz_bd").validate({
        rules: {
            name: {
                required:true,
            },
            phone: {
                required: true,
                minlength: 11,
                maxlength: 11
            },
            email: {
                required: true,
                email: true
            }

        },
        messages:{
            name: {
                required: "请输入姓名",
            },
            phone: {
                required: "请输入手机号",
                minlength: "请输入11位的手机号",
                maxlength: "请输入11位的手机号"
            },
            email: {
                required: "请输入Email地址",
                email: "请输入正确的email地址"
            }

        },
        debug: true,
        errorElement: 'b',
        errorPlacement: function(error, element) {
            if ($(element).parent().hasClass('xcz_block')) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    })
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer_wzm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
