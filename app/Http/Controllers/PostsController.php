<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
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
}
