<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostCategory;
use App\ContactDetail;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts      = Post::where('publish_status', 1)->latest()->paginate(6);
        $post_count = Post::where('publish_status', 1)->count();
        $categories = Category::all();
        return view('listing', ['posts' => $posts, 'categories' => $categories, 'post_count' => $post_count]);
    }

    /**
     * returns filter result
     * @return [object] [posts]
     */
    public function searchFilter(Request $request)
    {
        $posts      = Post::where('publish_status', 1)->latest();
        $categories = Category::all();
        if (isset($request->city) && $request->city != '') {
            $posts->Where('city', 'like', '%' . $request->city . '%');
        }
        if (isset($request->category) && $request->category != '') {
            $posts->whereHas('categories', function ($query) use ($request) {
                return $query->where('id', $request->category);
            });
        }
        if (isset($request->search_query) && $request->search_query != '') {
            $posts->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search_query . '%');
                $query->orWhere('description', 'like', '%' . $request->search_query . '%');
            });
        }
        $post_count = $posts->count();
        $posts = $posts->paginate(6);

        return view('listing', ['posts' => $posts, 'categories' => $categories, 'post_count' => $post_count]);
    }

    public function getAddPost()
    {
        $categories = Category::all();
        return view('post.add', ['categories' => $categories]);
    }

    public function viewPost($id)
    {
        $post = Post::where('id',$id)->with('user')->with('categories')->first();
        if(!$post)
            return view('error.404');

        //this will show 404 for unpublished posts
        if((!Auth::check() && $post->publish_status == 0) || (Auth::check() && $post->user_id != Auth::user()->id)){
            return view('error.404');
        }
        return view('post.view',['post' => $post]);
    }

    public function savepost(Request $request)
    {
        $post = CommonFunctionsController::savePost($request,Auth::user()->id);
        return redirect()->route('viewpost',[$post->id]);
    }

    public function myPosts(Request $request)
    {
        $posts = Post::latest();
        $post_count = $posts->count();
        $posts = $posts->paginate(10);
        return view('post.mypost',['posts' => $posts, 'post_count' => $post_count]);
    }

    public function editPost(Request $request)
    {

        $post = Post::find($request->id);
        $categories = Category::all();
        return view('post.edit',['post'=>$post, 'categories' => $categories]);
    }

    public function updatePost(Request $request)
    {
        $post = CommonFunctionsController::updatePost($request);
        return redirect()->route('viewpost',[$post->id]);
    }

    public function deletePost(Request $request)
    {
        PostCategory::where('post_id',$request->id)->delete();
        Post::find($request->id)->delete();
        return redirect()->route('myposts');
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
