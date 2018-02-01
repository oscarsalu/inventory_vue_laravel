<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransfersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = \App\Transfer::orderBy('created_at', 'desc')->get();
        return response()->json([
            'transfers' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        foreach ($request->transfers as $key => $value) {
            # code...
            \App\Transfer::updateOrCreate(
                ['serial' => $request->input('transfers.'.$key.'.serial')],
                [
                    'serial' =>$request->input('transfers.'.$key.'.serial'),
                    'quantity' =>$request->input('transfers.'.$key.'.quantity'),
                    'manufacture_id' =>$request->input('transfers.'.$key.'.manufacture'),
                    'description_id' =>$request->input('transfers.'.$key.'.description'),
                    'location_id' =>$request->input('transfers.'.$key.'.location'),
                    'category_id' =>$request->input('transfers.'.$key.'.category'),
                    'brand_id' =>$request->input('transfers.'.$key.'.model'),
                    'status' =>$request->input('transfers.'.$key.'.status'),
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
