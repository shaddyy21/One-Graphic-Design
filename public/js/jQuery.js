$(function (){
    
/*============================================================*/
/*                    Image Slider                            */
/*============================================================*/
    var isOpen = false;
    $('#bars').on('click', function(event){
        event.preventDefault();

        if(isOpen == false){
            $('nav').show(600);
            isOpen = true;

        }else{
            $('nav').hide(550);
            isOpen = false;
        }
    });
/*============================================================*/
    $("nav a[class^='linkUnderline']").on('click', function(){
        $(this).siblings().addClass('linkUnderline');
        $(this).siblings().removeClass('linkUnderline');
        $(this).toggleClass('linkUnderline');
    });
    
});