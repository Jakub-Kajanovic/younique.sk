<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Course;
use App\Models\Reference;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $otherReferences = Reference::where('type','other')->get();
        $program_pre_mladych = Course::where('title','Program pre mladých')->first();
        $program_pre_dospelych = Course::where('title','Program pre dospelých')->first();
        return view('index/index', compact('program_pre_mladych', 'program_pre_dospelych','otherReferences'));
    }

    public function about(){
        $authors = Author::all();
        return view('index/about', compact('authors'));
    }

    public function program_pre_mladych(Course $course){

        $course = Course::where('title','Program pre mladých')->first();
        return view('index/program_pre_mladych', compact('course'));
    }
    public function program_pre_dospelych(Course $course){
        $course = Course::where('title','Program pre dospelých')->first();
        return view('index/program_pre_dospelych', compact('course'));
    }

    public function blog(Request $request){
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
            return view('index.blog', compact('blogs', 'categories',));
        }

    }
}
