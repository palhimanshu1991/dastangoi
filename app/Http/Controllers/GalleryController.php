<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests;
use Carbon;
use Config;
use DB;
use File;
use Illuminate\Http\Request;
use Storage;

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
        $photos = Gallery::all();

        return view('gallery.index', compact('photos'));
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
     * @param  Request $request
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //

        $filename    = str_random() . '.' . $request->file('photo')->getClientOriginalExtension();
        $destination = public_path() . '/uploads/';

        $request->file('photo')->move($destination, $filename);

        DB::table('gallery')->insert([
            'gallery_name' => $request->description,
            'gallery_url'  => $filename,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);

        return redirect('/admin/gallery');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getShow($id)
    {
        //
        $photo = Gallery::find($id);

        return view('gallery.show', compact('photo'));
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
        $gallery = DB::table('gallery')->where('gallery_id', $id)->first();
        if ($gallery) {
            DB::table('gallery')->where('gallery_id', $id)->delete();
            File::delete(Config::get('app.storage') . '/' . $gallery->gallery_url);

            return redirect()->back();
        } else {
            return 'Some error occured';
        }
    }
}
