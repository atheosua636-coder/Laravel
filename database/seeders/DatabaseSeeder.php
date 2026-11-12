<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Mara Santos', 'email' => 'mara@example.com', 'phone' => '0917 555 0101'],
            ['full_name' => 'Luis Reyes', 'email' => 'luis@example.com', 'phone' => '0917 555 0102'],
            ['full_name' => 'Nina Cruz', 'email' => 'nina@example.com', 'phone' => '0917 555 0103'],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo@example.com', 'phone' => '0917 555 0104'],
            ['full_name' => 'Aya Mendoza', 'email' => 'aya@example.com', 'phone' => '0917 555 0105'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        $users = [
            ['username' => 'admin', 'full_name' => 'Alex Morgan'],
            ['username' => 'mrivera', 'full_name' => 'Mia Rivera'],
            ['username' => 'jreyes', 'full_name' => 'Jordan Reyes'],
            ['username' => 'tgarcia', 'full_name' => 'Taylor Garcia'],
            ['username' => 'kcruz', 'full_name' => 'Kai Cruz'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
