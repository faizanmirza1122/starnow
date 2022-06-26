<?php

namespace Database\Seeders;

use App\Models\Height;
use Illuminate\Database\Seeder;

class HeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Height::truncate();

        $heights = [
            '4.1',
            '4.2',
            '4.3',
            '4.4',
            '4.5',
            '4.6',
            '4.7',
            '4.8',
            '4.9',
            '5.0',
            '5.1',
            '5.2',
            '5.3',
            '5.4',
            '5.5',
            '5.6',
            '5.7',
            '5.8',
            '5.9',
            '6.0',
            '6.1',
            '6.2',
            '6.3',
            '6.4',
            '6.5',
            '6.6',
            '6.7',
            '6.8',
            '6.9',
            '7.0',
            '7.1',
            '7.2',
            '7.3',
            '7.4',
            '7.5',
            '7.6',
            '7.7',
            '7.8',
            '7.9',
            '8.0',
        ];

        foreach ($heights as $height) {
            \App\Models\Height::create([
                'height' => $height,
            ]);
        }
    }
}