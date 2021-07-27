<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertRequest;
use App\Contracts\Services\Post\PostServiceInterface;

use App\Http\Controllers\Controller;

class PostController extends Controller
{

  private $postInterface;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
 public function __construct(PostServiceInterface $postInterface)
    {

    //  $this->middleware('auth');
    $this->postInterface = $postInterface;
  }

   /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('posts.index');
    }

    /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function addPost(Request $request)
  {
    $posts = $this->postInterface->addPost($request);

    return view('posts.create', [
      'posts' => $posts,
    ]);
  }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function createPost()
    {
        return view('posts.create');
    }

    /**
     *Show the application dashboard
     *
     * @param  \Illuminate\Http\ProductInsertRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertRequest $request)
    { 
        $postTitle=$request->title;
        $postDescription = $request->description;
        return view('posts.confirmPost',compact('postTitle','postDescription'));
    }

    /**
     *Show the application dashboard
     *
     * @param  \Illuminate\Http\ProductInsertRequest  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function updatePost()
    {
        return view('posts.update');
    }   

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function updateConfirmPost()
    {
        return view('posts.updateConfirm');
    } 

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function uploadFile()
    {
        return view('posts.uploadFile');
    } 

}