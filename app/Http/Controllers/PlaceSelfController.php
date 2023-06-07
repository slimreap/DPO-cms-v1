<?php

namespace App\Http\Controllers;

use App\Models\PlaceSelf;
use Illuminate\Http\Request;

class PlaceSelfController extends Controller
{


    public function show() {
        $placeself = PlaceSelf::all();
        // dd($placeself);
        return response()->json($placeself);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceSelf  $placeSelf
     * @return \Illuminate\Http\Response
     */
    // public function show(PlaceSelf $placeSelf)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlaceSelf  $placeSelf
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaceSelf $placeSelf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlaceSelf  $placeSelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlaceSelf $placeSelf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceSelf  $placeSelf
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaceSelf $placeSelf)
    {
        //
    }
}
