<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index/index');
    }

    public function about(){
        return view('index/about');
    }

    public function program_pre_mladych(){
        return view('index/program_pre_mladych');
    }
    public function program_pre_dospelych(){
        return view('index/program_pre_dospelych');
    }

    public function blog(Request $request)
        {
            $categoryId = $request->query('category_id');
            
            if ($categoryId) {
                $blogs = Blog::with('category')
                            ->where('category_id', $categoryId)
                            ->orderByDesc('updated_at')
                            ->get();
            } else {
                $blogs = Blog::with('category')
                            ->orderByDesc('updated_at')
                            ->get();
            }

            $categories = Category::all();
            
            return view('index.blog', compact('blogs', 'categories'));
        }
  
}
