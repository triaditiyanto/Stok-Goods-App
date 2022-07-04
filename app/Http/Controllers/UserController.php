<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate();

        return view('user.lis', compact('users'));
    }
     public function destroy(User $users)
    {
        //delete post
        $users->delete();

        return redirect()->route('user.lis');
    }
}
