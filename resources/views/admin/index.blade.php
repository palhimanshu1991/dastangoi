@extends('admin')
@section('content')
<br/><br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">
        
        <!--<a class="btn btn-primary" href="{{Config::get('app.url')}}blog/create">Add new blog</a>-->
        <!--<a class="btn btn-primary" href="{{Config::get('app.url')}}story/create">Add new story</a>-->
        <a class="btn btn-primary" href="{{Config::get('app.url')}}event/create">Add new event</a>
        <a class="btn btn-primary" href="{{Config::get('app.url')}}press/create">Add new press</a>
        <a class="btn btn-primary" href="{{Config::get('app.url')}}gallery/create">Add new gallery</a>
        <a class="btn btn-primary" href="{{Config::get('app.url')}}authors/create">Add new author</a>        


      </div>
   </div>
</div>
@endsection