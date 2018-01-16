window.onload=function () {
    $('.wzm_box1 li').click(function () {
        $(this).find('.wzm_backimg').eq(0).addClass('wzm_active1')
        $(this).siblings().find('.wzm_backimg').eq(0).removeClass('wzm_active1');
    })
    $('.wzm_caidan').click(function () {
        $(this).css({'display':'none'}).closest('.wzm_box2').next().css({'display':'block'});
        $('body').css({'height':'100%'},{'background':'#111'});
        $('.zhezhao').css({'opacity':'1'}).slideDown(500);
    })
    $('.wzm_caidan1').click(function () {
        $(this).css({'display':'none'}).prev().find('.wzm_caidan').css({'display':'block'});
        $('.zhezhao').slideUp(500);
    });
}
