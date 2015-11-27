@if(Auth::check())
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
                <div class="headingA">
                    <a href="{{url('/')}}"><img class="headImg" src="{{asset('img/logo(2).png')}}" alt="logo"></a>
                    <p>Admin</p>
                    <p class="admin"><a href="{{url('logout')}}">{!! FA::icon('sign-out')!!}&nbsp;&nbsp;Logout</p></a>
                </div>

                <nav id="Nav" class="adminNav">
                    <ul>
                        <li class="link"><a class="linkUnderline-one" href="#PaperAd">Paper Art</a></li>
                        <li class="link"><a class="linkUnderline-two" href="#LogoAd">Logo</a></li>
                        <li class="link"><a class="linkUnderline-three" href="#PackAd">Packaging</a></li>
                    </ul>
                </nav>

            </header>
        <main>
            <section id="PaperAd">
               <h1>Paper Art</h1>
               <p class="new"><a href="{{url('paper/create')}}">Add new</p></a>
                @foreach(\App\Models\Paper::all() as $paper)
                   <div class="paperAd">
                        <img src="{{asset('img/'.$paper->path)}}" alt="">
                        <p class="pInfo">
                            {{$paper->description}}
                        </p>
                        <div class="status">
                            <span>Status:</span>
                        @if($logo->active == 1)
                            <span class="active">Active</span>
                        @else
                            <span class="deactive">Deactive</span>
                        @endif
                        </div>
                        <div class="buttonsStat">
                            <a href="{{url('paper/'.$paper->id.'/active')}}">{!! FA::icon('check'),'&nbsp;&nbsp;Activate' !!}</a>
                            <a class="deactiveBtn" href="{{url('papers/'.$paper->id.'/deactive')}}">{!!                                                                   FA::icon('times'),'&nbsp;&nbsp;Deactivate' !!}</a>                           
                        </div>

                        <div class="buttonsEdit">
                            <a href="{{url('paper/'.$paper->id.'/edit')}}">{!! FA::icon('pencil'),'&nbsp;&nbsp;Edit Text' !!}</a>
                        </div>
                    </div>
                @endforeach
            </section>

            <section id="LogoAd">
                <h1>Logo</h1>
                <p class="new"><a href="{{url('logo/create')}}">Add new</p></a>
                @foreach(\App\Models\Logo::all() as $logo)
                <div class="paperAd">
                    <img src="{{asset('img/'.$logo->path)}}" alt="">
                    <p class="pInfo">
                        {{$logo->description}}
                    </p>
                    <div class="status">
                        <span>Status:</span>
                        @if($logo->active == 1)
                            <span class="active">Active</span>
                        @else
                            <span class="deactive">Deactive</span>
                        @endif
                    </div>
                    <div class="buttonsStat">
                        <a href="{{url('logos/'.$logo->id.'/active')}}">{!! FA::icon('check'),'&nbsp;&nbsp;Activate' !!}</a>
                        <a class="deactiveBtn" href="{{url('logos/'.$logo->id.'/deactive')}}">{!! FA::icon('times'),'&nbsp;&nbsp;Deactivate' !!}</a>             
                    </div>

                    <div class="buttonsEdit">
                        <a href="{{url('logo/'.$logo->id.'/edit')}}">{!! FA::icon('pencil'),'&nbsp;&nbsp;Edit Text' !!}</a>
                    </div>
                </div>
            @endforeach
            </section>

            <section id="PackAd">
                <h1>Packaging</h1>
                <p class="new"><a href="{{url('pack/create')}}">Add new</p></a>
                   @foreach(\App\Models\Pack::all() as $pack)
                <div class="paperAd">
                    <img src="{{asset('img/'.$pack->path)}}" alt="">
                    <p class="pInfo">

                    {{$pack->description}}

                    </p>
                    <div class="status">
                        <span>Status:</span>
                        @if($pack->active == 1)
                            <span class="active">Active</span>
                        @else
                            <span class="deactive">Deactive</span>
                        @endif
                    </div>
                    <div class="buttonsStat">
                        <a href="{{url('packs/'.$pack->id.'/active')}}">{!! FA::icon('check'),'&nbsp;&nbsp;Activate' !!}</a>
                        <a class="deactiveBtn" href="{{url('packs/'.$pack->id.'/deactive')}}">{!! FA::icon('times'),'&nbsp;&nbsp;Deactivate' !!}</a>             
                    </div>

                    <div class="buttonsEdit">
                       <a href="{{url('pack/'.$pack->id.'/edit')}}">{!! FA::icon('pencil'),'&nbsp;&nbsp;Edit Text' !!}</a>
                    </div>
                </div>
                   @endforeach
            </section>
            <div id="token" hidden>{{ csrf_token() }}</div>
            <section id="AboutAd"></section>
        </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="{{asset('js/jQuery.js')}}"></script>
        <script src="{{asset('slick/slick.js')}}"></script>
        <script src="{{asset('slick/slick.min.js')}}"></script>
    </body>
    </html>
    @else
    {!! view('login'); !!}
@endif