@extends('app')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

        <h4>Create New Press Coverage</h4>

        <form action="{{Config::get('app.url')}}press/create" class="bs-example bs-example-form" method="POST">
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="title" class="form-control" placeholder="Press Title" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="date" class="form-control" placeholder="Press Date" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="link" class="form-control" placeholder="Press Link" aria-describedby="sizing-addon2">
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <textarea  name="description" class="form-control" placeholder="Press Description"></textarea>
          </div>
          <br>



          <input type="submit" />

        </form>


      </div>
   </div>
</div>
@endsection