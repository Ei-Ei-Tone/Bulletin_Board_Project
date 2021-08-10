<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\UserList;
use App\Models\User;
use DB;
use Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Contracts\Services\User\UserServiceInterface;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\passwordFormRequest;

class UserController extends Controller
{   
    private $userInterface;

    /**
    * Create a new controller instance.
     *
    * @return void
    */
    public function __construct(UserServiceInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function getUserList()
    {   
        $users=$this->userInterface->getUserList();
        return view('user.userList',compact('users'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function createUser()
    {   
        return view('user.create');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\
    */
    public function store(UserRequest $request)
    {   
        $image = $request->file('profile');
        $imageName =  uniqid() . '.' . $image->getClientOriginalName();
        $image->move(public_path("images"),$imageName);
        
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $confirm_password = $request->password_confirmation;
        $is_admin = $request->is_admin;
        $phone = $request->phone;
        $date = $request->date;
        $profile = $imageName;
        $address = $request->address;

       return view('user/confirm' , compact('name','email','password','confirm_password','is_admin','phone','date','profile','address'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function confirmUser(Request $request)
    {    
        $users=$this->userInterface->confirmUser($request);     
        return redirect('/user/create')->with('status','Successfully Form Inserted'); 
    }
    
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {   
        $users=$this->userInterface->destroy($id);
        return redirect('/user/userList')->with('deleted','Successfully user deleted.');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showProfile($name)
    {   
        $user = $this->userInterface->showProfile($name);
        return view('user.showProfile',compact('user'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showUpdateProfile($id)
    {   
        $user = $this->userInterface->showUpdateProfile($id);
        return view('user.updateProfile',compact('user'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\UserUpdateRequest
    */
    public function confirmProfile(UserUpdateRequest $request,$id)
    {   
        $user = $this->userInterface->confirmProfile($request,$id);
        return view('user.confirmProfile',compact('user')); 
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function addProfile(Request $request)
    {   
        $user = $this->userInterface->addProfile($request);
        return view('user.showProfile',compact('user'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function changePassword($id)
    {   
        $user = $this->userInterface->changePassword($id);
        return view('user.changePassword',compact('user'));
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function addPassword(PasswordFormRequest $request)
    {   
        $user = $this->userInterface->addPassword($request);
        return view('user.showProfile',compact('user'));
    }

     /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function search(Request $request)
    {   
        $users = $this->userInterface->search($request);
        return view('/user/searchList',compact('users'));
    }
}