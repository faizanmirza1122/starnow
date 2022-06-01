<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        $tags = [
            ['name' => 'Singing'],
            ['name' => 'Dancing'],
            ['name' => 'Cooking'],
            ['name' => 'Driving'],
            ['name' => 'Programming'],
            ['name' => 'Painting'],
            ['name' => 'Photography'],
            ['name' => 'Gardening'],
            ['name' => 'Fishing'],
            ['name' => 'Swimming'],
            ['name' => 'Basketball'],
            ['name' => 'Football'],
            ['name' => 'Tennis'],
            ['name' => 'Volleyball'],
            ['name' => 'Chess'],
            ['name' => 'Video Games'],
            ['name' => 'Golf'],
            ['name' => 'Cricket'],
            ['name' => 'Badminton'],
            ['name' => 'Rugby'],
            ['name' => 'Hockey'],
            ['name' => 'Baseball'],
            ['name' => 'Basketball'],
            ['name' => 'Swimming'],
            ['name' => 'Tennis'],
            ['name' => 'Volleyball'],
            ['name' => 'Chess'],
            ['name' => 'Video Games'],
            ['name' => 'Golf'],
            ['name' => 'Cricket'],
            ['name' => 'Badminton'],
            ['name' => 'Rugby'],
            ['name' => 'Hockey'],
            ['name' => 'Baseball'],
            ['name' => 'Basketball'],
            ['name' => 'Swimming'],
            ['name' => 'Tennis'],
            ['name' => 'Volleyball'],
            ['name' => 'Chess'],
            ['name' => 'Video Games'],
            ['name' => 'Golf'],
            ['name' => 'Cricket'],
            ['name' => 'Badminton'],
            ['name' => 'Rugby'],
            ['name' => 'Hockey'],
        ];

        foreach ($tags as $key => $value) {
            Tag::create($value);
        }
    }
}
