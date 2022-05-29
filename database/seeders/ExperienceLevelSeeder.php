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
            ['experience' => 'Entry-level'],
            ['experience' => 'Intermediate'],
            ['experience' => 'Mid-level'],
            ['experience' => 'expert'],
            ['experience' => 'Professional'],
        ];

        foreach ($levels as $key => $value) {
            ExpreienceLevel::create($value);
        }
    }
}
