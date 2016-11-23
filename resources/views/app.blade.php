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

    <!-- Inline styles -->
    <style></style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>

@include('layout.header')

@yield('content')

@include('layout.footer')

{{--<!-- Core JavaScript Files -->--}}
<script src="{{ url('') }}/js/jquery.min.js"></script>
<script src="{{ url('') }}/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/js/jquery.easing.min.js"></script>
<script src="{{ url('') }}/js/jquery.scrollTo.js"></script>
<script src="{{ url('') }}/js/wow.min.js"></script>
]
{{--<!-- Custom Theme JavaScript -->--}}
<script src="{{ url('') }}/js/custom.js"></script>

{{--<!-- Extra -->--}}
@yield('extra')


</body>
</html>