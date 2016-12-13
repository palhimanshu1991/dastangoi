@extends('admin')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-offset-3">

        <h4>Create New Profile</h4>

        <form action="{{ url('') }}/users/create" class="bs-example bs-example-form" method="POST">
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

          <div class="form-group">
            <input type="text" name="name" required="yes" class="form-control" placeholder="Profile Name" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <input type="text" name="email" required="yes" class="form-control" placeholder="Profile Email" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <label>Profile Picture</label>
            <input type="file" name="image" class="form-control"  aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <textarea  name="bio" class="form-control" required="yes" placeholder="Profile Bio"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="facebook"  class="form-control" placeholder="Facebook link" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <input type="text" name="google"  class="form-control" placeholder="Google link" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <input type="text" name="twitter"  class="form-control" placeholder="Twitter link" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <input type="text" name="website"  class="form-control" placeholder="Website link" aria-describedby="sizing-addon2">
          </div>          

          <input type="submit" class="btn btn-default" value="Create New Profile" />

        </form>


      </div>
   </div>
</div>
@endsection