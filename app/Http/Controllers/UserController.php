<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Alex Morgan', 'role' => 'Administrator'],
            ['username' => 'mrivera', 'full_name' => 'Mia Rivera', 'role' => 'Staff'],
            ['username' => 'jreyes', 'full_name' => 'Jordan Reyes', 'role' => 'Staff'],
            ['username' => 'tgarcia', 'full_name' => 'Taylor Garcia', 'role' => 'Manager'],
            ['username' => 'kcruz', 'full_name' => 'Kai Cruz', 'role' => 'Staff'],
        ];

        return view('users.index', compact('users'));
    }
}