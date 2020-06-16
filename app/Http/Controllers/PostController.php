<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('post_categories')->join('posts','posts.id','post_categories.post_id')->join('categories','post_categories.category_id','categories.id')->leftJoin('contact_details','posts.id','contact_details.post_id')->get();
        return view('listing',['posts' => $posts]);
    }

    /**
     * returns filter result
     * @return [object] [posts]
     */
    public function searchFilter(Request $request)
    {
        $posts = DB::table('post_categories')->join('posts','posts.id','post_categories.post_id')->join('categories','post_categories.category_id','categories.id')->leftJoin('contact_details','posts.id','contact_details.post_id');
        if($request->search_query==''){
            if(isset($request->city) && isset($request->category)){
                $posts = $posts->Where('city','like','%'.$request->city.'%')->where('category_id',$request->category)->get();
            }
            elseif(!isset($request->city) && isset($request->category)){
                $posts = $posts->where('category_id',$request->category)->get();
            }
            elseif(isset($request->city) && !isset($request->category)){
                $posts = $posts->where('city',$request->city)->get();
            }
        }
        else{
            if(isset($request->city) && isset($request->category)){
                $posts = $posts->Where('city','like','%'.$request->city.'%')->where('category_id',$request->category)->Where('title','like','%'.$request->search_query.'%')->orWhere('description','link','%'.$request->search_query.'%')->get();
            }
            elseif(!isset($request->city) && isset($request->category)){
                $posts = $posts->where('category_id',$request->category)->Where('title','like','%'.$request->search_query.'%')->orWhere('description','like','%'.$request->search_query.'%')->get();
            }
            elseif(isset($request->city) && !isset($request->category)){
                $posts = $posts->where('city','like','%'.$request->city.'%')->Where('title','like','%'.$request->search_query.'%')->orWhere('description','like','%'.$request->search_query.'%')->get();
            }
            // if(isset($request->category) && isset($request->city) && $request->category != '0' && $request->city != '0' ){
            //     $posts = Post::leftJoin('contact_details','posts.id','contact_details.post_id')->Where('address','like','%'.$request->search_query.'%')->Where('city','like','%'.$request->search_query.'%')->get();
            // }
            // if(!isset($request->city) && isset($request->category) && $request->category !='0'){
            //     $posts = DB::table('post_categories')->join('posts','posts.id','post_categories.post_id')->join('categories','post_categories.category_id','categories.id')->leftJoin('contact_details','posts.id','contact_details.post_id')->Where('address','like','%'.$request->search_query.'%')->orWhere('title','like','%'.$request->search_query.'%')->where('category_id',$request->category)->get();
            // }
            // if(isset($request->category) && isset($request->city) && $request->category != '0' && $request->city != '0' ){
            //     $posts = Post::leftJoin('contact_details','posts.id','contact_details.post_id')->Where('address','like','%'.$request->search_query.'%')->Where('city','like','%'.$request->search_query.'%')->get();
            // }
        }
        if($request->search_query=='' && $request->city=='' && $request->category=='')
           $posts = $posts->get();
        return view('listing',['posts' => $posts]);
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
