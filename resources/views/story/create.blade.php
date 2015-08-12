@extends('admin')
@section('content')
<br/>
<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-8 col-lg-offset-2">

        <!-- <h4>Add New Story</h4> -->

        <!-- <form action="{{Config::get('app.url')}}story/create" class="bs-example bs-example-form" method="POST"> -->
          <input type="hidden" name="_method" value="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          

<!--           <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Event Name" aria-describedby="sizing-addon2">
          </div>
          <div class="form-group">
            <textarea name="body" class="form-control" placeholder="Event Name" ></textarea>
          </div> -->

       <div class="title-editable" name="title" id="title"><h2>Enter Story title</h2></div>
        <div class="body-editable" name="body" id="body"><p>Enter post body</p></div>          

          <input class="btn btn-default" id="form-submit" type="submit" value="Add New Story" />

        <!-- </form> -->


      </div>
   </div>
</div>
@endsection


@section('extra')
@include('partials.editor')
@endsection