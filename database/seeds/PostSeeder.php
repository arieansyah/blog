<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)
            ->create()
            ->each(function () {
                factory(Comment::class, 3)
                    ->create([
                        'email' => 'anonim@example.com'
                    ]);
            });;
    }
}
