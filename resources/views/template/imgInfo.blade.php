<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One Graphic Design | @yield('title')</title>
    <meta name="description" content="logo design art">
    <meta name="author" content="Shadowz Web Development LTD">
    <meta name="viewport" content="width=device-width, initial-scale= 0.8, maximum-scale=1">
    <link rel=icon href="{{asset('img/logo.png')}}" sizes="48x48" type="image/png">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">    
</head>
<body>
    <div class="container dim" id="Top">
        <header>
            <div class="heading">
                <a href="{{url('/')}}"><img class="headImg" src="{{asset('img/logo(2).png')}}" alt="logo"></a>
                @if(Auth::check())
                    <p class="admin"><a href="{{url('admin')}}">Admin</a></p>
                @endif
            </div>
            
            
        <nav id="Nav">
            <ul>
                <li class="link"><a class="linkUnderline-one" href="{{url('/#Home')}}">Home</a></li>
                <li class="link"><a class="linkUnderline-two" href="{{url('/#Portfolio')}}">Portfolio</a></li>
                <li class="link"><a class="linkUnderline-three" href="{{url('/#About')}}">About</a></li>
                <li class="link"><a class="linkUnderline-four" href="{{url('/#Contact')}}">Contact Us</a></li>
                <li class="link"><a class="linkUnderline-five" href="{{url('/#Other')}}">Other Art</a></li>
            </ul>
        </nav>
        </header>
    <main>
        <section id="Forms">
            @yield('content')
        </section>
    </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('slick/slick.js')}}"></script>
    <script src="{{asset('slick/slick.min.js')}}"></script>
</body>
</html>