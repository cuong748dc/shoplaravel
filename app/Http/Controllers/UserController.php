<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.user', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->admin = $request->admin;
        $users->address = $request->address;
        $users->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully')
            ;
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully')
            ;
    }
}
