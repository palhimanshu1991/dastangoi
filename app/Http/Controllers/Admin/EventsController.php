<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventsController extends Controller
{

    /**
     * EventController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::paginate();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->createEventTask($request);

        return redirect()->route('admin.events.index');
    }

    /**
     *
     * @param Request $request
     * @return void
     */
    private function createEventTask(Request $request)
    {
        $date                     = Carbon::parse($request->input('event_date'))->toDateTimeString();
        $event                    = new Event;
        $event->event_name        = $request->input('event_name');
        $event->event_date        = $date;
        $event->event_place       = $request->input('event_place');
        $event->event_description = $request->input('event_description');
        $event->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.events.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function edit($id)
    {
        $event = Event::findorFail($id);

        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  integer $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->updateEventTask($id, $request);

        return redirect('/admin/event');
    }

    /**
     * @param         $id
     * @param Request $request
     */
    private function updateEventTask($id, Request $request)
    {
        $event = Event::findorFail($id);

        $event->event_name        = $request->input('event_name');
        $event->event_date        = $request->input('event_date');
        $event->event_place       = $request->input('event_place');
        $event->event_description = $request->input('event_description');

        $event->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer $id
     * @return Response
     */
    public function destroy($id)
    {
        Event::destroy($id);

        return redirect()->back();
    }
}
