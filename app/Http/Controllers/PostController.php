<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index(){
        //dd('post');
        $posts= Post::with('category')->get();
        return view('posts.index',compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        $authors = Author::all();
        return view('posts.create', compact('categories','authors'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'is_published' => $request->has('is_published'),
        ]);

        $request->validate([
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'image'         => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'is_published'  => 'boolean',
            'category_id'   => 'required|exists:categories,id',
            'author_id'   => 'required|exists:authors,id',
        ]);

        try {
            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('asset-images', 'public');
            }

            Post::create([
                'title'        => $request->title,
                'content'      => $request->content,
                'image'        => $imagePath,
                'is_published' => $request->is_published ?? false,
                'category_id'  => $request->category_id,
                'author_id'    => $request->author_id,
            ]);

            return redirect()->route('posts.index')->with('success', 'Post created successfully');
        } catch (\Exception $err) {
            return redirect()->route('posts.index')->with('error', $err->getMessage());
        }
    }


    public function edit(Post $post){
        $categories = Category::all();
        $authors = Author::all();

        return view('posts.edit', compact('post', 'categories', 'authors'));
    }

    public function update(Request $request, Post $post)
    {
        $request->merge([
            'is_published' => $request->has('is_published'),
        ]);

        $request->validate([
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'image'         => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'is_published'  => 'boolean',
            'category_id'   => 'required|exists:categories,id',
            'author_id'   => 'required|exists:authors,id',
        ]);

        try {
            if ($request->hasFile('image')) {
                if ($post->image) {
                    Storage::delete('public/' . $post->image);
                }

                $imagePath = $request->file('image')->store('asset-images', 'public');
                $post->image = $imagePath;
            }

            $post->update($request->all());
            return redirect()->route('posts.index')->with('success', 'Post updated successfully');
        } catch (\Exception $err) {
            return redirect()->route('posts.index')->with('error', $err->getMessage());
        }
    }


    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }

    public function show(Post $post){
        $categories = Category::all();
        $authors = Author::all();

        return view('posts.show', compact('post', 'categories', 'authors'));
    }
}
