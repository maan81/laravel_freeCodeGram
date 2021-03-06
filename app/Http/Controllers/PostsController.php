<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()){
            $users = auth()->user()->following()->pluck('profiles.user_id');
            // $posts = Post::whereId('user_id', $users)->orderBy('created_at','DESC')->get();
            $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        }else{
            $users = \App\User::all();

            $user_ids = [];

            foreach ($users as $user) {
                $user_ids[] = $user->id;
            }

            $posts = Post::whereIn('user_id', $user_ids)->with('user')->latest()->paginate(5);
        }


        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'field_validation_not_reqd' => '',
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $image_path = request('image')->store('uploads','public');

        $image = Image::make(public_path('storage/'.$image_path))->fit(1200,1200);
        $image->save();


        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $image_path,
        ]);


        return redirect('/profile/'.auth()->user()->id);
        // dd(request()->all());
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
