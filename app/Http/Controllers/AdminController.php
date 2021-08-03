<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\Post\PostServiceInterface;

class AdminController extends Controller
{   
    private $postInterface;
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function __construct(PostServiceInterface $postInterface)
    {
        $this->middleware('auth:admin');
        $this->postInterface = $postInterface;  
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {   
        $posts=$this->postInterface->index();
        return view('admin',compact('posts'));
    }

}
