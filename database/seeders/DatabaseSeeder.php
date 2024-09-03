<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use App\Models\User_Account;
use App\Models\User_Account_Status;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Employee::create([
            'sss_no' => 1,
            'phic_no' => 1,
            'tin_no' => 1,
            'datetime_hired' => now(),
            'datetime_resigned' => now(),
        ]);

        User_Account_Status::create([
            'description' => 'Active',
        ]);


        User_Account::create([
            'last_name' => 'Sasas',
            'first_name' => 'Sasas',
            'middle_name' => 'Sasas',
            'email' => 'Sasas@email.com',
            'password' => Hash::make('password'),
            'datetime_registered' => now(),
            'employee_id' => 1,
            'status_id' => 1,
        ]);
    }
}
