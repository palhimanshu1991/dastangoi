<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //

        $events = Event::all();

        $upcoming = Event::where('event_date','>',Carbon::now())->get();
        $past = Event::where('event_date','<',Carbon::now())->get();

        return view('event.index',compact('upcoming','past'));
    }

}
