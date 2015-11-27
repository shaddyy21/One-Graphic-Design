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
    <div class="containerForm" id="Top">
        <header>
            <div class="headingF">
                <a href="{{url('/')}}"><img class="headImg" src="{{asset('img/logo(2).png')}}" alt="logo"></a>
                @if(Auth::check())
                    <p class="admin"><a href="{{url('admin')}}">Admin</a></p>
                @endif
            </div>
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