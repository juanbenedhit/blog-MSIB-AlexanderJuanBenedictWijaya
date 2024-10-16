<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $posts = $user->posts()->paginate(5);
        return view('author.show', compact('user', 'posts'));
    }
}