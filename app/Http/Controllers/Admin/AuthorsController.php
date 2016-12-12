<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{

    /**
     * AuthorsController constructor.
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
        $authors = Author::all();

        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.authors.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.authors.edit');
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
