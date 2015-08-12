<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;

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

        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('admin.event_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //        
        $event = new Event;

        $event->event_name = $request->input('event_name');
        $event->event_date = $request->input('event_date');
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
