<?php
    namespace App\Contracts\Dao\Post;
    use Illuminate\Http\Request;

    interface PostDaoInterface
    {   
        //post list
        public function addPost(Request $request);

        //get post list
        public function index();

        //update post
        public function updateShow($id);

        //update post comfirm
        public function updateConfirmPost(Request $request);

        //delete post
        public function destroy($id);

        //search by title and description
        public function search(Request $request);
    }
?>