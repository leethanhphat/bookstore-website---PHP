<?php
class User
{
    private $userID;
    private $username;
    private $password;
    private $email;
    private $is_admin;

    public function __construct($userID, $username, $password, $email, $is_admin = 0)
    {
        $this->userID = $userID;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->is_admin = $is_admin; // // Mặc định không phải là admin
    }
    public function getUserID(){return $this->userID;}
    public function setUserID($userID){$this->userID = $userID;}
    public function getUsername()
    {   
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    // Phương thức để kiểm tra nếu người dùng là admin

    public function isAdmin()
    {
        return $this->is_admin == 1; // là Admin
    }
    // Phương thức để thiết lập quyền admin
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }
}
