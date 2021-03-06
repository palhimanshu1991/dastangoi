@extends('app')

@section('content')
    <section id="service" class="home-section text-center bg-gray">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown animated">
                            <div class="section-heading">
                                <h2>Gallery</h2>
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
                @foreach($photos as $photo)
                    <div class="col-sm-3 col-md-3">
                        <a href="{{ url('') }}/gallery/show/{{$photo->gallery_id}}">
                            <img src="{{ $photo->full_url }}" class="img-thumbnail">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection