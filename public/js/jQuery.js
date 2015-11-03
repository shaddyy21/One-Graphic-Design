$(function (){

    /*============================================================*/
    /*                    Navigation                              */
    /*============================================================*/
        var isOpen = false;
        $('#Bars').on('click', function(event){
            event.preventDefault();
            scroll(0,0);
            if(isOpen == false){
                $('nav').show(600);
                $('section').css('padding-top','5em');

                isOpen = true;
                
            }else{
                $('#Nav').hide(550);
//                $('section').css('padding-top','5em');
                    isOpen = false;  
            }
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*             Hides navigation on link click                 */
    /*============================================================*/
        $('#Nav a').on('click', function(){
            $('#Nav').hide(550);
            $('section').css('padding-top','25.5em');
            isOpen = false;  
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
    
    
    /*============================================================*/
    /*                  Image Slider(not mine)                    */
    /*============================================================*/
        $(document).ready(function(){
            $('.image-slider').slick({
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    /*============================================================*/
});