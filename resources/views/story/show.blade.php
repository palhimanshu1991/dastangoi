@extends('app')

@section('content')

<section id="service" class="home-section text-center bg-gray">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                    <div class="section-heading">
                    <?php echo $story->story_title ?>
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
                <div class="wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="service-box">
                    <div class="service-desc">
                        <?php echo $story->story_body; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection