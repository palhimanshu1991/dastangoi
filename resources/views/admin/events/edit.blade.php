@extends('admin')
@section('content')
    <br/>
    <br/><br/><br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">

                <h4>Create A New Event</h4>

                <form action="{{Config::get('app.url')}}event/edit/{{$event->event_id}}"
                      class="bs-example bs-example-form" method="POST">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="event_name" required="yes" class="form-control"
                               value="{{$event->event_name}}" aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group">
                        <label>Event Date</label>
                        <input type="text" name="event_date" required="yes" class="form-control"
                               value="{{$event->event_date}}" placeholder="Event Date" aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group">
                        <label>Event Place</label>
                        <input type="text" name="event_place" required="yes" class="form-control"
                               value="{{$event->event_place}}" placeholder="Event Place"
                               aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea name="event_description" class="form-control"
                                  placeholder="Event Description">{{$event->event_description}}</textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Update Event"/>

                </form>


            </div>
        </div>
    </div>
@endsection

@section('extra')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>

@endsection