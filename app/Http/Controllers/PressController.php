<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //
        $presses = DB::table('press')->get();
        return view('press.index',compact('presses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        //
        return view('admin.press_create');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate(Request $request)
    {
        //
            $query = DB::table('press')->insert([
                [
                    'press_title' => $request->input('title'), 
                    'press_link' => $request->input('link'),
                    'press_description' => $request->input('description'),
                    'press_date' => $request->input('date')
                ]
            ]);      

            return redirect('admin/press');  
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
    public function getDelete($id)
    {
        //
        $del = DB::table('press')->where('press_id',$id)->delete();

        return redirect()->back();

    }
}
