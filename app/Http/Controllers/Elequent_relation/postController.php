<?php

namespace App\Http\Controllers\Elequent_relation;

use App\Http\Controllers\Controller;
use App\Models\Elequent_relation\Post;

class postController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return $posts;
    }
}
