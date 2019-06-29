<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        // $user = User::find($user);
        $user = User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user
        ]);
    }
}
