@extends('app')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

        <h4>Create an event</h4>

        <form action="{{Config::get('app.url')}}event/create" class="bs-example bs-example-form" method="POST">
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="event_name" required="yes" class="form-control" placeholder="Event Name" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="event_date"  required="yes" class="form-control" id="datepicker" placeholder="Event Date" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="event_place" required="yes" class="form-control" placeholder="Event Place" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <textarea  name="event_description" class="form-control" placeholder="Event Description"></textarea>
          </div>
          <br>




          <input type="submit" />

        </form>


      </div>
   </div>
</div>
@endsection

@section('extra')

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>

@endsection