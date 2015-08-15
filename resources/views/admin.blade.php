
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Admin - Home</title>

    <!-- Metadata -->
    <meta name="title" content="Squad">
    <meta name="keywords" content="">
    <meta name="description" content="Squad Bootstrap Template">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Core CSS -->
    <link href="{{Config::get('app.url')}}css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{Config::get('app.url')}}css/medium-editor.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="{{Config::get('app.url')}}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{Config::get('app.url')}}css/animate.css" rel="stylesheet" />

    <!-- Squad theme CSS -->

    <!--[if lte IE 9]>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Extra styles -->
    
    <!-- Inline styles -->
    <style></style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
<!--         <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="http://localhost/laracms">
                <h1 class="upper">Squad</h1>
            </a>
        </div>
 -->                <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{Config::get('app.url')}}">Home</a></li>
                <li><a href="{{Config::get('app.url')}}event">Events</a></li>
                <li><a href="{{Config::get('app.url')}}gallery">Gallery</a></li>
                <li><a href="{{Config::get('app.url')}}authors">Profiles</a></li>
                <li><a href="{{Config::get('app.url')}}about">About</a></li>
                <!-- <li><a href="#gallery">Photos</a></li> -->
                <li><a href="{{Config::get('app.url')}}contact">Contact</a></li>
                <li><a href="{{Config::get('app.url')}}blog">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{Config::get('app.url')}}press">Past Coverage</a></li>
                        <li><a href="{{Config::get('app.url')}}press/kit">PR Kit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
            </div>
    <!-- /.container -->
    </nav>

	@yield('content')

	<!-- /Section: contact -->
    <footer>
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-lg-12">
                 <div class="wow shake" data-wow-delay="0.4s">
                 <div class="page-scroll marginbot-30">
                     <a href="#intro" id="totop" class="btn btn-circle">
                         <i class="fa fa-angle-double-up animated"></i>
                     </a>
                 </div>
                 </div>
                 <p>&copy;Copyright 2015 - Dastangoi.com</p>
             </div>
         </div>
     </div>
    </footer>
    <!-- Core JavaScript Files -->
    <script src="{{Config::get('app.url')}}js/jquery.min.js"></script>
    <script src="{{Config::get('app.url')}}js/bootstrap.min.js"></script>
    <script src="{{Config::get('app.url')}}js/jquery.easing.min.js"></script>
    <script src="{{Config::get('app.url')}}js/jquery.scrollTo.js"></script>
    <script src="{{Config::get('app.url')}}js/wow.min.js"></script>]

    <!-- Custom Theme JavaScript -->
    <script src="{{Config::get('app.url')}}js/custom.js"></script>

    <!-- OctoberCMS Ajax Framework and extras -->
    @yield('extra')

    <!-- Extra -->
    
    <!-- Inline scripts -->
    <script>
// initializing editors
var titleEditor = new MediumEditor('.title-editable', {
    buttonLabels: 'fontawesome'
});
var bodyEditor = new MediumEditor('.body-editable', {
    buttonLabels: 'fontawesome'
});
$(function () {
    // initializing insert image on body editor
    $('.body-editable').mediumInsert({
        editor: bodyEditor,
        images: true,
        imagesUploadScript: "{{ URL::to('upload') }}"
    });
    // deactivate editors on show view
    if ($('#hideEditor').length) {
        $('.body-editable').mediumInsert('disable');
        bodyEditor.deactivate();
        titleEditor.deactivate();
    }
});
// hiding messages
$('.error').hide().empty();
$('.success').hide().empty();
 
// create post
$('body').on('click', '#form-submit', function(e){
    e.preventDefault();
    var postTitle = titleEditor.serialize();
    var postContent = bodyEditor.serialize();

    console.log(postTitle);
    console.log(postContent);
 
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url : "{{ URL::action('StoryController@postCreate') }}",
        data: { title: postTitle['title']['value'], body: postContent['body']['value'] },
        success: function(data) {
            if(data.success === false)
            {
                $('.error').append(data.message);
                $('.error').show();
            } else {
                $('.success').append(data.message);
                $('.success').show();
                setTimeout(function() {
                    window.location.href = "{{ URL::action('StoryController@getIndex') }}";
                }, 2000);
            }
        },
        error: function(xhr, textStatus, thrownError) {
            alert('Something went wrong. Please Try again later...');
        }
    });
    return false;
});
 
// update post
$('body').on('click', '#form-update', function(e){
    e.preventDefault();
    var postTitle = titleEditor.serialize();
    var postContent = bodyEditor.serialize();
 
    $.ajax({
        type: 'PUT',
        dataType: 'json',
        url : "{{ URL::action('StoryController@postCreate', array(Request::segment(2))) }}",
        data: { title: postTitle['post-title']['value'], body: postContent['post-body']['value'] },
        success: function(data) {
            if(data.success === false)
            {
                $('.error').append(data.message);
                $('.error').show();
            } else {
                $('.success').append(data.message);
                $('.success').show();
                setTimeout(function() {
                    window.location.href = "{{ URL::action('StoryController@getIndex') }}";
                }, 2000);
            }
        },
        error: function(xhr, textStatus, thrownError) {
            alert('Something went wrong. Please Try again later...');
        }
    });
    return false;
});
    </script>
</body>
</html>