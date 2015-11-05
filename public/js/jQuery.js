$(function (){

    /*============================================================*/
    /*                    Navigation                              */
    /*============================================================*/
        var isOpen = false;
        $('#Bars').on('click', function(event){
            event.preventDefault();
            scroll(0,0);
            
            $('#Nav').toggleClass("show");
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*             Hides navigation on link click                 */
    /*============================================================*/
        $('#Nav a').on('click', function(){
            $('#Nav').toggleClass("show");
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
    /*                    Active Link                             */
    /*============================================================*/
        $(".work p[class^='linkUnderline']").on('click', function(){
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
                autoplaySpeed: 2500,
            });
        });
    /*============================================================*/
    
    /*============================================================*/
    /*                   Paper Art                                */
    /*============================================================*/
        $('#Paperart').on('click', function(){
            $('.packaging').hide(550);
            $('.logo').hide(550);
            $('.paper').show(550);
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Logo                                */
    /*============================================================*/
        $('#Logo').on('click', function(){
            $('.packaging').hide(550);
            $('.paper').hide(550);
            $('.logo').show(550);
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Packaging                           */
    /*============================================================*/
        $('#Pack').on('click', function(){
                $('.paper').hide(550);
                $('.logo').hide(550);
                $('.packaging').show(600);
        });
    /*============================================================*/
    
    $('.pic').on('click', function(){
        $('.container').addClass('dim');
        $('.paper,.logo,.packaging').hide(600);
        $('.image-slider,.form').hide(600);
        $('.info').show(650);
        
        $('.close').on('click', function(){
            $('.container').removeClass('dim');
            $('.info').hide('600');
            $('.paper,.logo,.packaging').show(650);
            $('.image-slider,.form').show(650);
        });
        
    });

});