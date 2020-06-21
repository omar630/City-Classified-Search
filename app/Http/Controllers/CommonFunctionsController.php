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
    public static function uploadImage($image,$user_id)
    {
        $imageName = '';

        $imageName = time().'-'.User::find($user_id)->first_name.'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }

    public static function savePost(Request $request,$user_id)
    {
        $imageName = self::uploadImage($request->file('cover_image'),$user_id);
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
        return $post;
    }

    public static function updatePost($request)
    {
        $post = Post::where('id',$request->post_id)->first();
        $imageName = self::uploadImage($request->cover_image,$post->user_id);
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'cover_image'    => $imageName
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
        return $post;
    }
}
