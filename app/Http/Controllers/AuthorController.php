<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index(Author $author){
        Auth::check();
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public function create()
    {
        Auth::check();
        $author = new Author();
        return view('author.create', compact('author'));
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|max:255',
        'bio' => 'required',
        'facebook' => 'required',
        'linkedin' => 'required',
        'instagram' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'short_bio' => 'required',
    ]);

    $author = new Author();
    $author->name = $data['name'];
    $author->bio = $data['bio'];
    $author->facebook = $data['facebook'];
    $author->linkedin = $data['linkedin'];
    $author->instagram = $data['instagram'];
    $author->short_bio = $data['short_bio'];

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $path = $file->store('public/images');
        $photoPath = str_replace('public/', '', $path);
        $author->photo = $photoPath;
    }

    $author->save();

    return redirect()->route('author.index')->with('success', 'Author created successfully.');
}



    public function edit($id)
    {
        Auth::check();
        $author = Author::findOrFail($id);
        return view('author.edit', ['author' => $author]);
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'bio' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_bio' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            if ($author->photo) {
                Storage::disk('public')->delete($author->photo);
            }
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = str_replace('public/', '', $path);
        }
        $author->update($data);

        return redirect()->route('author.index', $author->id)->with('success', 'Author has been successfully updated');
    }


    public function destroy(Author $author)
    {
        Auth::check();
        $author = Author::findOrFail($author->id);
        $author->delete();
        if ($author->photo) {
            $file_path = storage_path('app/public/images/' . basename($author->photo));
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        return redirect()->route('author.index')->with('success', 'Author deleted successfully.');
    }
    
}
