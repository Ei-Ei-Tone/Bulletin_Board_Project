<?php

namespace App\Dao\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Models\UserList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Session;
use App\Rules\MatchOldPassword;
use DB;
use Auth;

use App\CustomClass\Pagination;

class UserDao implements UserDaoInterface
{           
  /**
    * Show the application dashboard
    *
    * @return \Illuminate\Http\Response
  */
  public function getUserList()
  {   
    $users = User::latest()->paginate(5);
    return $users;
  }

  /**
    * Show the application dashboard
    *
    * @return \Illuminate\Http\Response
  */
  public function confirmUser(Request $request)
    {  

      $users = User::create([
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
        'password'=>$request->get('password'),
        'is_admin' => $request->get('is_admin'),
        'phone' => $request->get('phone'),
        'dob' => $request->get('date'),
        'profile'=>$request->get('profile'),
        'address' => $request->get('address'),
        'created_user_id' => Auth::user()->id,
        'updated_user_id' => Auth::user()->id,
      ]);
      return $users;

      // DB::beginTransaction();
      //   try{
      //     $users = UserList::create([
      //       'user_name'=>$request->get('user_name'),
      //       'user_email'=>$request->get('user_email'),
      //       'password'=>$request->get('password'),
      //       'type' => $request->get('type'),
      //       'phone' => $request->get('phone'),
      //       'dob' => $request->get('date'),
      //       'profile'=>$request->get('profile'),
      //       'address' => $request->get('address'),
      //       'created_user_id' => Auth::user()->id
      //     ]);

      //     $login_users = [
      //       'name' => $request->get('user_name'),
      //       'email' => $request->get('user_email'),
      //       'password' => $request->get('password'),
      //       'is_admin' => $request->get('type')
      //     ];
      //     DB::table('users')->insert($login_users);
      //       DB::commit();
      //       return $users; 
      //   }catch(Exception $e){
      //       DB::rollback();
      //       return $users;
        //}
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {   
      $user = User::find($id);
      $user->deleted_user_id = auth()->user()->id;
      $user->save();
      $user->delete();
      return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showProfile($name)
    {   
        if ($user = User::where('name', $name)->first()) {
          return $user;
        }
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function showUpdateProfile($id)
    {   
        $user = User::find($id);
        return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function confirmProfile(Request $request,$id)
    {   
        $user = User::find($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->is_admin = $request->input('is_admin');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('date');
        $user->address = $request->input('address');
        $user->updated_user_id = auth()->user()->id;
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
      $user = User::find($request->id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->is_admin = $request->input('is_admin');
      $user->phone = $request->input('phone');
      $user->dob = $request->input('date');
      $user->address = $request->input('address');
      $user->updated_user_id = Auth::user()->id;

      if($request->hasfile('profile'))
      {
          $image = $request->file('profile');
          $imageName =  uniqid() . '.' . $image->getClientOriginalName();
          $image->move(public_path("images"),$imageName);
          $user->profile = $imageName;
      }
      $user->save();
      return $user;

    //  $updateuser = [
    //   'name' => $request->input('user_name'),
    //   'email' => $request->input('user_email'),
    //   'is_admin' => $request->input('type'),
    //  ];

    //  User::where('id',$request->id)->update($updateuser);
    //  DB::commit();
   
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function changePassword($id)
    {   
        $user = User::find($id);
        return $user;
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
    */
    public function addPassword(Request $request)
    {   
      $request->validate([
        'current_password' => [new MatchOldPassword]
      ]);
      
      $user = User::findOrFail($request->id);
      $user->password =  Hash::make($request->new_password);
      return $user;
        
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    public function search(Request $request)
    {   
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        $name = $request->input('name');
        $email = $request->input('email');

        $users = DB::table('user_lists')->select()
        ->where('name','LIKE', '%'.$name.'%')
        ->where('email','LIKE', '%'.$email.'%')
        ->where('created_at', '>=', $fromDate)
        ->where('created_at', '<=', $toDate)
        ->get();
        //dd($users);
       return $users;
    }
}
