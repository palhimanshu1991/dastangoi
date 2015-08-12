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
                    <h2>Upcoming Events</h2>
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
            @foreach($upcoming as $event)
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="" data-wow-delay="0.2s">
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
<!--         <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
            <h3><a href="{{Config::get('app.url')}}event">See All Events</a></h3>
            </div>
        </div>  -->   
    </div>
</section>
<!-- /Section: about -->

<section id="events" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Past Events</h2>
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
            @foreach($past as $ev)
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="" data-wow-delay="0.2s">
                <div class=" boxed-grey">
                    <div class="inner"><br/>
                        <h1><i class="fa fa-calendar"></i> </h1>
                        <b style="font-size:28px;">{{$ev->event_name}}</b>
                        <p><i class="fa fa-clock-o"></i> {{\Carbon::parse($ev->event_date)->toFormattedDateString()}}<br/>                       
                        <i class="fa fa-map-marker"></i> {{$ev->event_place}}</p>                    
                    </div>
                </div>
                </div>
            </div>
            @endforeach
         </div>   
         <br/>
<!--         <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
            <h3><a href="{{Config::get('app.url')}}event">See All Events</a></h3>
            </div>
        </div>  -->   
    </div>
</section>


</div>

    </div>
</section>

@endsection