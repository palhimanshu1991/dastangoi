<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!--            <a class="navbar-brand" href="http://localhost/laracms">
                            <h1 class="upper">Dastangoi</h1>
                        </a>-->
        </div>
        <!--Collect the nav links, forms, and other content for toggling-->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('') }}/">Home</a></li>
                <li><a href="{{ url('') }}/event">Events</a></li>
                <li><a href="{{ url('') }}/gallery">Gallery</a></li>
                <li><a href="{{ url('') }}/authors">Profiles</a></li>
                <li><a href="{{ url('') }}/about">About</a></li>
                <li><a href="{{ url('') }}/blog">Blog</a></li>
                <!-- <li><a href="#gallery">Photos</a></li> -->
                <li><a href="{{ url('') }}/contact">Contact</a></li>
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