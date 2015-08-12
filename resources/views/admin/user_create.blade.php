@extends('app')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-12">

        <h4>Create New Profile</h4>

        <form action="{{Config::get('app.url')}}user/create" class="bs-example bs-example-form" method="POST">
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="name" required="yes" class="form-control" placeholder="Profile Name" aria-describedby="sizing-addon2">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="text" name="email" required="yes" class="form-control" placeholder="Profile Email" aria-describedby="sizing-addon2">
          </div>
          <br>          

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input type="file" name="image" class="form-control"  aria-describedby="sizing-addon2">
          </div>


          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <textarea  name="bio" class="form-control" required="yes" placeholder="Profile Bio"></textarea>
          </div>
          <br>



          <input type="submit" />

        </form>


      </div>
   </div>
</div>
@endsection