<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
