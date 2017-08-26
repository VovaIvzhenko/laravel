<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostsSeeder::class);
    }
}
class PostsSeeder extends Seeder{
    public function run(){
        DB::table('posts')->delete();
        Post::create([
           'title' => 'First title',
           'slug' => 'first-slug',
           'excerpt' => '<b>First Post Body</b>',
           'content' => '<b>Content First Post Body</b>',
           'published' => true,
           'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
           'title' => 'Second title',
           'slug' => 'second-slug',
           'excerpt' => '<b>Second Post Body</b>',
           'content' => '<b>Content Second Post Body</b>',
           'published' => false,
           'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
           'title' => 'Third title',
           'slug' => 'third-slug',
           'excerpt' => '<b>Third Post Body</b>',
           'content' => '<b>Content Third Post Body</b>',
           'published' => false,
           'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
