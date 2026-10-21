<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Mara Santos', 'email' => 'mara@example.com', 'phone' => '0917 555 0101'],
            ['full_name' => 'Luis Reyes', 'email' => 'luis@example.com', 'phone' => '0917 555 0102'],
            ['full_name' => 'Nina Cruz', 'email' => 'nina@example.com', 'phone' => '0917 555 0103'],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo@example.com', 'phone' => '0917 555 0104'],
            ['full_name' => 'Aya Mendoza', 'email' => 'aya@example.com', 'phone' => '0917 555 0105'],
        ];

        return view('customers.index', compact('customers'));
    }
}