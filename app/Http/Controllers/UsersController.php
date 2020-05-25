<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.home",compact('users'));
    }

    public function posts(User $user)
    {
        $allPosts = $user->post;

        return view('users.posts',compact('allPosts'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect("/");
    }
}
