<?php

namespace App\Http\Controllers;

use App\Models\Welcomeheadersection;
use Illuminate\Http\Request;

class WelcomeheadersectionController extends Controller
{
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
     * @param  \App\Models\Welcomeheadersection  $welcomeheadersection
     * @return \Illuminate\Http\Response
     */
    public function show(Welcomeheadersection $welcomeheadersection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcomeheadersection  $welcomeheadersection
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcomeheadersection $welcomeheadersection)
    {
        $edit=$welcomeheadersection;
        return view('pages.back.edit.welcomeheadersection',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcomeheadersection  $welcomeheadersection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcomeheadersection $welcomeheadersection)
    {
        $update = $welcomeheadersection;
        $update->img = $request->img;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcomeheadersection  $welcomeheadersection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcomeheadersection $welcomeheadersection)
    {
        //
    }
}
