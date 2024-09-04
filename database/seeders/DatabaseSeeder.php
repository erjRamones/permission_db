<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use App\Models\User_Account;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use App\Models\Barangay; #Done
use App\Models\Branch; #Done
use App\Models\City; #Done
use App\Models\Civil_Status; #Done
use App\Models\Spouse;  #Done
use App\Models\Gender_Map; #Done
use App\Models\Country; #Done
use App\Models\Province; #Done
use App\Models\Credit_Status; #Done
use App\Models\Personality_Status_Map; #Done
use App\Models\User_Account_Status; #Done
use App\Models\Document_Map; #Done
use App\Models\Document_Permission_Map; #Done
use App\Models\Name_Type; #Done
use App\Models\Customer_Group; #Done

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $c = 100;
        $f = 0;

        $modelTypes = [
            'barangay',
            'branch',
            'city',
            'civil_status',
            'spouse',
            'gender_map',
            'country',
            'province',
            'credit_status',
            'personality_status_map',
            'user_account_status',
            'document_map',
            'document_permission_map',
            'name_type',
            'customer_group'
        ];

        while ($c > 0) {
            echo "1"; echo $f+1;
            $modeltype = $faker->randomElement($modelTypes);
            $description = $faker->sentence(10);
            echo $modeltype;

            switch ($modeltype) {
                case 'barangay':
                    Barangay::createEntry($description);
                    break;
                case 'branch':
                    Branch::createEntry($description);
                    break;
                case 'city':
                    City::createEntry($description);
                    break;
                case 'civil_status':
                    Civil_Status::createEntry($description);
                    break;
                case 'spouse':
                    Spouse::createEntry($description);
                    break;
                case 'gender_map':
                    Gender_Map::createEntry($description);
                    break;
                case 'country':
                    Country::createEntry($description);
                    break;
                case 'province':
                    Province::createEntry($description);
                    break;
                case 'credit_status':
                    Credit_Status::createEntry($description);
                    break;
                case 'personality_status_map':
                    Personality_Status_Map::createEntry($description);
                    break;
                case 'user_account_status':
                    User_Account_Status::createEntry($description);
                    break;
                case 'document_map':
                    Document_Map::createEntry($description);
                    break;
                case 'document_permission_map':
                    Document_Permission_Map::createEntry($description);
                    break;
                case 'name_type':
                    Name_Type::createEntry($description);
                    break;
                case 'customer_group':
                    Customer_Group::createEntry($description);
                    break;
                default:
                    throw new \InvalidArgumentException("Unknown model type: $modeltype");
            }

            $c--;
        }

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
