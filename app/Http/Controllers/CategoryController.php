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
        return view('category.index', compact('categories'));
    }

    public function create(Category $category)
    {
        Auth::user();
        $categories = Category::all();
        return view('category.create', compact('category'));
    }

    public function store(Request $request)
    {
        Auth::user();
        $data = $request->validate([
            'name' => 'required',
        ]);

        Category::create($data);
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
        ]);

        $category->update($request->all());
        return redirect()->route('category.edit')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        Auth::user();
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
