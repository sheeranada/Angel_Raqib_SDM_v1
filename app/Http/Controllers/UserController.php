<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('contents.user.index', compact(['user']));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('contents.user.edit',compact(['user']));
    }

    public function create()
    {
        $user = User::all();
        return view('contents.user.create', compact(['user']));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/user');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'level' => $request->level,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/user')->with('success', 'Registration success.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
