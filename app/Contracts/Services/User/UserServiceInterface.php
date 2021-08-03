<?php

namespace App\Contracts\Services\User;
use Illuminate\Http\Request;
use App\Models\User;

interface UserServiceInterface
{ 
  //get user list
  public function getUserList();

  //get user confirm
  public function confirmUser(Request $request);
  
  //Delete user 
  public function destroy($id);

  //Show user profile
  public function showProfile($id);

  //show update profile
  public function showUpdateProfile($id);
  
  //comfirm Profile
  public function confirmProfile(Request $request,$id);
  
  //add Profile to DB
  public function addProfile(Request $request);
  
  // change password
  public function changePassword($id);

  //add password to db
  public function addPassword(Request $request);
}
?>