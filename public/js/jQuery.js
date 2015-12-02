$(function (){

    /*============================================================*/
    /*                    Navigation                              */
    /*============================================================*/
        var isOpen = false;
        $('#Bars').on('click', function(event){
            event.preventDefault();
            scroll(0,0);
            $('#Nav').toggleClass('show');
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                    Active Link                             */
    /*============================================================*/
        $(".link a[class^='linkUnderline']").on('click', function(){
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
//                autoplay: true,
//                autoplaySpeed: 2500,
            });
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                   Paper Art                                */
    /*============================================================*/
        function getQueryString(sParam){
         
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++){
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) 
                {
                    return sParameterName[1];
                }
            }
        }

        if(getQueryString("slide")=="paper"){
            $('.logo').hide(550);
            $('.packaging').hide(650);
            $('.paper').show(1);       
            
            var pack_pos = $(".paper").offset();
            $("html, body").animate({ scrollTop: pack_pos.top-200 }, "fast");
        }
    
        $('#Paperart').on('click', function(){
            $('.logo').hide(550);
            $('.packaging').hide(650);
            $('.paper').show(550);
        });           
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Logo                                */
    /*============================================================*/
    function getQueryString(sParam){
         
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++){
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) 
                {
                    return sParameterName[1];
                }
            }
        }

        if(getQueryString("slide")=="logo"){
            $('.packaging').hide(650);
            $('.paper').hide(550);
            $('.logo').show(1);        
            
            var pack_pos = $(".logo").offset();
            $("html, body").animate({ scrollTop: pack_pos.top-200 }, "fast");
        }
    
        $('#Logo').on('click', function(){
            $('.packaging').hide(650);
            $('.paper').hide(550);
            $('.logo').show(550);            
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Packaging                           */
    /*============================================================*/
        function getQueryString(sParam){
         
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++){
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) 
                {
                    return sParameterName[1];
                }
            }
        }

        if(getQueryString("slide")=="packaging"){
            $('.paper').hide(550);
            $('.logo').hide(550);
            $('.packaging').show(1);
            
            var pack_pos = $(".packaging").offset();
            $("html, body").animate({ scrollTop: pack_pos.top-200 }, "fast");
        }
    
        $('#Pack').on('click', function(){
                $('.paper').hide(550);
                $('.logo').hide(550);
                $('.packaging').show(650);
        });
    /*============================================================*/
});