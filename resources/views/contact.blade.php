@extends('app')

@section('content')

    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading">
                            <h2>Get in touch</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-20">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="boxed-grey">
                        <form action="{{ url('contact') }}" method="POST" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                                               required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Your Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Enter email" required="required"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="general">General</option>
                                            <option value="booking">Booking</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                                  required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--     <div class="col-lg-4">
        <div class="widget-contact">
            <h5>Main Office</h5>

            <address>
              <strong>Squas Design, Inc.</strong><br>
              Tower 795 Folsom Ave, Beautiful Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Email</strong><br>
              <a href="mailto:#">email.name@example.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong><br>
                    <ul class="company-social">
                        <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
            </address>

        </div>
    </div> -->
            </div>

        </div>
    </section>


@endsection