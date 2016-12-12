@extends('admin')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <h1>New Blog Post</h1>
                {!! Form::open(['url' => route('admin.stories.store'), 'method' => 'POST', 'class' => 'bs-example bs-example-form']) !!}
                <input class="form-control" type="text" name="title" id="title"
                       placeholder="Enter Your Title Here"><br/>
                <textarea class="form-control" id="body" name="body" style="width:100%"></textarea><br/>
                <input class="form-control btn btn-default btn-success" type="submit" value="Add New Story"/>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('extra')
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>


@endsection