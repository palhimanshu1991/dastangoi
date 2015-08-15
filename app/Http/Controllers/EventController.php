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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('event.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //        

        $date = Carbon::parse($request->input('event_date'))->toDateTimeString();

        $event = new Event;

        $event->event_name = $request->input('event_name');
        $event->event_date = $date;
        $event->event_place = $request->input('event_place');
        $event->event_description = $request->input('event_description');

        $event->save();

        return redirect('/admin/event');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        //
        Event::destroy($id);

        return redirect()->back();

    }
}
