<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of Post one',
                'body' => 'Body of Post One',
                'min_to_read' => 2,
                'image_path' => 'Empty',
                'is_published' => false
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of Post Two',
                'body' => 'Body of Post Two',
                'min_to_read' => 3,
                'image_path' => 'Empty',
                'is_published' => false
            ]
        ];

        foreach($posts as $key => $value) 
        {
            Post::create($value);
        }
    }
}
