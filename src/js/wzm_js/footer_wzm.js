$(function () {
    let flag=false;
    $('.wzm_more').click(function () {
        if(flag){
            $(this).closest('.wzm_yidong2').css({'height':'49px'}).find('.fenlei').slideUp(10);
            flag=false;
        }
        else if(!flag){
            $(this).closest('.wzm_yidong2').css({'height':'auto'}).find('.fenlei').slideDown(300);
            flag=true;
        }
    });

})