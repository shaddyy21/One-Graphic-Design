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
    /*             Hides navigation on link click                 */
    /*============================================================*/
//         var isOpen = false;    
//        $('#Nav ul li a').on('click', function(){
//            $('#Nav').toggleClass('hide');
//            if(isOpen == true){
//                 $('#Nav').toggleClass('show');
//                isOpen = false;
//                
//            }
////            else{
////                 $('#nav').hide(500);
////                isOpen = false;   
////            }
//        });
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
                autoplay: true,
                autoplaySpeed: 2500,
            });
        });
    /*============================================================*/
    
    /*============================================================*/
    /*                   Paper Art                                */
    /*============================================================*/
        $('#Paperart').on('click', function(){
            $('.logo').hide(550);
            $('.packaging').hide(650);
            $('.paper').show(550);
        });           
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Logo                                */
    /*============================================================*/
        $('#Logo').on('click', function(){
            $('.packaging').hide(650);
            $('.paper').hide(550);
            $('.logo').show(550);            
        });
    /*============================================================*/
    
    
    /*============================================================*/
    /*                        Packaging                           */
    /*============================================================*/
    
        function getQueryString(sParam)
        {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) 
            {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) 
                {
                    return sParameterName[1];
                }
            }
        }

        if(getQueryString("slide")=="packing"){
            $('.paper').hide(550);
            $('.logo').hide(550);
            $('.packaging').show(650);
            
            var pack_pos = $(".packaging").offset();
            $("html, body").animate({ scrollTop: pack_pos.top-200 }, "fast");
            

        }


        $('#Pack').on('click', function(){
                $('.paper').hide(550);
                $('.logo').hide(550);
                $('.packaging').show(650);
        });
    /*============================================================*/
    
    /*============================================================*/
    /*                       Ajax                                 */
    /*============================================================*/
//       var contentLoad = function(e){
//            e.preventDefault();
//           
//            var url = $(this).attr("href");    
//           
//            History.pushState(null,null,url);
//        };
//    
//        History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
//            var state = History.getState(); // Note: We are using History.getState() instead of event.state
//            var spinner = new Spinner().spin();
//            
//            $(".container").append(spinner.el);
//            
//            $.get(state.url, function(data){
//                $(".container").empty().append(data);
//            });
//        });
//        $(".display").on("click",contentLoad);
//        $(".pagination li").on("click",".pagination a",contentLoad);
    /*==============================================================*/
});