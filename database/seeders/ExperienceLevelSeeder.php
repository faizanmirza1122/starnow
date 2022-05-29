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
            ['experience_level' => 'below 1'],
            ['experience_level' => '1year +'],
            ['experience_level' => '2 year +'],
            ['experience_level' => '3 year +'],
            ['experience_level' => '4 year +'],
            ['experience_level' => '5 year +'],
            ['experience_level' => 'Above'],
        ];
          
        foreach ($levels as $key => $value) {
            ExpreienceLevel::create($value);
        }
    }
    
}
