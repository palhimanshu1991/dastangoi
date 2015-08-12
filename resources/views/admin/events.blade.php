@extends('app')
@section('content')
<br/><br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

      	<a class="btn btn-default" href="{{Config::get('app.url')}}/event/create">Create Event</a>
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
            <th>Place</th>
            <th>Date</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
          <tr>
            <th scope="row">{{$event->event_id}}</th>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_place}}</td>
            <td>{{$event->event_date}}</td>
            <td><a href="{{Config::get('app.url')}}event/delete/{{$event->event_id}}">Delete</a></td>
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