<?php

namespace Database\Seeders;

use App\Models\ExpreienceDuration;
use Illuminate\Database\Seeder;

class ExpreienceDurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpreienceDuration::truncate();

        $Experiencerequired = [
            ['duration' => 'below 1'],
            ['duration' => '1 year +'],
            ['duration' => '2 year +'],
            ['duration' => '3 year +'],
            ['duration' => '4 year +'],
            ['duration' => '5 year +'],
        ];

        foreach ($Experiencerequired as $key => $value) {
            ExpreienceDuration::create($value);
        }
    }
}
