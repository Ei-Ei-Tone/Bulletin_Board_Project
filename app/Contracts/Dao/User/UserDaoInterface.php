<?php

namespace App\Contracts\Dao\User;
use Illuminate\Http\Request;

interface UserDaoInterface
{
  //get user list
  public function getUserList();

  //get user confirm
  public function confirmUser(Request $request);

  //Delete user 
  public function destroy($id);

  //Show user profile
  public function showProfile($name);

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

  //search by name , email, created_from and create_to
  public function search(Request $request);
}
?>