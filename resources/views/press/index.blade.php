@extends('app_link')

@section('content')


<!-- Section: about -->
<section id="events" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Press Coverage</h2>
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
            @foreach($presses as $press)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="" data-wow-delay="0.2s">
                    <h3><a href="{{$press->press_link}}">{{$press->press_date}} - {{$press->press_title}}</a></h3>
                </div>
            </div>
            @endforeach
         </div>   
         <br/>
<!--         <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
            <h3><a href="{{ url('') }}/event">See All Events</a></h3>
            </div>
        </div>  -->   
    </div>
</section>
<!-- /Section: about -->






<!-- Section: contact -->

<!--     <div class="col-lg-4">
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
    </div> -->
</div>

    </div>
</section>

@endsection