<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One Graphic Design | Admin</title>
    <meta name="description" content="logo design art">
    <meta name="author" content="Shadowz Web Development LTD">
    <meta name="viewport" content="width=device-width, initial-scale= 0.8, maximum-scale=1">
    <link rel=icon href="{{asset('img/logo.png')}}" sizes="48x48" type="image/png">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">    
</head>
<body>
    <div class="container" id="Top">
        <header>
            <div class="heading">
                <img src="{{asset('img/logo.png')}}" alt="logo">
                <h1><a href="#Top">One Graphic Design</h1></a>
                <p id="Admin">Admin</i></p>
            </div>
            
            <nav id="Nav" class="adminNav">
                <ul>
                    <li class="link"><a class="linkUnderline-one" href="#Home">Home</a></li>
                    <li class="link"><a class="linkUnderline-two" href="#Portfolio">Portfolio</a></li>
                    <li class="link"><a class="linkUnderline-three" href="#About">About</a></li>
                    <li class="link"><a class="linkUnderline-four" href="#Contact">Contact Us</a></li>
                    <li class="link"><a class="linkUnderline-five" href="#Other">Other Art</a></li>
                </ul>
            </nav>
        </header>
    <main>
        <section id="Paper">
           <h1>Paper Art</h1>
            <div class="paperAd">
                <img src="{{asset('img/_MG_8841.jpg')}}" alt="">
                <p class="pInfo">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi labore praesentium quae nihil, reprehenderit a maxime officia optio atque expedita!.
                </p>
                <div class="status">
                    <span>Status:</span>
                    <span class="show">Active</span>
                    <span class="hide">Deactive</span>
                </div>
                <div class="buttonsStat">
                    <button>{!! FA::icon('check'),'&nbsp;&nbsp;Activate' !!}</button>
                    <button>{!! FA::icon('times'),'&nbsp;&nbsp;Deactivate' !!}</button>                
                </div>
                
                <div class="buttonsEdit hide">
                    <button>{!! FA::icon('pencil'),'&nbsp;&nbsp;Edit Text' !!}</button>
                    <button>{!! FA::icon('pencil'),'&nbsp;&nbsp;Edit Image' !!}</button>
                </div>
            </div>
        </section>
        
        <section id="#LogoAd">
            
        </section>
        
        <section id="Pack">
            
        </section>
        
        <section id="AboutAd"></section>
    </main>
    </div>
</body>
</html>