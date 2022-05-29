<?php

namespace Database\Seeders;

use App\Models\RequiredExpreience;
use Illuminate\Database\Seeder;

class RequiredExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequiredExpreience::truncate();

        $Experiencerequired = [
            ['experience_level' => 'below 1'],
            ['experience_level' => '1 year +'],
            ['experience_level' => '2 year +'],
            ['experience_level' => '3 year +'],
            ['experience_level' => '4 year +'],
            ['experience_level' => '5 year +'],
        ];

        foreach ($Experiencerequired as $key => $value) {
            RequiredExpreience::create($value);
        }
    }
}
