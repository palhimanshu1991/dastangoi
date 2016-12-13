@extends('admin')
@section('content')

    <br/><br/><br/><br/><br/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-default" href="{{ url('') }}/authors/create">Create New Auhtor</a>
                <br/><br/>

                <div class="bs-example">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">List of all profiles</div>

                        <!-- Table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Email</th>
                                <th>Created On</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $user)
                                <tr>
                                    <td scope="row">{{$user->id}}</td>
                                    <td scope="row">{{$user->name}}</td>
                                    <td scope="row">
                                        <img width="50px" src="{{ $user->photo_url }}" class="img-thumbnail">
                                    </td>
                                    <td scope="row">{{$user->email}}</td>
                                    <td scope="row">{{$user->created_at}}</td>
                                    <td><a href="{{ url('') }}/authors/delete/{{$user->id}}">Delete</a></td>
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