<?php

namespace App\Http\Controllers\Elequent_relation;

use App\Http\Controllers\Controller;
use App\Models\Elequent_relation\Comment;

class commentController extends Controller
{
    public function comments()
    {
        $comments = Comment::where('comment_id', '<', 200)->get();
        return $comments;
        // return Comment::where('comment_id', '<=', 100)->avg('comment_id');
    }
}
