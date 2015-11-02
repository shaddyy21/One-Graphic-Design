$(function (){
    /*============================================================*/
    /*                    Navigation                              */
    /*============================================================*/
        var isOpen = false;
        $('#bars').on('click', function(event){
            event.preventDefault();
            scroll(0,0);
            if(isOpen == false){
                $('nav').show(600);
                isOpen = true;
                
            }else{
                
                $('nav a').on('click', function(){
                    $('nav').hide(550);
                    isOpen = false;  
                });
                
                $('nav').hide(550);
                    isOpen = false;  
            }
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                    Active Link                             */
    /*============================================================*/
        $("nav a[class^='linkUnderline']").on('click', function(){
            $(this).siblings().addClass('linkUnderline');
            $(this).siblings().removeClass('linkUnderline');
            $(this).toggleClass('linkUnderline');
        });
    /*============================================================*/
});