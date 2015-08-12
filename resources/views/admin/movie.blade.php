@extends('app')
@section('content')
<?php 
   $year = \Carbon::parse($movie->tmdb_release_date)->format('Y');
   $title = strtolower(str_replace(' ','_',$movie->tmdb_title));
   
   
   
   ?>


<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="bs-example" data-example-id="hoverable-table">
            <div class="row">
               <div class="col-md-4" style="float:right;">
                  <div class="input-group">
                     <input tmdb-id="{{$movie->tmdb_id}}" id="rotten" type="text" class="form-control" placeholder="" value="{{$title}}">
                     <span class="input-group-btn">
                     <button class="btn btn-default rotten-iframe" type="button">iFrame</button>
                     </span>
                  </div>
               </div>
               <div class="col-md-8">
                  <p>
                     Created: {{$movie->created_at}}<br/>
                     Updated: {{Carbon::parse($movie->updated_at)->diffForHumans()}}<br/>
                  </p>
               </div>
            </div>
            <a href="{{Config::get('app.url')}}imdb/update/{{$movie->imdb_id}}" class="btn btn-default">Update Imdb Details</a>
            <a href="{{Config::get('app.url')}}rotten/update/{{$movie->tmdb_id}}?slug={{$title}}" class="btn btn-default rotten-update">Update RottenTomato Details</a>
            <div style="float:right;">
               <a target="_blank" href="http://www.imdb.com/title/{{$movie->imdb_id}}/?ref_=inth_ov_tt" class="btn btn-default">IMDB</a>
               <a target="_blank" href="http://www.rottentomatoes.com/m/{{$title}}" class="btn btn-default rotten-link">Rotten</a>               
            </div>
            <br><br/>
            <ul id="myTabs" class="nav nav-tabs" role="tablist">
               <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><b>{{$movie->tmdb_title}}</b> Details</a></li>
               <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">  {{count($metareviews)}} Metareviews </a></li>
               <li role="presentation" class="dropdown">
                  <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                     <li><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                     <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                  </ul>
               </li>
            </ul>
            <div id="myTabContent" class="tab-content">
               <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                  <table class="table table-hover details">
                     <thead>
                        <tr>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><b>Title:</b> {{$movie->tmdb_title}}</td>
                        </tr>
                        <tr>
                           <td><b>Backdrop:</b> {{$movie->tmdb_backdrop_path}}</td>
                        </tr>
                        <tr>
                           <td><b>Awards:</b> {{$movie->omdb_awards}}</td>
                        </tr>
                        <tr>
                           <td><b>Poster:</b> {{$movie->omdb_poster}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_metascore=='' || $movie->omdb_metascore=='0') class="alert alert-danger" role="alert" @endif>
                           <b>Metascore:</b> <input type="text" value="{{$movie->omdb_metascore}}" class="form-control"></td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_imdbRating=='' || $movie->omdb_imdbRating=='0') class="alert alert-danger" role="alert" @endif>
                           <b>ImdbRating:</b> <input type="text" value="{{$movie->omdb_imdbRating}}" class="form-control"></td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_imdbVotes=='' || $movie->omdb_imdbVotes=='0') class="alert alert-danger" role="alert" @endif>
                           <b>Votes:</b> {{$movie->omdb_imdbVotes}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoMeter=='N/A' || $movie->omdb_tomatoMeter=='0') class="alert alert-danger" role="alert" @endif>
                           <b>TomatoMeter:</b> <input type="text" value="{{$movie->omdb_tomatoMeter}}" class="form-control"></td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoImage=='N/A' || $movie->omdb_tomatoImage=='') class="alert alert-danger" role="alert" @endif>
                           <b>Image:</b> {{$movie->omdb_tomatoImage}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoRating=='0' || $movie->omdb_tomatoRating=='') class="alert alert-danger" role="alert" @endif>
                           <b>tomatoRating:</b> {{$movie->omdb_tomatoRating}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoReviews=='N/A' || $movie->omdb_tomatoReviews=='') class="alert alert-danger" role="alert" @endif>
                           <b>RtReviews:</b> {{$movie->omdb_tomatoReviews}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoFresh=='N/A' || $movie->omdb_tomatoFresh=='') class="alert alert-danger" role="alert" @endif>
                           <b>RtFresh:</b> {{$movie->omdb_tomatoFresh}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoRotten=='N/A' || $movie->omdb_tomatoRotten=='') class="alert alert-danger" role="alert" @endif>
                           <b>RtRotten:</b> {{$movie->omdb_tomatoRotten}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoConsensus=='N/A' || $movie->omdb_tomatoConsensus=='') class="alert alert-danger" role="alert" @endif>
                           <b>Consensus:</b> {{$movie->omdb_tomatoConsensus}}</td>
                        </tr>
                        <tr>
                           <td @if($movie->omdb_tomatoUserMeter=='N/A' || $movie->omdb_tomatoUserMeter=='0') class="alert alert-danger" role="alert" @endif>
                           <b>UserMeter:</b> {{$movie->omdb_tomatoUserMeter}}</td>
                        </tr>
                        <tr>
                           <td><b>UserRating:</b> {{$movie->omdb_tomatoUserRating}}</td>
                        </tr>
                        <tr>
                           <td><b>UserReviews:</b> {{$movie->omdb_tomatoUserReviews}}</td>
                        </tr>
                     </tbody>
                  </table>                  
               </div>

               <div role="tabpanel" class="tab-pane fade" id="profile" style="padding-top:20px;" aria-labelledby="profile-tab">
                  @foreach($metareviews as $review)
                  <div class="media">
                     <div class="media-left">
                       <a href="#">
                         <h5>{{$review['score']}}</h5>
                       </a>
                     </div>
                     <div class="media-body">
                       <h4 class="media-heading">{{$review['critic']}}</h4>
                       {{$review['excerpt']}}
                     </div>
                  </div>
                  @endforeach
               </div>

               <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
                  
               </div>
               <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
                  
               </div>
            </div>
         </div>
         <div style="float:right;">
            <a href="{{Config::get('app.url')}}imdb/delete?tmdb_id={{$movie->tmdb_id}}" class="btn btn-danger">Delete Movie</a>                             
         </div>
      </div>
   </div>
</div>
@endsection