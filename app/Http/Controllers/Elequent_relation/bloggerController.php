<?php

namespace App\Http\Controllers\Elequent_relation;

use App\Http\Controllers\Controller;
use App\Models\Elequent_relation\Blogger;
use App\Models\Elequent_relation\Post;
use Illuminate\Support\Facades\DB;

class bloggerController extends Controller
{
    public function bloggers()
    {
        // $bloggers = Blogger::where('blogger_type', '=', 'admin')->get();
        // $bloggers = Blogger::withCount('post')->get();
        // $bloggers = Blogger::has('post', '>=', 5)
        //     ->withCount('post')
        //     ->get();

        $bloggers = Blogger::select(DB::raw('bloggers.*, count(posts.post_owner) as posts_count'))
            ->join('posts', 'posts.post_owner', '=', 'bloggers.blogger_id')
            ->groupBy('blogger_id')
        // ->orderBy('blogger_name', 'asc')
            ->get();

        // $bloggers = Blogger::select(Blogger::raw('count(*) as blogger_count ,blogger_id'))
        //     ->groupBy('blogger_id')
        //     ->get();

        return view('relation_pages.bloggers', ['bloggers' => $bloggers]);
        //$bloggers  =DB::raw(select `bloggers`.*, (select count(*) from `posts` where `bloggers`.`blogger_id` = `posts`.`post_owner`) as `post_count` from `bloggers` where (select count(*) from `posts` where `bloggers`.`blogger_id` = `posts`.`post_owner`) >= 5);

        //return view('relation_pages.bloggers', ['bloggers' => $bloggers]);

    }

    public function bloggers_post($blogger_id)
    {
        // $posts = Post::join('bloggers', 'bloggers.blogger_id', '=', 'posts.post_owner')
        //     ->select('bloggers.blogger_id', 'posts.*')
        //     ->groupBy('bloggers.blogger_id')
        //     ->get();
        $post = Post::select('*')->where('post_owner', '=', $blogger_id)->get();
        return $post;
    }
}
