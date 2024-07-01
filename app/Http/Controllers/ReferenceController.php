<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Auth::check();
        $youthReferences = Reference::where('type', 'youth')->get();
        $adultReferences = Reference::where('type', 'adult')->get();
        $otherReferences = Reference::where('type', 'other')->get();

        return view('reference.index', compact('youthReferences', 'adultReferences', 'otherReferences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reference.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auth::check();
        Reference::create($request->all());
        return redirect()->route('reference.index')->with('success', 'Reference created successfully');
    }

    public function edit(Reference $reference)
    {
        Auth::check();
        $youthReferences = Reference::where('type', 'youth')->get();
        $adultReferences = Reference::where('type', 'adult')->get();
        $otherReferences = Reference::where('type', 'other')->get();
        return view('reference.edit', compact('reference', 'youthReferences', 'adultReferences', 'otherReferences'));
    }

    public function update(Request $request, $id)
    {
        Auth::check();
        $reference = Reference::findOrFail($id);
        $reference->update($request->all());
        return redirect()->route('reference.index')->with('success', 'Reference updated successfully');
    }

    public function destroy($id)
    {
            Auth::check();
            $reference = Reference::findOrFail($id);
            $reference->delete();
    
            return redirect()->route('reference.index')->with('success', 'Reference deleted successfully');  
    }
}
