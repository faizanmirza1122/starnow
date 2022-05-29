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
            ['experience' => 'Entry-level'],
            ['experience' => 'Intermediate'],
            ['experience' => 'Mid-level'],
            ['experience' => 'expert'],
            ['experience' => 'Professional'],
        ];
          
        foreach ($Experiencerequired as $key => $value) {
            RequiredExpreience::create($value);
        }
    }
}
