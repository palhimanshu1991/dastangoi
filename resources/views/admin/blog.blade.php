@extends('admin')
@section('content')
<br/><br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

      	<a class="btn btn-default btn-success" href="{{Config::get('app.url')}}blog/create">New Blog Post</a>
      	<br/><br/>

<div class="bs-example" >
    <div class="panel panel-default">
      <!-- Default panel contents -->

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Created On</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($stories as $story)
          <tr>
            <th scope="row">{{$story->story_id}}</th>
            <td>{{$story->story_title}}</td>
            <td>{{$story->created_at}}</td>
            <td><a href="{{Config::get('app.url')}}blog/edit/{{$story->story_id}}">Edit</a></td>
            <td><a href="{{Config::get('app.url')}}blog/delete/{{$story->story_id}}">Delete</a></td>
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