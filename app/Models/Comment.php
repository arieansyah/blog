<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function post()
    {
        return $this->belongsTo(Post::class, 'user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
