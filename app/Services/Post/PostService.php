<?php

namespace App\Services\Post;

use App\Dao\Post\PostDao;
use App\Contracts\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;

class PostService implements PostServiceInterface
{
  private $postDao;

  /**
   * Class Constructor
   * @param OperatorPostDaoInterface
   * @return
   */
  public function __construct(PostDao $post_dao)
  {
    $this->postDao = $post_dao;
  }

  /**
   * Get Post List
   * @param Object
   * @return $userList
   */
  public function addPost(Request $request)
  { 
    return $this->postDao->addPost($request);
  }
}
