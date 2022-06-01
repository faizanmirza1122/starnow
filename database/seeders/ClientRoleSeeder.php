<?php

namespace Database\Seeders;

use App\Models\ClientRole;
use Illuminate\Database\Seeder;

class ClientRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientRole::truncate();

        $clientRoles = [
            ['name' => 'Developer'],
            ['name' => 'Designer'],
            ['name' => 'Tester'],
            ['name' => 'Project Manager'],
            ['name' => 'Business Analyst'],
            ['name' => 'Sales'],
            ['name' => 'Marketing'],
            ['name' => 'HR'],
            ['name' => 'Accountant'],
            ['name' => 'Admin'],
        ];

        foreach ($clientRoles as $key => $value) {
            ClientRole::create($value);
        }
    }
}
