<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductInsertRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\ImportRequest;
use App\Contracts\Services\Post\PostServiceInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PostImport;
use App\Exports\PostExport;
use App\Models\Post;
use DB;

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
        $this->middleware('auth');
        $this->postInterface = $postInterface;  
    }

    public function index()
    {   
        $posts=$this->postInterface->index();
        return view('home',compact('posts'));
    }

    public function adminHome()
    {   
        $posts=$this->postInterface->adminHome();
        return view('admin',compact('posts'));
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
        $postTitle = $request->title;
        $postDescription = $request->description;
        return view('posts.confirmPost',compact('postTitle','postDescription'));
    }
    
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function updateShow($id)
    {   
        $post = $this->postInterface->updateShow($id);
        return view('posts.update',compact('post'));
    }   

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\ProductInsertRequest
    */
    public function updatePost(PostUpdateRequest $request)
    {   
        $postId = $request->id;
        $postTitle = $request->title;
        $postDescription = $request->description;
        $postStatus=$request->status;

        return view('posts.updateConfirm',compact('postId','postTitle','postDescription','postStatus'));
    }  

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function updateConfirmPost(Request $request)
    {   
        $post=$this->postInterface->updateConfirmPost($request);
        return redirect('home');
    } 

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $post=$this->postInterface->destroy($id);
        return redirect('home')->with('deleted','Post deleted successfully.');
    } 

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function importFile()
    {
        return view('posts.importFile');
    } 

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\ImportRequest
    */
    public function import(ImportRequest $request)
    {   
        Excel::import(new PostImport,$request->file);
        return redirect('/home');
    } 

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function exportFile(Request $request)
    {   
       return Excel::download(new PostExport, 'post-list.xlsx');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function search(Request $request)
    {   
        $posts=$this->postInterface->search($request);
        return view('/posts/search',compact('posts'));
    }

}