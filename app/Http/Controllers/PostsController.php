<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        dd(request('image')->store('uploads','public'));

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
