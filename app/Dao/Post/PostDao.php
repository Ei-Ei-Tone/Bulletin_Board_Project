<?php

namespace App\Dao\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDao implements PostDaoInterface
{
    public function addPost(Request $request)
    {   
       $posts= Post::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return $posts;
    }
}

?>