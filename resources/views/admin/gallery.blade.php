@extends('admin')
@section('content')

    <br/><br/><br/><br/><br/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-default" href="{{ url('') }}/gallery/create">Add New Photo</a>
                <br/><br/>

                <div class="bs-example">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">List of all photos</div>

                        <!-- Table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Created On</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($photos as $photo)
                                <tr>
                                    <td scope="row">{{$photo->gallery_id}}</td>
                                    <td scope="row">
                                        <a href="{{ url('') }}/gallery/show/{{$photo->gallery_id}}">
                                            <img width="50px" src="{{ $photo->full_url }}" alt="..."
                                                 class="img-thumbnail">
                                        </a>
                                    </td>
                                    <td scope="row">{{$photo->gallery_name}}</td>
                                    <td scope="row">{{$photo->created_at}}</td>
                                    <td><a href="{{ url('') }}/gallery/delete/{{$photo->gallery_id}}">Delete</a></td>
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