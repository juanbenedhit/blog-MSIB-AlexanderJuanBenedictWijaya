<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $categories = Category::all();
        $posts = Post::all();

        // Kirim data ke view dashboard
        return view('dashboard', compact('categories', 'posts'));
    }
}
