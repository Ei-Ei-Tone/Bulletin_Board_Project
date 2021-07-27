<?php

namespace App\Contracts\Services\Post;
use Illuminate\Http\Request;

interface PostServiceInterface
{
    // get post List
    public function addPost(Request $request);
}
 
?>