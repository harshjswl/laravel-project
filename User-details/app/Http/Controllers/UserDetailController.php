<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;

class UserDetailController extends Controller
{
    public function index()
    {
        $users = UserDetail::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_details',
            'skill' => 'required|string',
            'experience' => 'required|integer|min:0',
        ]);

        UserDetail::create($request->all());
        return redirect()->route('home')->with('success', 'User added successfully!');
    }

    public function edit($id)
    {
        $user = UserDetail::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = UserDetail::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_details,email,' . $user->id,
            'skill' => 'required|string',
            'experience' => 'required|integer|min:0',
        ]);

        $user->update($request->all());
        return redirect()->route('home')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = UserDetail::findOrFail($id);
        $user->delete();
        return redirect()->route('home')->with('success', 'User deleted successfully!');
    }
}
