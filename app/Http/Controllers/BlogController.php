<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->get();
        return view('blog.index', compact('blogs',));
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to create a blog.');
        }
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to create a blog.');
        }

        $data = $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $file = $request->file('image');
        $path = $file->store('public/images');
        $data['image'] = str_replace('public/', '', $path);

        $blog = Blog::create($data);

        return redirect()->route('blog.create')->with('success', 'Blog created successfully.');
    }
    public function show(Blog $blog)
    {
        $blog->load('category');
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        Auth::user(); 
        $categories = Category::all();
        return view('blog.edit', compact('blog', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        $file = $request->file('image');
        $path = $file->store('public/images');
        $data['image'] = str_replace('public/', '', $path);
        $blog->update($data);
        return redirect()->route('blog.edit', $blog->id)->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        $file_path = public_path(). '/storage/'. $blog->image;
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
