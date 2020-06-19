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
        $posts      = Post::where('publish_status', 1)->latest()->get();
        $categories = Category::all();
        return view('listing', ['posts' => $posts, 'categories' => $categories]);
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
        $posts = $posts->get();

        return view('listing', ['posts' => $posts, 'categories' => $categories]);
    }

    public function getAddPost()
    {
        $categories = Category::all();
        return view('post.add', ['categories' => $categories]);
    }

    public function viewPost($id)
    {
        $post = Post::where('id',$id)->with('user')->with('categories')->first();
        return view('post.view',['post' => $post]);
    }

    public function savepost(Request $request)
    {
        $user_id = Auth::user()->id;
        $post    = Post::create([
            'user_id'        => $user_id,
            'title'          => $request->title,
            'description'    => $request->description,
            'address'        => $request->address,
            'publish_status' => 0,
            'city'           => $request->city
        ]);

        if (isset($request->contact_name) && $request->contact_name != '') {
            ContactDetail::create([
                'post_id'        => $post->id,
                'contact_name'   => $request->contact_name,
                'contact_mobile' => $request->contact_mobile,
                'contact_email'  => $request->contact_email,
            ]);
        }

        foreach ($request->category as $category) {
            PostCategory::create([
                'post_id'     => $post->id,
                'category_id' => $category,
            ]);
        }
        $categories = Category::all();
        return redirect()->route('postpage');
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
