<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //

        $users = User::all();


        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('users.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //        
        $user = new User;

        $user->name  = $request->input('name');
        $user->email = $request->input('email');
        $user->bio   = $request->input('bio');

        $user->facebook = $request->input('facebook');
        $user->google   = $request->input('google');
        $user->twitter  = $request->input('twitter');
        $user->website  = $request->input('website');
        $user->image    = $request->input('image');

        $user->save();

        return redirect('/admin/users');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function getDelete($id)
    {
        //
        User::destroy($id);

        return redirect()->back();

    }
}
