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
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/image-slider.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
    
</head>
<body>
    <header>
        <div class="heading">
            <img src="" alt="logo">
            <h1>One Graphic Design</h1>
            <p id="Bars"><i class="fa fa-bars"></i></p>
        </div>
        
        <nav id="Nav">
            <ul>
                <a class="linkUnderline" href="#Home"><li>Home</li></a>
                <a class="linkUnderline-two" href="#Portfolio"><li>Portfolio</li></a>
                <a class="linkUnderline-three" href="#About"><li>About</li></a>
                <a class="linkUnderline-four" href="#Contact"><li>Contact Us</li></a>
                <a class="linkUnderline-five" href="#Other"><li>Other Art</li></a>
            </ul>
        </nav>
        
        <main>
            <section id="Home">
               <h1>Home</h1>
            <div class="carousel-outer">
				<div class="image-slider">
                    <img class="image-shown" src="{{asset('img/_MG_8841.jpg')}}" alt=""/>
                    <img class="image-hidden" src="{{asset('img/_MG_8850.jpg')}}" alt=""/>
					<img class="image-hidden" src="{{asset('img/flagTwoSided.jpg')}}" alt=""/>
					<img class="image-hidden" src="{{asset('img/wholeMilk.jpg')}}" alt=""/>
				</div>
			</div>
            </section>
            
            <section id="Portfolio">
               <h1>Portfolio</h1>
                <div class="work" id="Work">
                    <p id="Paperart" class="linkUnderline">Paper Art</p>
                    <p id="Logo" class="linkUnderline-two">Logo</p>
                    <p id="Pack" class="linkUnderline-three">Packaging</p>
                </div>
                <div class="display">
                   <div class="paper">
                      <p>Paper Art</p>
                       <img src="{{asset('img/_MG_8841.jpg')}}" alt="">
                       <img src="{{asset('img/_MG_8850.jpg')}}" alt="">
                       <img src="{{asset('img/flagTwoSided.jpg')}}" alt="">
                       <img src="{{asset('img/wholeMilk.jpg')}}" alt="">
                   </div>
                   
                   <div class="logo">
                       <p>Logo</p>
                       <img src="{{asset('img/naturyoLogo.png')}}" alt="">
                       <img src="{{asset('img/naturyoLogo1.png')}}" alt="">
                   </div>
                   
                   <div class="packaging">
                      <p>Packaging</p>
                      <img src="{{asset('img/_MG_8841.jpg')}}" alt="">
                      <img src="{{asset('img/flagTwoSided.jpg')}}" alt="">
                      <img src="{{asset('img/sachet.jpg')}}" alt="">
                      <img src="{{asset('img/SkimMilk.jpg')}}" alt="">
                      <img src="{{asset('img/wholeMilk.jpg')}}" alt="">
                   </div>
                </div>
            </section>
            
            <section id="About">
                <h1>About</h1>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In reprehenderit eius delectus ad consectetur unde, dolorum minima odio, provident, architecto facere nulla aut libero ratione magni laudantium dolores commodi. Porro asperiores numquam praesentium placeat suscipit itaque, eius nulla neque voluptate! Veniam, enim dignissimos, quibusdam maxime hic temporibus perferendis aperiam cupiditate omnis incidunt cum ducimus dolores debitis delectus est iste quia porro libero nam, at aspernatur ratione. Exercitationem incidunt necessitatibus provident ratione aspernatur, doloribus fugiat perspiciatis sed! Eum inventore, veniam ratione natus quis, maiores voluptate numquam corporis doloremque dolorum odit nemo est, laudantium dolores voluptatum. Voluptates, provident sapiente dolor magni excepturi.</p>
                </div>
            </section>
            
            <section id="Contact">
                <h1>Contact Us</h1>
            </section>
            
            <section id="Other">
                <h1>Other Art</h1>
            </section>
        </main>
        
        <footer>
            <p> &copy; All rights reserved One Graphic Design</p>
        </footer>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('slick/slick.js')}}"></script>
    <script src="{{asset('slick/slick.min.js')}}"></script>
    <!-- <script src="{{asset('js/image-sliderCustom.js')}}"></script> -->
    
</body>
</html>