@extends('app')
@section('content')
  <style type="text/css">
h4.title {
  white-space: pre;
  overflow: ellipsis;
  word-spacing: normal;
  word-wrap: normal;
}

  </style>
<div class="container">
   <div class="row col-md-offset-1">

      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">IMDB Top 10 </h3>
                Updated: {{Carbon::parse($now_playing['updated_at'])->diffForHumans()}}
              </div>
              <div class="panel-">                
                  @foreach($now_playing['results'] as $movie)
                  <a href="{{$movie->tmdb_id}}" class="list-group-item">
                    <b class="list-group-item-heading">{{$movie->tmdb_title}}</b>
                  </a>
                  @endforeach
              </div>
            </div>                      
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Opening This Week (IMDB) </h3>
                Updated: {{Carbon::parse($this_week['updated_at'])->diffForHumans()}}
              </div>
              <div class="panel-">                
                  @foreach($this_week['results'] as $mov)
                  <a href="{{$mov->tmdb_id}}" class="list-group-item">
                    <b class="list-group-item-heading">{{$mov->tmdb_title}}</b>
                  </a>
                  @endforeach
              </div>
            </div>            
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">...</p>
              </a>
            </div>             
          </div>                    
        </div>       
      </div>



      <div class="col-md-10 ">
         <div class="bs-example" data-example-id="hoverable-table">        
         <div class="row">
            <div class="col-md-12">
               <h3>Top Ten on IMDB ({{count($now_playing['results'])}} Movies)</h3>   
                <p>
                  <a href="{{ url('/imdb/nowplayingupdate') }}" class="btn btn-primary" role="button">Update NowPlaying Movies</a> <br/>
                  Last updated: {{Carbon::parse($now_playing['updated_at'])->diffForHumans()}}
                </p>                          
            </div>

         @foreach($now_playing['results'] as $movie)          
          <div class="col-xs-6 col-md-3">
            <a href="{{$movie->tmdb_id}}">
            <div class="thumbnail">
              <img src="http://image.tmdb.org/t/p/w300/{{$movie->tmdb_backdrop_path}}" alt="" style="height:115px;"> 
              <div class="caption">
                <h4 class="title">{{$movie->tmdb_title}}</h4>
                <h4>
                  {{$movie->omdb_imdbRating}}<font size="1.5">IMDB </font> 
                  {{$movie->omdb_tomatoMeter}}<font size="1.5">RT </font> 
                  {{$movie->omdb_metascore}}<font size="1.5">META </font>
                </h4>
                <p><font size="1.5">{{Carbon::parse($movie->updated_at)->diffForHumans()}}</font></p>
<!--                 <p>
                  <a href="#" class="btn btn-default" role="button">IMDB</a> 
                  <a href="#" class="btn btn-default" role="button">Rotten</a>
                </p> -->
              </div>
            </div>
            </a>
          </div>
          @endforeach
        </div>

         <div class="row">
         
            <div class="col-md-12">
               <h3>This Week ({{count($this_week['results'])}})</h3>   
                <p>                  
                  <a href="{{ url('/imdb/thisweekupdate') }}" class="btn btn-primary" role="button">Update ThisWeek Movies</a> <br/>
                  Last updated: {{Carbon::parse($this_week['updated_at'])->diffForHumans()}}
                </p>                          
            </div>
         @foreach($this_week['results'] as $mov)          
          <div class="col-xs-6 col-md-3">
            <a href="{{$mov->tmdb_id}}">
            <div class="thumbnail">
              <img src="http://image.tmdb.org/t/p/w300/{{$mov->tmdb_backdrop_path}}" alt="" style="height:115px;"> 
              <div class="caption">
                <h4 class="title">{{$mov->tmdb_title}}</h4>
                <h4>
                  {{$mov->omdb_imdbRating}}<font size="1.5">IMDB </font> 
                  {{$mov->omdb_tomatoMeter}}<font size="1.5">RT </font> 
                  {{$mov->omdb_metascore}}<font size="1.5">META </font>
                </h4>
                <p><font size="1.5">{{Carbon::parse($mov->updated_at)->diffForHumans()}}</font></p>
                <p>
                  <a href="#" class="btn btn-default" role="button">IMDB</a> 
                  <a href="#" class="btn btn-default" role="button">Rotten</a>
                </p>

              </div>
            </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection