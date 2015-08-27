<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\User;
use App\Gallery;
use App\Author;

use DB;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }


    public function getEvent(){
        $events = Event::all();
        return view('admin.events',compact('events'));
    }

    public function getUsers(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function getAuthors(){
        $authors = Author::all();
        return view('admin.authors',compact('authors'));
    }    

    public function getGallery(){
        $photos = DB::table('gallery')->get();
        return view('admin.gallery',compact('photos'));
    }

    public function getPress(){
        $presses = DB::table('press')->get();
        return view('admin.press',compact('presses'));
    }

    public function getBlog(){
        $stories = DB::table('stories')->get();
        return view('admin.blog',compact('stories'));
    }

}
