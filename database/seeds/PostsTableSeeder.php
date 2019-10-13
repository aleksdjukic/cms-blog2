<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'photo_id' => 5,
            'title' => 'Laravel',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'
        ]);

        Post::create([
            'user_id' => 2,
            'photo_id' => 6,
            'title' => 'Vue Js',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'
        ]);

        Post::create([
            'user_id' => 3,
            'photo_id' => 7,
            'title' => 'Angular',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'
        ]);

        Post::create([
            'user_id' => 1,
            'photo_id' => 8,
            'title' => 'PHP',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'
        ]);
    }
}
