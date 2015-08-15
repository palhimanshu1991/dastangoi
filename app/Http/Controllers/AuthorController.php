<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //

        $users = Author::all();


        return view('authors.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('authors.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {

        // name of the file
        if($request->file('image')){
            $filename = $request->file('image')->getClientOriginalName().'_'.time();
        } else {
            $filename = "";
        }

        //        
        $author = new Author;

        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->bio = $request->input('bio');

        $author->facebook = $request->input('facebook');
        $author->google = $request->input('google');
        $author->twitter = $request->input('twitter');
        $author->website = $request->input('website');
        $author->image = $filename;

        $author->save();

        // destination where the image will be moved
        $destination = public_path().'/uploads/authors/'.$author->id;

        // moving the files
        if($request->file('image')){
            $request->file('image')->move($destination,$filename);
        }        


        return redirect('/admin/authors');
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
        Author::destroy($id);

        return redirect()->back();

    }
}
