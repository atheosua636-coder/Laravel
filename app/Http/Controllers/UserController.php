<?php

namespace App\Http\Controllers;

use App\Models\PosStaff;

class UserController extends Controller
{
    public function index()
    {
        $users = PosStaff::all();

        return view('users.index', compact('users'));
    }
}
