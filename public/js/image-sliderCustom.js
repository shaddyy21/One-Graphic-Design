$(document).ready(function(){

	$(".nextLink").on("click", function(e){

		var currentActiveImage = $(".image-shown");
		var nextActiveImage = currentActiveImage.next();

		if(nextActiveImage.length == 0)
		{
			nextActiveImage = $(".carousel-inner a").first();
		}

		currentActiveImage.removeClass("image-shown").addClass("image-hidden").css("z-index", -10);
		nextActiveImage.addClass("image-shown").removeClass("image-hidden").css("z-index", 20);
		$(".carousel-inner a").not([currentActiveImage, nextActiveImage]).css("z-index", 1);

		e.preventDefault();
	});

	$(".previousLink").on("click", function(e){

		var currentActiveImage = $(".image-shown");
		var nextActiveImage = currentActiveImage.prev();

		if(nextActiveImage.length == 0)
		{
			nextActiveImage = $(".carousel-inner a").last();
		}

		currentActiveImage.removeClass("image-shown").addClass("image-hidden").css("z-index",-10);
		nextActiveImage.addClass("image-shown").removeClass("image-hidden").css("z-index", 20);
		$(".carousel-inner a").not([currentActiveImage, nextActiveImage]).css("z-index",1);


		e.preventDefault();
	})

});