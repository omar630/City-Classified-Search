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
        $post = Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'publish_status' => 1
        ]);

        if(isset($request->contact_name) && $request->contact_name != ''){
            ContactDetail::create([
                'post_id' => $post->id,
                'contact_name' => $request->contact_name,
                'contact_mobile' => $request->contact_mobile,
                'contact_email' => $request->contact_email
            ]);
        }

        foreach ($request->category as $category) {
            PostCategory::create([
                'post_id' => $post->id,
                'category_id' => $category
            ]);
        }
        $categories = Category::all();
        return redirect()->route('viewpost',[$post->id]);
    }

    public function editPost(Request $request)
    {

        $post = Post::find($request->id);
        $categories = Category::all();
        return view('admin.posts.edit',['post'=>$post, 'categories' => $categories]);
    }

    public function updatePost(Request $request)
    {
        $post = Post::where('id',$request->post_id)->first();
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address
            ]);
            if(isset($request->contact_name) && $request->contact_name != ''){
                $contact = ContactDetail::where('post_id',$request->post_id);
                $contact->updateOrCreate([
                    'post_id' => $request->post_id,
                    'contact_name' => $request->contact_name,
                    'contact_mobile' => $request->contact_mobile,
                    'contact_email' => $request->contact_email
                ]);
        }
        PostCategory::where('post_id',$request->post_id)->delete();
        if(isset($request->category)){
            foreach($request->category as $category) {
                PostCategory::create(['post_id' => $post->id,'category_id' => $category]);
            }
        }
        return redirect()->route('viewpost',[$post->id]);
    }

    public function approvalPage()
    {
        $posts = Post::where('publish_status',0)->latest();
        $post_count = $posts->count();
        $posts = $posts->paginate(5);
        return view('admin.posts.approval',['posts' => $posts, 'post_count' => $post_count]);
    }

    public function deletePost(Request $request)
    {
        PostCategory::where('post_id',$request->post_id)->delete();
        Post::find($request->id)->delete();
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
