<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One Graphic Design</title>
    <meta name="description" content="logo design art">
    <meta name="author" content="Shadowz Web Development LTD">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/image-slider.css')}}">
    
</head>
<body>
    <header>
        <div class="heading">
            <img src="" alt="logo">
            <h1>One Graphic Design</h1>
            <p id="bars"><i class="fa fa-bars"></i></p>
        </div>
        
        <nav>
            <ul>
                <li>Home</li>
                <li>Portfolio</li>
                <li>About</li>
                <li>Contact Us</li>
                <li>Other Art</li>
            </ul>
        </nav>
        
        <div class="page">
            <div class="carousel-outer">
				<a class="previousLink" href="#">Previous</a>
				<div class="carousel-inner">
			<img class="image-shown" src="{{asset('img/_MG_8850.jpg')}}" alt="" />
					<a class="image-hidden"><img  src="{{asset('img/wholeMilk.jpg')}}" alt="" /></a>
		
				</div>
				<a class="nextLink" href="#">Next</a>
			</div>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/image-sliderCustom.js')}}"></script>
    
</body>
</html>