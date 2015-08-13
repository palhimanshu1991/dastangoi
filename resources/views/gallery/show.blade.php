@extends('app')

@section('content')

<section id="service" class="home-section text-center bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <a href="{{Config::get('app.url')}}gallery/show/{{$photo->gallery_id}}">
                    <img style="max-height:500px;" src="{{Config::get('app.storage')}}{{$photo->gallery_url}}" alt="..." class="img-thumbnail">
                </a>
            </div>
        </div>
    </div>
</section>


@endsection