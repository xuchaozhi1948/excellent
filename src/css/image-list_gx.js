
window.onload=function () {
    window.onscroll=function () {
        let tops=document.documentElement.scrollTop;
        let heights=parseInt(document.documentElement.clientHeight / 3);
        let title1=document.querySelector('.new-shangshi_gx');
        console.log(title1.offsetTop);


        if(tops>title1.offsetTop){

        }
        // let history1=$('.history1').offset();
        // let hist1=document.querySelector('.history1');
        // if(tops>history1.top-heights){
        //     hist1.style.left='0%';
        // }
        // let thehistory=$('.thehistory').offset();
        // let thehist=document.querySelector('.thehistory');
        // if(thehistory.top-heights<tops){
        //     thehist.style.left='0%';
        // }
        // let history4=$('.wzm_history4').offset();
        // let hist4=document.querySelector('.wzm_history4');
        // if(tops>history4.top-600){
        //     hist4.style.top=408+'px';
        // }
        // let worldmap=$('.worldmap1').offset();
        // let map=document.querySelector('.worldmap1');
        // if(tops>worldmap-heights){
        //     map.style.height='100%'+'px';
        // }
        // $('.wzm_name').focus(function () {
        //     $(this).css('background','#ffedd9');
        // }).blur(function () {
        //     $(this).css('background','#fff');
        // })
        // $('.wzm_content').focus(function () {
        //     $(this).css('background','#ffedd9');
        //     $('.wzm_submit1').css({'background':'#fff'});
        //     $('.wzm_submit1').css({'color':'#ffedd9'});
        // }).blur(function () {
        //     $(this).css('background','#fff');
        //     $('.wzm_submit1').css({'background':'#ffedd9'});
        //     $('.wzm_submit1').css({'color':'#fff'});
        // })
    }
}