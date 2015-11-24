<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One Graphic Design</title>
    <meta name="description" content="logo design art">
    <meta name="author" content="Shadowz Web Development LTD">
    <meta name="viewport" content="width=device-width, initial-scale= 0.8, maximum-scale=1">
    <link rel=icon href="{{asset('img/logo.png')}}" sizes="48x48" type="image/png">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">    
</head>
<body>
   <div class="container" #Top>
    <header>
        <div class="heading">
        <img src="{{asset('img/logo(2).png')}}" alt="logo">
            <p id="Bars"><i class="fa fa-bars"></i></p>
            @if(Auth::check())
            <p class="admin"><a href="{{url('admin')}}">Admin</a></p>
            @endif
        </div>
        
        <nav id="Nav">
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
            <section id="Home">
               <h1>Home</h1>
            <div class="img-slider">
				<div class="image-slider">
                    <img src="{{asset('img/_MG_8841.jpg')}}" alt=""/>
                    <img src="{{asset('img/_MG_8850.jpg')}}" alt=""/>
					<img src="{{asset('img/flagTwoSided.jpg')}}" alt=""/>
					<img src="{{asset('img/wholeMilk.jpg')}}" alt=""/>
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
            @if(Request::ajax() == false)
                <div class="display">
                   <div class="paper">
                        <p>Paper Art</p>
                        <div class="imgContainer">
                        <?php 
                          $paginator = \App\Models\Paper::paginate(2);
                          $paginator->appends("slide","paper");
                        ?>
                        @foreach(\App\Models\Paper::all() as $paper)
                        @if($logo->active == 1) 
                            <a href="{{url('paper/'.$paper->id)}}"><img class="pic1" src="{{asset('img/'.$paper->path)}}" alt=""></a>
                        @endif
                        @endforeach
                        {!! $paginator->render() !!}
                      </div>
                   </div>
                   
                   <div class="logo">
                        <p>Logo</p>
                        <div class="imgContainer">
                        <?php 
                          $paginator = \App\Models\Logo::paginate(2);
                          $paginator->appends("slide","logo");
                        ?>
                        @foreach(\App\Models\Logo::all() as $logo)
                        @if($logo->active == 1)
                            <a href="{{url('logo/'.$logo->id)}}"><img class="pic2" src="{{asset('img/'.$logo->path)}}" alt=""></a>
                        @endif
                        @endforeach
                        {!! $paginator->render() !!}
                       </div>
                   </div>
                   
                   <div class="packaging">
                        <p>Packaging</p>
                        <div class="imgContainer">
                        <?php 
                            $paginator = \App\Models\Pack::paginate(2);
                            $paginator->appends("slide","packaging");   
                        ?>
                        @foreach($paginator as $pack)
                        @if($pack->active == 1)
                            <a href="{{url('pack/'.$pack->id)}}"><img class="pic3" src="{{asset('img/'.$pack->path)}}" alt=""></a>
                        @endif
                        @endforeach
                        {!! $paginator->render() !!}
                      </div>
                   </div>
                </div>
            @endif
            </section>
            
            <section id="About">
                <h1>About</h1>
                <div class="text">
                    <p>One Graphic Design is about communication.<br><br>

                        We ensure that we connect with you from the start and that we understand your needs. 
                        That means that we need to spend some time together talking about what your requirements are.<br><br>

                        One Graphic Design is about getting it done.<br><br>

                        We pride ourselves on meeting the deadline, no-matter-what. 
                        We ensure that the work is done on time to the best standard possible. No excuses.<br><br>

                        One Graphic Design is about doing it right the first time.<br><br>

                        This might mean having to meet and discuss things at length.<br><br>

                        One Graphic Design is about giving you what you need.<br><br>

                        We will discuss your needs rather than doing something that is just eye-candy. 
                       That might mean some time explaining how everything works.
                    </p>
                </div>
            </section>
            
            <section id="Contact">
                <h1>Contact Us</h1>
                <div class="form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::open(array('url' => 'sendmail', 'id'=>'Form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('name', 'Full Name') !!}
                                {!! Form::text('name') !!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('email') !!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('subject', 'Subject') !!}
                                {!! Form::text('subject') !!}
                            </div>
                        
                            <div class="pure-control-group">
                                {!! Form::label('message', 'Message') !!}
                                {!! Form::textarea('message',null,array('id' => 'Message')) !!}
                            </div>
                            
                            {!! Form::button('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Send',array('id' => 'Send','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
                </div>
            </section>
            
            <section id="Other">
                <h1>Other Art</h1>
            </section>
        </main>
        
        <footer>
            <p> &copy; All rights reserved One Graphic Design</p>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('slick/slick.js')}}"></script>
    <script src="{{asset('slick/slick.min.js')}}"></script>
    <script src="{{asset('js/Spin.js')}}"></script>
    <script src="{{asset('js/jquery.history.js')}}"></script>
</body>
</html>