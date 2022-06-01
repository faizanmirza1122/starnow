<?php

namespace Database\Seeders;

use App\Models\WorkerRole;
use Illuminate\Database\Seeder;

class WorkerRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkerRole::truncate();
        
        $workerRoles = [
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

        foreach ($workerRoles as $key => $value) {
            WorkerRole::create($value);
        }
    }
}
