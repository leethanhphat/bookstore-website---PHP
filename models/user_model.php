<?php

require_once("user.php");
require_once("modules/db_module.php");

class userModel
{
    public function getUserList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_users ");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new user(
                $rows["userID"],
                $rows["username"],
                $rows["password"],
                $rows["Email"],
                $rows["is_admin"],
            );

            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getuserListByQuery($query){
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_users where   ". $query."");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new user(
                $rows["userID"],
                $rows["username"],
                $rows["password"],
                $rows["Email"],
                $rows["is_admin"],
            );

            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }


    public function getUser($userID)
    {
        $allusers = $this->getUserList();
        foreach ($allusers as $user)
            if ($user->getUserID() === $userID)
                return $user;
        return null;
    }
}
