<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function view($id)
    {
        $user = User::find($id);
        return (view('user_view', ['user' => $user]));
    }

    public function form()
    {
        return view('form_users');
    }

    public function create(Request $request)
    {
        // User Validation
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'required',
        ]);
        // Add User
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Redirection
        return redirect('users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('users');
        }
    }
}
