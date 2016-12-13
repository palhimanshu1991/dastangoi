@extends('admin')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-8 col-lg-offset-2">

        <h4>Create New Press Coverage</h4>

        <form action="{{ url('') }}/press/create" class="bs-example bs-example-form" method="POST">
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

          <div class="form-group">            
            <input type="text" name="title" class="form-control" placeholder="Press Title" aria-describedby="sizing-addon2">
          </div>          

          <div class="form-group">            
            <input type="text" name="date" class="form-control" id="datepicker" placeholder="Press Date" aria-describedby="sizing-addon2">
          </div>          

          <div class="form-group">            
            <input type="text" name="link" class="form-control" placeholder="Press Link" aria-describedby="sizing-addon2">
          </div>          

          <div class="form-group">            
            <textarea  name="description" class="form-control" placeholder="Press Description"></textarea>
          </div>          



          <input class="btn btn-default" type="submit" />

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