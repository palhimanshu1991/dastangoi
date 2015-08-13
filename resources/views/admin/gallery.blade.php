@extends('admin')
@section('content')

<br/><br/><br/><br/><br/>

<div class="container">
   <div class="row">
      <div class="col-md-12">        

      	<a class="btn btn-default" href="{{Config::get('app.url')}}gallery/create">Add New Photo</a>
      	<br/><br/>

<div class="bs-example" >
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">List of all profiles</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Description</th>
            <th>Email</th>
            <th>Created On</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
          <tr>
            <th scope="row">{{$photo->gallery_id}}</th>
            <th scope="row">                
                <a href="{{Config::get('app.url')}}gallery/show/{{$photo->gallery_id}}">
                    <img width="50px" src="{{Config::get('app.storage')}}{{$photo->gallery_url}}" alt="..." class="img-thumbnail">
                </a>
            </th>    
            <th scope="row">{{$photo->gallery_description}}</th>    
            <th scope="row">{{$photo->created_at}}</th>
            <td><a href="{{Config::get('app.url')}}gallery/delete/{{$photo->gallery_id}}">Delete</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>         


      </div>
   </div>
</div>
@endsection