<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $post= new Post();
        $data = ['post'=>$post];
        $posts = \Auth::user()->posts()->orderBy('created_at', 'desc')->paginate(6);
        $user = \Auth::user();
        $user_posts_number = \Auth::user()->posts()->count();
        
        //$data = ['posts' => $posts];
        return view('connection_create_read',[
            'posts' => $posts,
            'user_posts_number'=> $user_posts_number,
            $data,
            'user'=> $user]);
    }

    /**'user_posts_number'=> $posts
     * Show the form for creating a new resource.
     */

     public function mypage($id)
    {
        $posts = User::find($id)->posts()->orderBy('created_at', 'desc')->paginate(6);
        $user_posts_number = User::find($id)->posts()->count();
        $user = User::find($id);
        //$posts = Post::all();
        //$data = ['posts' => $posts];
        return view('connection_mypage',[
            'posts' => $posts,
            'user_posts_number'=> $user_posts_number,
            'user' => $user]);
    }

    public function userlist()
    {
        $users = User::all();
        return view('connection_userlist',[
            'users' => $users]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post= new Post();
        $post->user_id = \Auth::id();
        $post->post_body = $request->post_body;
        $post->save();
        return redirect(route('connection/createread'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {   
        //$user = new User();
        $filename = $request->img_path->getClientOriginalName();
        //$path = $img->store('img','public');
        $img = $request->img_path->storeAs('',$filename,'public');
        $auth_id = \Auth::id();
        $user= User::find($auth_id);
        $user->profile_image = $img;
        $user->save();
        return redirect(route('connection/mypage'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
