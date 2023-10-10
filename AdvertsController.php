<?php

namespace App\Http\Controllers;

use App\Models\Adverts;
use Illuminate\Http\Request;
use Auth;
use Alert;

class AdvertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts=Adverts::all();
        return view('businessowner.adverts',compact('adverts')); 
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
        $adverts=new Adverts($request->all());
        $adverts->CreatedBy= Auth::User()->name;
        $adverts->save();
        Alert::success('Avert Creation', 'Advert Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adverts  $adverts
     * @return \Illuminate\Http\Response
     */
    public function show(Adverts $adverts)
    {
        $adverts=Adverts::all();
        return view('student.adverts',compact('adverts')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adverts  $adverts
     * @return \Illuminate\Http\Response
     */
    public function edit(Adverts $adverts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adverts  $adverts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adverts $adverts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adverts  $adverts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adverts $adverts)
    {
        //
    }
}
