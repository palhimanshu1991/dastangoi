@extends('app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
        
        <a href="{{Config::get('app.url')}}blog/create">Add new blog</a>
        <a href="{{Config::get('app.url')}}story/create">Add new story</a>
        <a href="{{Config::get('app.url')}}gallery/create">Add new gallery</a>
        <a href="{{Config::get('app.url')}}event/create">Add new gallery</a>        


      </div>
   </div>
</div>
@endsection