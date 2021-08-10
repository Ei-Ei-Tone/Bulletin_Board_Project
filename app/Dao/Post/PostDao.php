<?php

namespace App\Dao\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use Auth;

use App\CustomClass\Pagination;

class PostDao implements PostDaoInterface
{
    public function addPost(Request $request)
    {  
       $posts= Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'created_user_id' => Auth::user()->id,
            'updated_user_id' => Auth::user()->id,
        ]);

        return $posts;
    }

    public function index()
    {   
        //$posts = Post::latest()->paginate(5);
        $results = DB::table('posts')
        ->join('users','posts.created_user_id','users.id')
        ->where('posts.deleted_at', '=' , null)
        ->get();
        $posts = Pagination::paginate($results,5);
        return $posts;
    }

    public function adminHome()
    {   
        //$posts = Post::latest()->paginate(5);
        $results = DB::table('posts')
        ->join('users','posts.created_user_id','users.id')
        ->where('posts.deleted_at', '=' , null)
        ->get();
        $posts = Pagination::paginate($results,5);
        return $posts;
    }

    public function updateShow($title)
    {   
        if ($post = Post::where('title', $title)->first()) {
          return $post;  
        }
    }

    public function updateConfirmPost(Request $request)
    { 
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = (int) $request->has('status')? true : false;
        $post->updated_user_id = auth()->user()->id;
        $post->save();
        return $post;
    }

    public function destroy($title)
    { 
        if ($post = Post::where('title', $title)->first()) 
        {
            $post->deleted_user_id = Auth::user()->id;
            $post->save();
            $post->delete();
            return $post;
        }
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function search(Request $request)
    {   
        $search_data = $request->input('search_data');

        $posts=DB::table('posts')
        ->join('users','posts.created_user_id','users.id')
        ->select()
        ->where('title','LIKE','%'.$search_data.'%')
        ->orwhere('description','LIKE','%'.$search_data.'%')
        ->get();
        return $posts;
    }

}

?>