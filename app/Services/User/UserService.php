<?php

namespace App\Services\User;
use App\Dao\User\UserDao;
use App\Contracts\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface
{
  private $userDao;

  /**
   * Class Constructor
   * @param OperatorUserDaoInterface
   * @return
   */
  public function __construct(UserDao $userDao)
  {
    $this->userDao = $userDao;
  }
 
  /**
   * Get User List
   * @param Object
   * @return $userList
   */
    public function getUserList()
    {
      return $this->userDao->getUserList();
    }

  /**
   * Confirm User List
   * @param Object
   * @return $userList
   */
  public function confirmUser(Request $request)
  {
    return $this->userDao->confirmUser($request);
  }

  /**
   * Destroy User 
   * @param Object
   * @return $userList
   */ 
  public function destroy($id)
  {
    return $this->userDao->destroy($id);
  }

    /**
   * Destroy User 
   * @param Object
   * @return $userList
   */ 
  public function showProfile($name)
    {
      return $this->userDao->showProfile($name);
    }

  /**
   * Destroy User 
   * @param Object
   * @return $userList
   */ 
    public function showUpdateProfile($id)
    {
      return $this->userDao->showUpdateProfile($id);
    }
  
  /**
   * Destroy User 
   * @param Object
   * @return $userList
   */ 
    public function confirmProfile(Request $request,$id)
    {
      return $this->userDao->confirmProfile($request,$id);
    }

    /**
   * Destroy User 
   * @param Object
   * @return $userList
   */ 
    public function addProfile(Request $request)
    {
      return $this->userDao->addProfile($request);
    }

    /**
   * change password 
   * @param $id
   * @return $user
   */ 
    public function changePassword($id)
    {   
        return $this->userDao->changePassword($id);
    }

  /**
   * add password 
   * @param $request
   * @return $user
   */ 
    public function addPassword(Request $request)
    {   
      return $this->userDao->addPassword($request);
    }

  /**
   * add password 
   * @param $request
   * @return $user
  */ 
  public function search(Request $request)
  {   
    return  $this->userDao->search($request);
  }

}
