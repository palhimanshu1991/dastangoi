@extends('app')
@section('content')
<br/><br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

        <a class="btn btn-default" href="{{Config::get('app.url')}}/press/create">Create Press Coverage</a>
        <br/><br/>

<div class="bs-example" >
    <div class="panel panel-default">
      <!-- Default panel contents -->

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Title</th>
            <th>Link</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        @foreach($presses as $press)
          <tr>
            <th scope="row">{{$press->press_id}}</th>
            <td>{{$press->press_title}}</td>
            <td>{{$press->press_link}}</td>
            <td>{{$press->press_description}}</td>
            <td><a href="{{Config::get('app.url')}}press/delete/{{$press->press_id}}">Delete</a></td>
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