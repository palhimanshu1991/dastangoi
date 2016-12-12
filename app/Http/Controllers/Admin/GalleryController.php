<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GalleryController extends Controller
{

    /**
     * GalleryController constructor.
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
        $photos = Gallery::paginate();

        return view('admin.gallery.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.gallery.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.gallery.edit');
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
