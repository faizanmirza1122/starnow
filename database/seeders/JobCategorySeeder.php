<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobCategory::truncate();

        $jobCategories = [
            ['name' => 'Web Developer'],
            ['name' => 'Web Designer'],
            ['name' => 'Mobile Developer'],
            ['name' => 'Mobile Designer'],
            ['name' => 'Project Manager'],
            ['name' => 'Business Analyst'],
            ['name' => 'Sales'],
            ['name' => 'Marketing'],
            ['name' => 'HR'],
            ['name' => 'Accountant'],
            ['name' => 'Admin'],
        ];

        foreach ($jobCategories as $key => $value) {
            JobCategory::create($value);
        }
    }
}
