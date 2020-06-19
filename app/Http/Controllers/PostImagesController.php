<?php

namespace App\Http\Controllers;

use App\PostImages;
use Illuminate\Http\Request;
use Auth;

class PostImagesController extends Controller
{

    public function imageUploadPost(Request $request)
    {
        if ($request->hasFile('cover_image')) {
            $imageName = time().'-'.Auth::user()->first_name.'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('images'), $imageName);
            return json_encode(array('link' => url('images/'.$imageName)));
        }
    }
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
     * @param  \App\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function show(PostImages $postImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function edit(PostImages $postImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostImages $postImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostImages $postImages)
    {
        //
    }
}
