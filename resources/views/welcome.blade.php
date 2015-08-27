@extends('app')

@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">

    <div class="slogan">
        <h2>Dastangoi <span class="text_color"></span> </h2>
        <h3>The Art of Urdu Storytelling</h3>    
        </div>
<!--     <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div> -->
</section>
<!-- /Section: intro -->

<section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInLeft animated" data-wow-delay="0.2s">
                    <div class="section-heading">
                    <h2>History Of Dastangoi</h2>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-40">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="wow fadeInLeft animated" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-desc">
                        <p>Dastangoi, the lost art of storytelling, developed around the stories of valour and adventures of an Arab hero – Amir Hamza, in 8th century AD. Soon, these stories spread out and the tradition could be found right from Bosnia, Morocco, Algeria to Indonesia and China. However, these stories became very popular when they entered the Urdu canon and the art form as known to us reached its zenith in the 19th century North India. With the demise of Mir Baqar Ali, the last known exponent of the art form, in 1928, the form also died with him. The modern revival is an effort of two gentlemen, SR Faruqi, the noted Urdu litterateur, and Mahmood Farooqui, who conceived the modern format of the art form. The first Dastangoi show in modern era happened in May 2005. Since then, the art form has grown with a team of dastangos that has staged more than 1000 shows across the world. We have also expanded our repertoire of stories. Besides the traditional Dastan-e-Amir Hamza stories, we have added new content too.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: events -->
<section id="events" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="section-heading">
                    <h2>Events</h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-40">
                </div>
            </div>            
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($events as $event)
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class=" boxed-grey">
                    <div class="inner"><br/>
                        <h1><i class="fa fa-calendar"></i> </h1>
                        <b style="font-size:28px;">{{$event->event_name}}</b>
                        <p><i class="fa fa-clock-o"></i> {{\Carbon::parse($event->event_date)->toFormattedDateString()}} <br/>                       
                        <i class="fa fa-map-marker"></i> {{$event->event_place}}</p>                    
                    </div>
                </div>
                </div>
            </div>
            @endforeach
         </div>   
         <br/>
        <div class="row">
            <a class="btn btn-main" href="{{Config::get('app.url')}}event">See All Events</a>
        </div>    
    </div>
</section>
<!-- /Section: events -->


<!-- Section: profile -->
<section id="profiles" class="home-section text-center bg-gray">

    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Our Dastangoers</h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-40">
                </div>
            </div>            
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($authors as $user)
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <div class="avatar">
                        @if(empty($user->image))    
                            <img src="{{Config::get('app.url')}}images/default.jpg" alt="" class="img-responsive img-circle" />
                        @else
                            <img src="{{Config::get('app.url')}}images/team/1.jpg" alt="" class="img-responsive img-circle" />
                        @endif
                        </div>
                        <h1>{{$user->name}}</h1>
                    </div>
                </div>
                </div>
            </div>        
            @endforeach
            <br/><br/>
            <a class="btn btn-main" href="{{Config::get('app.url')}}authors">See All Dastangoers</a></h3>
        </div>
    </div>
</section>
<!-- /Section: profiles -->

<!-- Section: coverage -->
<section id="events" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="section-heading">
                    <h2>Dastangoi In The News</h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-40">
                </div>
            </div>            
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($coverage as $press)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class=" boxed-grey">
                    <div class="inner">                        
                        <b style="font-size:28px;">{{$press->press_title}}</b>
                        <p>on {{\Carbon::parse($press->press_date)->toFormattedDateString()}}} <br/>                                                                   
                    </div>
                </div>
                </div>
            </div>
            @endforeach
         </div>   
         <br/>
        <div class="row">
            <a class="btn btn-main" href="{{Config::get('app.url')}}press">See All Coverage</a>
        </div>    
    </div>
</section>
<!-- /Section: coverage -->



<!-- Section: contact -->
<!-- <section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                <h2>Get in touch</h2>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">

    <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
            <hr class="marginbot-50">
        </div>
    </div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="boxed-grey">
            <form action="{{Config::get('app.url')}}" id="contact-form" action="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email Address</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                    </div>
                    <div class="form-group">
                        <label for="subject">
                            Subject</label>
                        <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Choose One:</option>
                            <option value="general">General</option>
                            <option value="booking">Booking</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Message</label>
                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                        Send Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="widget-contact">
            <h5>Main Office</h5>

            <address>
              <strong>Squas Design, Inc.</strong><br>
              Tower 795 Folsom Ave, Beautiful Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Email</strong><br>
              <a href="mailto:#">email.name@example.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong><br>
                    <ul class="company-social">
                        <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
            </address>

        </div>
    </div>
</div>
    </div>
</section>
 -->
@endsection