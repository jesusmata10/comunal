<?php

namespace App\Http\Controllers;

use App\Bombona;
use Illuminate\Http\Request;

class BombonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pdvsa.index');
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
     * @param  \App\Bombona  $bombona
     * @return \Illuminate\Http\Response
     */
    public function show(Bombona $bombona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bombona  $bombona
     * @return \Illuminate\Http\Response
     */
    public function edit(Bombona $bombona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bombona  $bombona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bombona $bombona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bombona  $bombona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bombona $bombona)
    {
        //
    }
}
