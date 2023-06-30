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

        $categories = [
           ['name' => 'family', 'post_id'=> 1],
           ['name' => 'software','post_id'=> 2],
           ['name' => 'medicine', 'post_id'=> 3],
           ['name' => 'law', 'post_id'=> 4],
           ['name' => 'general', 'post_id'=> 5],

       ];

        foreach ($categories as $category) {
            Category::create($category);
        }



        $postsData = [
            ['title' => 'Test User 1', 'body' => 'test1@bwequiiiiidwejiooojdowjiedgygbjkqgusuiqwghduiwqdyhiuwedyeydiyhdiqwyiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiidody.com'],
            ['title' => 'Test User 2', 'body' => 'tesduqwwwwwwwwwdjjjjjjjjjjjjjjjjjwewwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwt2@body.com'],
            ['title' => 'Test User 3', 'body' => 'tesdnwqiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiit3@body.com'],
            ['title' => 'Test User 4', 'body' => 'test4jdoqwpppppddddddddddddddddwejppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp@body.com'],
            ['title' => 'Test User 5', 'body' => 'test5jdopqwwwdiiiiiiiiiiiiiiiwejwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww@body.com'],
            ['title' => 'Test User 6', 'body' => 'tesqbudwidhuqiowennnnnnnnnnnnnnnnnnnnnnnnnnnnwdoqhduhquwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwdt6@body.com'],
            ['title' => 'Test User 7', 'body' => 'tesqduwwwwwwwdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwt7@body.com'],
            ['title' => 'Test User 8', 'body' => 'tdqwiooooojjjjjjdeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeejjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjest8@body.com'],
            ['title' => 'Test User 9', 'body' => 'testdqwiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii9@body.com'],
            ['title' => 'Test User 10', 'body' => 'testdqwiojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj90@body.com'],
            ['title' => 'Test User 11', 'body' => 'tesdjiqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwt80@body.com'],
        ];

        foreach ($postsData as $postData) {
            Post::create($postData);
        }

    }
}
