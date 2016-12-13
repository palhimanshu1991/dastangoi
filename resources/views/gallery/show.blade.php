@extends('app')

@section('content')
    <section id="service" class="home-section text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h3>{{ $photo->title }}</h3>
                    <a href="{{ url('') }}/gallery/show/{{$photo->gallery_id}}">
                        <img style="max-height:500px;" src="{{ $photo->full_url }}" class="img-thumbnail">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection