@extends('app')
@section('content')

<br/><br/><br/><br/><br/>

<div class="container">
   <div class="row">
      <div class="col-md-12">        

      	<a class="btn btn-default" href="{{Config::get('app.url')}}user/create">Create New Proile</a>
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
            <th>Name</th>
            <th>Email</th>
            <th>Created On</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
          <th scope="row">{{$user->id}}</th>
          <th scope="row">{{$user->name}}</th>
          <th scope="row">{{$user->email}}</th>          
            <th scope="row">{{$user->created_at}}</th>

            <td><a href="{{Config::get('app.url')}}user/delete/{{$user->id}}">Delete</a></td>
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