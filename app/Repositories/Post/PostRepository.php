<?php

namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository
{
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {

        return DB::transaction(function () {
            $post = Post::with('user')
                ->withCount('comment')
                ->get();

            if ($post) {
                return $post;
            }
        });

        throw new GeneralException(__('exceptions.data.null'));
    }
}
