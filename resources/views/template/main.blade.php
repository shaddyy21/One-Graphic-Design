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
                <a class="linkUnderline" href="#"><li>Home</li></a>
                <a class="linkUnderline-two" href="#"><li>Portfolio</li></a>
                <a class="linkUnderline-three" href="#"><li>About</li></a>
                <a class="linkUnderline-four" href="#"><li>Contact Us</li></a>
                <a class="linkUnderline-five" href="#"><li>Other Art</li></a>
            </ul>
        </nav>
        
        <main>
            <section id="Home">
                <div class="page">
            <div class="carousel-outer">
				<div class="carousel-inner">
                    <img class="image-shown" src="{{asset('img/_MG_8850.jpg')}}" alt=""/>
					<img class="image-hidden" src="{{asset('img/wholeMilk.jpg')}}" alt=""/>
		
				</div>
				<a class="previousLink" href="#">Previous</a>
				<a class="nextLink" href="#">Next</a>
			</div>
        </div>
            </section>
            
            <section id="Portfolio">
                
            </section>
            
            <section id="About">
                
            </section>
            
            <section id="Contact">
                
            </section>
            
            <section id="Other">
                
            </section>
        </main>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/image-sliderCustom.js')}}"></script>
    
</body>
</html>