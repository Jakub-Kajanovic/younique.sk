<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class UserAccountController extends Controller
{
    public function index(User $user){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(User $user){
        return view('user.create', compact('user'));
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }

    public function store(User $user, Request $request){
        $data = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users',
            'password' => ['required','confirmed',Password::min(8)],
            'is_admin' => 'boolean',
        ]);

        $user = User::create($data);

        return redirect()->route('user.index', $user)->with('success', 'User created successfully');
    }

    public function update(User $user, Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)],
            'is_admin' => 'boolean',
        ]);
        $user->update($data);
        return redirect()->route('user.index', $user)->with('success', 'User updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index');
    }
}
