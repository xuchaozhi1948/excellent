$(function () {
    let flag=true;
  $('.dianji').click(function () {
      if(flag){
          $(this).css({'background':'#6dca00'});
          flag=false;
      }
      else{
          $(this).css({'background':'#fff'})
          flag=true;
      }
  });
  $('.wzm_close').click(function () {
      $('.wzm_zhezhao').css({'display':'none'});
  });
})