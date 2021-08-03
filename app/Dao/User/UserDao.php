<?php

namespace App\Dao\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Models\UserList;
use Illuminate\Http\Request;

class UserDao implements UserDaoInterface
{           
  /**
    * Show the application dashboard
    *
    * @return \Illuminate\Http\Response
  */
  public function getUserList()
  {   
    $users = UserList::latest()->paginate(5);
    return $users;
  }

  /**
    * Show the application dashboard
    *
    * @return \Illuminate\Http\Response
  */
  public function confirmUser(Request $request)
    {   
        
      $users = UserList::create([
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
        'password'=>$request->get('password'),
        'type' => $request->get('type'),
        'phone' => $request->get('phone'),
        'dob' => $request->get('date'),
        'profile'=>$request->get('profile'),
        'address' => $request->get('address')
      ]);

      return $users;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {   
      $user = UserList::find($id);
      $user->delete();
      return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showProfile($id)
    {   
        $user = UserList::find($id);
        return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showUpdateProfile($id)
    {   
        $user = UserList::find($id);
        return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function confirmProfile(Request $request,$id)
    {   
        $user = UserList::find($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->type = $request->input('type');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('date');
        $user->address = $request->input('address');

        if($request->hasfile('profile'))
        {
            $image = $request->file('profile');
            $imageName =  uniqid() . '.' . $image->getClientOriginalName();
            $image->move(public_path("images"),$imageName);
            $user->profile = $imageName;
        }
        return $user; 
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function addProfile(Request $request)
    {   
        $user = UserList::find($request->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->type = $request->input('type');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('date');
        $user->address = $request->input('address');

        if($request->hasfile('profile'))
        {
            $image = $request->file('profile');
            $imageName =  uniqid() . '.' . $image->getClientOriginalName();
            $image->move(public_path("images"),$imageName);
            $user->profile = $imageName;
        }

        $user->save();
        return $user;
    }

      /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function changePassword($id)
    {   
        $user = UserList::find($id);
        return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function addPassword(Request $request)
    {   
      $user = UserList::findOrFail($request->id);
      return $user;
    }
}
