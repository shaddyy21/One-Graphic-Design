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
   <div class="container">
    <header>
        <div class="heading">
            <img src="{{asset('img/logo.png')}}" alt="logo">
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
                <div class="display">
                   <div class="paper">
                      <p>Paper Art</p>
                       <img class="pic1" src="{{asset('img/_MG_8841.jpg')}}" alt="">
                       <img class="pic1" src="{{asset('img/_MG_8850.jpg')}}" alt="">
                       <img class="pic1" src="{{asset('img/flagTwoSided.jpg')}}" alt="">
                       <img class="pic1" src="{{asset('img/wholeMilk.jpg')}}" alt="">
                   </div>
                   
                   <div class="logo">
                       <p>Logo</p>
                       <img class="pic2" src="{{asset('img/naturyoLogo.png')}}" alt="">
                       <img class="pic2" src="{{asset('img/naturyoLogo1.png')}}" alt="">
                   </div>
                   
                   <div class="packaging">
                      <p>Packaging</p>
                      <img class="pic3" src="{{asset('img/_MG_8841.jpg')}}" alt="">
                      <img class="pic3" src="{{asset('img/flagTwoSided.jpg')}}" alt="">
                      <img class="pic3" src="{{asset('img/sachet.jpg')}}" alt="">
                      <img class="pic3" src="{{asset('img/SkimMilk.jpg')}}" alt="">
                      <img class="pic3" src="{{asset('img/wholeMilk.jpg')}}" alt="">
                   </div>
                </div>
                <div class="info hide">
                           <img src="{{asset('img/_MG_8841.jpg')}}" alt="">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque magnam, qui placeat vitae alias commodi saepe quos sit sint error?</p>
                           <p class="cls"><i class="fa fa-times"></i>&nbsp;&nbsp; Close</p>
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
                <div class="form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::open(array('url' => 'foo/bar', 'id'=>'Form')) !!}
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
                            
                            {!! Form::submit('Send',array('id' => 'Send')),FA::icon('fa-paper-plane') !!}
                        {!! Form::close() !!}
                    </fieldset>
                    <!--<form action="#" id="Form">
                        <label for="Name">Full Name</label>
                        <input id="Name" type="text">
                        
                        <label for="Email">E-mail</label>
                        <input id="Email" type="text">
                        
                        <label for="Subject">Subject</label>
                        <input  id="Subject" type="text">
                        
                        <label for="Message">Message</label>
                        <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Enter Message Here"></textarea>
                        
                        <button id="Send"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
                    </form>-->
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
   
    <script src="{{asset('js/jQuery.min.js')}}"></script>
    <script src="{{asset('slick/slick.js')}}"></script>
    <script src="{{asset('slick/slick.min.js')}}"></script>    
</body>
</html>