<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use App\Models\Worker;
use App\Utils\ClientRoles;
use App\Utils\UserType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Admin 
        User::create([
            'first_name' => 'Star',
            'last_name' => 'Now',
            'username' => 'admin',
            'email' => 'admin@starnow.com',
            'password' => Hash::make('password'),
            'type' => UserType::ADMIN,
            'phone' => '+1 (123) 456-2323',
            'gender' => 'male',
            'dob' => Carbon::parse('1995-01-01'),
            'country' => 152
        ]);

        // Client 

        $client = User::create([
            'first_name' => 'John',
            'last_name' => 'Smith',
            'username' => 'john123',
            'email' => 'client@starnow.com',
            'password' => Hash::make('password'),
            'type' => UserType::CLIENT,
            'phone' => '+1 (123) 456-1232',
            'gender' => 'male',
            'dob' => Carbon::parse('1995-01-01'),
            'country' => 152
        ]);

        Client::create([
            'user_id' => $client->id,
            'company_name' => 'Technologent',
            'website' => 'https://www.technologent.com',
            'role' => ClientRoles::PRODUCTION_COMAPNY,
        ]);


        // Worker

        $worker = User::create([
            'first_name' => 'Kyle',
            'last_name' => 'Ren',
            'username' => 'kyle123',
            'email' => 'employee@starnow.com',
            'password' => Hash::make('password'),
            'type' => UserType::WORKER,
            'phone' => '+1 (123) 456-7890',
            'gender' => 'male',
            'dob' => Carbon::parse('1995-01-01'),
            'country' => 152
        ]);

        Worker::create([
            'user_id' => $worker->id,
            'roles' => [],
        ]);
    }
}
