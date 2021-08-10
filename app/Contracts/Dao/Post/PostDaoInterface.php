<?php
    namespace App\Contracts\Dao\Post;
    use Illuminate\Http\Request;

    interface PostDaoInterface
    {   
        //post list
        public function addPost(Request $request);

        //get post list
        public function index();

        //get post list for admin
        public function adminHome();

        //update post
        public function updateShow($title);

        //update post comfirm
        public function updateConfirmPost(Request $request);

        //delete post
        public function destroy($title);

        //search by title and description
        public function search(Request $request);
    }
?>