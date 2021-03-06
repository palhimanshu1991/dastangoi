@extends('admin')
@section('content')
    <br/>
    <br/><br/><br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">

                <h4>Add a new photo</h4>

                <form action="{{ url('') }}/gallery/create" enctype="multipart/form-data"
                      class="bs-example bs-example-form" method="POST">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Photo title (Optional)">
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" id="photo" required="yes" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-default" value="Upload Photo"/>

                </form>


            </div>
        </div>
    </div>
@endsection