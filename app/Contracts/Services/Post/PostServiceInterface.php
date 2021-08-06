<?php

namespace App\Contracts\Services\Post;
use Illuminate\Http\Request;
use App\Models\Post;

interface PostServiceInterface
{
    //post List
    public function addPost(Request $request);

    //get post list
    public function index();

    //get post list for admin
    public function adminHome();

    //update post
    public function updateShow($id);

    //update post confirm
    public function updateConfirmPost(Request $request);

    //delete post
    public function destroy($id);

    //search by title and description
    public function search(Request $request);
}
 
?>