<?php

namespace App\Http\Controllers;

use App\Post;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirectorroute;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.posst.create_post');
    }
    public function slug()
    {
        return view('Admin.slug.slug');
    }
    public function Post_list()

    {
        $data=Post::all();


        return view('Admin.posst.post_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $da = Post::all();
        return view('create',compact('da'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $data=Post::create($request->all());
        $data->save();

        return redirect()->action('PostController@index')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('Admin.posst.create_post');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $data=Post::create($post->all());
        $data->save();

        return view('Admin.posst.Update_post')->with('success', 'Post has been Update');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
