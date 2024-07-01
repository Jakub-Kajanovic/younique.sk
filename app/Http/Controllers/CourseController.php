<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    

    public function index(Course $course)
    {
        Auth::check();
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('course.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auth::check();
        $data = $request->validate([
            'title' => 'max:255|unique:courses|required',
            'description' => 'nullable',
            'price' => 'required',
        ]);
        
        $course = Course::create($data);
        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        Auth::check();
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        Auth::check();
        $data = $request->validate([
            'title' => 'max:255|required',
            'description' => 'nullable',
            'price' => 'required',
        ]);

        $course->update($data);
        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        Auth::check();
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }
}
