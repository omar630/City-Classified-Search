<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Category;
use App\PostCategory;
use App\ContactDetail;
use Auth;

class CommonFunctionsController extends Controller
{
    public static function uploadImage($image)
    {
        $imageName = '';
        if($image->extension() == 'jpeg' || $image->extension() == 'jpg' || $image->extension() == 'png' || $image->extension() == 'gif'){
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }

    public static function savePost(Request $request,$user_id)
    {
        $imageName = '';
        if($request->cover_image != '' || $request->cover_image != null){
            $imageName = self::uploadImage($request->file('cover_image'));
        }
        $user_id = $user_id;
        $post    = Post::create([
            'user_id'        => $user_id,
            'title'          => $request->title,
            'cover_image'    => $imageName,
            'description'    => $request->description,
            'address'        => $request->address,
            'publish_status' => 0,
            'city'           => $request->city,
            'cover_image'    => $imageName
        ]);

        if (isset($request->contact_name) && $request->contact_name != '' || isset($request->contact_email) && $request->contact_email != '' || isset($request->contact_mobile) && $request->contact_mobile != '') {
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
        return $post;
    }

    public static function updatePost($request)
    {
        $post = Post::where('id',$request->post_id)->first();
        $imageName = $post->cover_image;
        if($request->cover_image != '' || $request->cover_image != null){
            $imageName = self::uploadImage($request->cover_image);
        }
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'cover_image'    => $imageName,
            'city' => $request->city
        ]);
        if (isset($request->contact_name) && $request->contact_name != '' || isset($request->contact_email) && $request->contact_email != '' || isset($request->contact_mobile) && $request->contact_mobile != '') {
            $contact = ContactDetail::updateOrCreate(['post_id' => $request->post_id],[
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
        return $post;
    }
}
