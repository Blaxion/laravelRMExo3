<?php

namespace App\Http\Controllers;

use App\Models\Coordonnee;
use Illuminate\Http\Request;

class CoordonneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Coordonnee  $coordonnee
     * @return \Illuminate\Http\Response
     */
    public function show(Coordonnee $coordonnee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordonnee  $coordonnee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordonnee $coordonnee)
    {
        $edit=$coordonnee;
        return view('pages.back.edit.coordonnee',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coordonnee  $coordonnee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordonnee $coordonnee)
    {
        $update = $coordonnee;
        $update->titre = $request->titre;
        $update->sous_titre = $request->sous_titre;
        $update->info1 = $request->info1;
        $update->info2 = $request->info2;
        $update->info3 = $request->info3;
        $update->info4 = $request->info4;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordonnee  $coordonnee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordonnee $coordonnee)
    {
        //
    }
}
