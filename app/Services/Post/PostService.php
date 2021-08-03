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
   * Post List
   * @return $request
   */
  public function addPost(Request $request)
  { 
    return $this->postDao->addPost($request);
  }

  /**
   * Get Post List
   * @return $post
   */
  public function index()
  { 
    return $this->postDao->index();
  }

  /**
   * Update Post List
   * @return $post
   */
  public function updateShow($id)
  { 
    return $this->postDao->updateShow($id);
  }

  /**
   * Update Post Confirm List
   * @return $post
   */
  public function updateConfirmPost(Request $request)
  { 
    return $this->postDao->updateConfirmPost($request);
  }

  /**
   * Delete Post List
   * @return $post
   */
  public function destroy($id)
  { 
    return $this->postDao->destroy($id);
  }
}
