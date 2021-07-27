<?php
    namespace App\Contracts\Dao\Post;
    use Illuminate\Http\Request;

    interface PostDaoInterface
    {   
        //get post list
        public function addPost(Request $request);
    }
?>