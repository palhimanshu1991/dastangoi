<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Dastangoi - Home</title>

    <!-- Metadata -->
    <meta name="title" content="Dastangoi">
    <meta name="keywords" content="">
    <meta name="description" content="Dastangoi Bootstrap Template">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="{{ url('') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/css/animate.css" rel="stylesheet"/>

    <!-- Dastangoi theme CSS -->
    <link href="{{ url('') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('') }}/color/default.css" rel="stylesheet">

    <!--[if lte IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
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
                        <h1 class="upper">Dastangoi</h1>
                    </a>
                </div>
         -->                <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav transparent">
                <li><a href="{{ url('') }}/">Home</a></li>
                <li><a href="{{ url('') }}/event">Events</a></li>
                <li><a href="{{ url('') }}/gallery">Gallery</a></li>
                <li><a href="{{ url('') }}/users">Profiles</a></li>
                <li><a href="{{ url('') }}/about">About</a></li>
                <!-- <li><a href="#gallery">Photos</a></li> -->
                <li><a href="{{ url('') }}/contact">Contact</a></li>
                <li><a href="{{ url('') }}/blog">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('') }}/press">Past Coverage</a></li>
                        <li><a href="{{ url('') }}/press/kit">PR Kit</a></li>
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
                <p>Copyright 2016-17 - Dastangoi.com</p>
            </div>
        </div>
    </div>
</footer>
<!-- Core JavaScript Files -->
<script src="{{ url('') }}/js/jquery.min.js"></script>
<script src="{{ url('') }}/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/js/jquery.easing.min.js"></script>
<script src="{{ url('') }}/js/jquery.scrollTo.js"></script>
<script src="{{ url('') }}/js/wow.min.js"></script>
]

<!-- Custom Theme JavaScript -->
<script src="{{ url('') }}/js/custom.js"></script>

<!-- Extra -->
@yield('extra')


        <!-- Inline scripts -->
<script></script>


</body>
</html>