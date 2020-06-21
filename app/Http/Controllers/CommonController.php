<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

use App\Category;
use App\User;

class CommonController extends Controller
{

    public function home(){
        $categories = Category::all();
        return view('home',['categories' => $categories]);
    }
     public function about(){
        return view('about');
    }
    public function catagories(){
        return view('catagories');
    }

     public function contact(){
        return view('contact');
    }
       public function listing(){
        return view('listing');
    }

     public function post(){
        return view('post');
    }

    public function myProfile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('profile',['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->user_id);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email
        ]);
        if($user){
            Session::flash('message', 'Profile updated');
            Session::flash('response', 1);
        }
        else{
            Session::flash('message', 'some error ocurred please try again');
            Session::flash('response', 0);
        }
        return redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
