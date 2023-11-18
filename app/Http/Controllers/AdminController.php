<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function list()
    {
        $users = User::latest()->paginate(1);
        return view('backend.users.list',compact('users'));
    }
}
