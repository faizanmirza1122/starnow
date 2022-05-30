<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalaryRange;

class SalaryRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalaryRange::truncate();

        $salaryRanges = [
            '0-50,000',
            '50,000-100,000',
            '100,000-150,000',
            '150,000-200,000',
            '200,000-250,000',
            '250,000-300,000',
            '300,000-350,000',
            '350,000-400,000',
            '400,000-450,000',
            '450,000-500,000',
            '500,000-550,000',
            '550,000-600,000',
            '600,000-650,000',
            '650,000-700,000',
            '700,000-750,000',
            '750,000-800,000',
            '800,000-850,000',
            '850,000-900,000',
            '900,000-950,000',
            '950,000-1,000,000',
            '1,000,000 +',
        ];

        foreach ($salaryRanges as $salaryRange) {
            \App\Models\SalaryRange::create([
                'salary' => $salaryRange,
            ]);
        }
    }
}
