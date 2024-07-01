<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function index(User $user){
        Auth::user();
        return view('admin.index', compact('user'));
    }
    public function create(){
      return view('admin.create');
    }

    public function store(Request $request){
        if(!Auth::attempt($request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended('/')->with('success', 'You are logged in');
    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
