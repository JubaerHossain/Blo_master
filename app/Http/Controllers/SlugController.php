<?php

namespace App\Http\Controllers;

use App\Slug;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirectorroute;

class SlugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.slug.slug');
    }
    public function slug_list()
        {
            $data=Slug::all();
            return view('Admin.slug.slug_list',compact('data'));
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
        $data=Slug::create($request->all());
        $data->save();
        return redirect()->action('SlugController@index')->with('success','slug added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slug  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Slug $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slug  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(Slug $slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slug  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slug $slug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slug  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slug $slug)
    {
        //
    }
}
