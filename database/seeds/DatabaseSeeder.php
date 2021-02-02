<?php

use App\Post;
use App\User;
use App\Order;
use App\Comments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(30)->create();

        Post::create(['title' => 'My First post', 'content' => 'Content for my first post']);
        Post::create(['title' => 'My Second post', 'content' => 'Content for my second post']);
        Post::create(['title' => 'My Third post', 'content' => 'Content for my third post']);
        Post::create(['title' => 'My Fourth post', 'content' => 'Content for my fourth post']);

        Comments::create(['post_id' => 1, 'username' => 'Andre M', 'content' => 'A comment for post id 1']);
        Comments::create(['post_id' => 1, 'username' => 'Jeffrey W', 'content' => 'Another comment for the post with an id of 1']);
        Comments::create(['post_id' => 1, 'username' => 'Taylor O', 'content' => 'Yet another comment for post id 1']);
        Comments::create(['post_id' => 2, 'username' => 'John S', 'content' => 'A comment for post id 2']);
        Comments::create(['post_id' => 2, 'username' => 'Martin F', 'content' => 'Another comment for the post with an id of 2']);
        Comments::create(['post_id' => 3, 'username' => 'Robert F', 'content' => 'A comment for post id 3']);
        Comments::create(['post_id' => 3, 'username' => 'Jennifer D', 'content' => 'Another comment for the post with an id of 3']);
        Comments::create(['post_id' => 4, 'username' => 'Anne F', 'content' => 'A comment for post id 4']);
        Comments::create(['post_id' => 4, 'username' => 'Diane S', 'content' => 'Another comment for the post with an id of 4']);

        Order::create(['id' => 1, 'price' => '40']);
        Order::create(['id' => 2, 'price' => '80']);
        Order::create(['id' => 3, 'price' => '130']);
        Order::create(['id' => 4, 'price' => '22']);
    }
}
