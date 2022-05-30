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
            ['experience' => 'below 1'],
            ['experience' => '1 year +'],
            ['experience' => '2 year +'],
            ['experience' => '3 year +'],
            ['experience' => '4 year +'],
            ['experience' => '5 year +'],
        ];

        foreach ($Experiencerequired as $key => $value) {
            RequiredExpreience::create($value);
        }
    }
}
