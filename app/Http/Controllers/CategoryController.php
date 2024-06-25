<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        Auth::user();
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        Auth::user();
        return view('category.create');
    }

    public function store(Request $request)
    {
        Auth::user();
        $request->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());
        return redirect()->route('category.create')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        Auth::user();
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        Auth::user();
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,' . $category->id,
        ]);

        $category->update($request->all());
        return redirect()->route('category.edit')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        Auth::user();
        $category->delete();
        return redirect()->route('category.create')->with('success', 'Category deleted successfully.');
    }
}
