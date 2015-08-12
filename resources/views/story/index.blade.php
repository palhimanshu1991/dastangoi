@extends('app_link')

@section('content')


@foreach($stories as $story)

	<div id="hideEditor" style="display:none;"></div>
    <div id="post-title" class="title-editable">{{ $story->story_title }}</div>
    <div id="post-body" class="body-editable">{{ $story->story_body }}</div>

@endforeach


@endsection