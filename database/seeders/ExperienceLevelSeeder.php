<?php

namespace Database\Seeders;

use App\Models\ExpreienceLevel;
use Illuminate\Database\Seeder;

class ExperienceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ExpreienceLevel::truncate();

        $levels = [
            ['experience_level' => 'Entry-level'],
            ['experience_level' => 'Intermediate'],
            ['experience_level' => 'Mid-level'],
            ['experience_level' => 'Professional'],
            ['experience_level' => 'Expert'],
        ];

        foreach ($levels as $key => $value) {
            ExpreienceLevel::create($value);
        }
    }
}
