<?php

namespace App\Http\Controllers;

//classes
use Illuminate\Http\Request;

//Models
use App\User;
use App\Post;
use App\Category;
use App\PostCategory;
use App\ContactDetail;
use Auth;

use App\Http\Controllers\CommonFunctionsController;

class AdminController extends Controller
{

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.signin');
    }

    public function dashboard()
    {
        $usersCount = count(User::where('role_id','!=','1')->get());
        $postsCount = count(Post::where('publish_status','1')->get());
        return view('admin.dashboard',['usersCount' => $usersCount, 'postsCount' => $postsCount]);
    }

    public function getAddPost()
    {
        $categories = Category::all();
        return view('admin.posts.add',['categories' => $categories]);
    }

    public function savepost(Request $request)
    {
        $post = CommonFunctionsController::savePost($request, Auth::user()->id);
        return redirect()->route('viewpost',[$post->id]);
    }

    public function updatePost(Request $request)
    {
        $post = CommonFunctionsController::updatePost($request);
        return redirect()->route('viewpost',[$post->id]);
    }

    public function editPost(Request $request)
    {

        $post = Post::find($request->id);
        $categories = Category::all();
        return view('admin.posts.edit',['post'=>$post, 'categories' => $categories]);
    }

    public function approvalPage()
    {
        $posts = Post::where('publish_status',0)->latest();
        $post_count = $posts->count();
        $posts = $posts->paginate(5);
        return view('admin.posts.approval',['posts' => $posts, 'post_count' => $post_count]);
    }

    public function deletePost($id)
    {
        PostCategory::where('post_id',$id)->delete();
        Post::find($id)->delete();
        return redirect()->route('admin.postsapprove');
    }

    public function approvePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->publish_status = 1;
        $post->save();
        return redirect()->route('admin.postsapprove');
    }

    public function profile()
    {
        //$user = Auth::user();
        $user = User::find(1);
        return view('admin.profile',['user' => $user]);
    }

    public function allPosts()
    {
        $posts = Post::where('publish_status',1)->latest();
         $post_count = $posts->count();
        $posts = $posts->paginate(5);
        return view('admin.posts.all',['posts' => $posts, 'post_count' => $post_count]);
    }
}
