<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\PosStaff;
use App\Models\Task;
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
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer,
            );
        }

        $posStaff = [
            ['username' => 'admin', 'full_name' => 'Alex Morgan'],
            ['username' => 'mrivera', 'full_name' => 'Mia Rivera'],
            ['username' => 'jreyes', 'full_name' => 'Jordan Reyes'],
            ['username' => 'tgarcia', 'full_name' => 'Taylor Garcia'],
            ['username' => 'kcruz', 'full_name' => 'Kai Cruz'],
        ];

        foreach ($posStaff as $staffMember) {
            PosStaff::updateOrCreate(
                ['username' => $staffMember['username']],
                $staffMember,
            );
        }

        User::updateOrCreate(['username' => 'atheo'], [
            'full_name' => 'Atheo Carl C. Sua',
            'email' => 'atheo@example.com',
        ]);

        $today = today();
        $tasks = [
            ['title' => 'Prepare the opening cash float', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Review low-stock products', 'status' => 'in_progress', 'task_date' => $today],
            ['title' => 'Update the daily sales log', 'task_date' => $today],
            ['title' => 'Reconcile yesterday’s receipts', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Clean the checkout counter', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Confirm the supplier delivery', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Print the weekly sales summary', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Review the upcoming staff schedule', 'task_date' => $today->copy()->addDays(2)],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                $task,
            );
        }
    }
}
