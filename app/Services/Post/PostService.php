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
   * Get Post List For Admin
   * @return $post
   */
  public function adminHome()
  { 
    return $this->postDao->adminHome();
  }

  /**
   * Update Post List
   * @return $post
   */
  public function updateShow($title)
  { 
    return $this->postDao->updateShow($title);
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
  public function destroy($title)
  { 
    return $this->postDao->destroy($title);
  }

  /**
   * Delete Post List
   * @return $post
   */
  public function search(Request $request)
  {   
    return $this->postDao->search($request);
  }
}
