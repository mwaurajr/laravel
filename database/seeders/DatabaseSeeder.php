<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */



    public function run(): void
    {

        User::factory(10)->create();

//        $categories = [
//           ['name' => 'family', 'post_id'=> 1],
//           ['name' => 'software','post_id'=> 2],
//           ['name' => 'medicine', 'post_id'=> 3],
//           ['name' => 'law', 'post_id'=> 4],
//           ['name' => 'general', 'post_id'=> 5],
//
//       ];


        $sampleData = [
            [
                'title' => 'Sample Post 1',
                'category_id' => 1,
                'content' => 'This is the content of Sample Post 1.',
            ],
            [
                'title' => 'Sample Post 2',
                'category_id' => 2,
                'content' => 'This is the content of Sample Post 2.',
            ],
            [
                'title' => 'Sample Post 3',
                'category_id' => 1,
                'content' => 'This is the content of Sample Post 3.',
            ],
            [
                'title' => 'Sample Post 4',
                'category_id' => 3,
                'content' => 'This is the content of Sample Post 4.',
            ],
            [
                'title' => 'Sample Post 5',
                'category_id' => 2,
                'content' => 'This is the content of Sample Post 5.',
            ],
        ];

        foreach ($sampleData as $data) {
            Post::create($data);
        }

    }
}
