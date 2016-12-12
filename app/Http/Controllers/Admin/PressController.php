<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PressController extends Controller
{

    /**
     * PressController constructor.
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
        $presses = DB::table('press')->get();

        return view('admin.press.index', compact('presses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.press.create');
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
        return view('admin.press.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  integer $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.press.edit');
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
