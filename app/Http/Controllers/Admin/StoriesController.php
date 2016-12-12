<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoriesController extends Controller
{

    /**
     * StoriesController constructor.
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
        $stories = Story::paginate();

        return view('admin.stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        Story::create([
            'story_title' => $request->input('title'),
            'story_body'  => $request->input('body')
        ]);

        return redirect()->route('admin.stories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.stories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.stories.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
