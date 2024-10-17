<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index(){
        $authors= Author::all();
        return view('authors.index',compact('authors'));
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'     =>'required|unique:authors|string|max:255',
            'email'    => 'required|unique:authors|string',
            'phone'    => 'required|string',
            'address'  => 'nullable|string',
            'image'    => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        
        try {
            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('asset-images', 'public');
            }

            Author::create([
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'address' => $request->address,
                'image'   => $imagePath,
            ]);
            return redirect()->route('authors.index')->with('success','Author created successfully');
        }
        catch(\Exception $err){
            return redirect()->route('authors.index')->with('error',$err->getMessage());
        }
    }

    public function edit(Author $author){
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author){
        $request->validate([
            'name'     =>'required|unique:authors|string|max:255',
            'email'    => 'required|unique:authors|string',
            'phone'    => 'required|string',
            'address'  => 'nullable|string',
            'image'    => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        
        try {
            if ($request->hasFile('image')) {
                if ($author->image) {
                    Storage::delete('public/' . $author->image);
                }

                $imagePath = $request->file('image')->store('asset-images', 'public');
                $author->image = $imagePath;
            }

            $author->update($request->all());
            return redirect()->route('authors.index')->with('success', 'Author updated successfully');
        } catch (\Exception $err) {
            return redirect()->route('authors.index')->with('error', $err->getMessage());
        }
    }

    public function destroy(Author $author){
        $author->delete();
        return redirect()->route('authors.index')->with('success','Author deleted successfully');
    }

    public function show(Author $author){
        return view('authors.show', compact('author'));
    }
}
