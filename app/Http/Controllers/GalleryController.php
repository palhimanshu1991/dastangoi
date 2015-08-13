<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Storage;
use Config;
use Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //
        $photos = DB::table('gallery')->get();

        return view('gallery.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //

        $filename = $request->file('photo')->getClientOriginalName().'_'.time();
        $destination = public_path().'/uploads/';

        $request->file('photo')->move($destination,$filename);

        DB::table('gallery')->insert([
            'gallery_description'  =>  $request->description,
            'gallery_url'   =>  $filename,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        return redirect('/admin/gallery');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getShow($id)
    {
        //
        $photo = DB::table('gallery')->where('gallery_id',$id)->first();
        return view('gallery.show',compact('photo'));
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
        $gallery = DB::table('gallery')->where('gallery_id',$id)->first();
        if($gallery){
            Storage::delete($gallery->gallery_url);
            DB::table('gallery')->where('gallery_id',$id)->delete();
            return redirect()->back();
        } else {
            return 'Some error occured';
        }
    }
}
