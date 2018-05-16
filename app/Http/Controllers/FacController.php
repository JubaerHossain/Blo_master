<?php

namespace App\Http\Controllers;

use App\Fac;
use Illuminate\Http\Request;

class FacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Front.Q&A.index');
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
     * @param  \App\Fac  $fac
     * @return \Illuminate\Http\Response
     */
    public function show(Fac $fac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fac  $fac
     * @return \Illuminate\Http\Response
     */
    public function edit(Fac $fac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fac  $fac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fac $fac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fac  $fac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fac $fac)
    {
        //
    }
}
