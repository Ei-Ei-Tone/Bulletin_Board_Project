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

    public function index()
    {   
        $posts=Post::orderBy('id','desc')->paginate(5);
        return $posts;
    }

    public function updateShow($id)
    {   
        $post = Post::find($id);
        return $post;
    }

    public function updateConfirmPost(Request $request)
    { 
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = (int) $request->has('status')? true : false;
        //dd($post->status);
        $post->save();
        return $post;
    }

    public function destroy($id)
    { 
        $post = Post::find($id);
        $post->delete();
        return $post;
    }
}

?>