<?php

class Login{
    public function __construct()
    {

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /*
    * this function does the login process
    * returns user info in an array OR false
    */
    static public function verify($username, $password, $loginType){
        /*
        * login username and password saved in $username , $password
        * if user is logged in return user info in associative array
        * else return false
        */
        $db = DB::getInstance();
        $req = $db->prepare("SELECT ".$loginType."ID FROM " . $loginType ." WHERE " . $loginType ."LoginName ="." '". $username."' AND password = '".$password."'");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        $info  = $req->fetchAll();
        if(empty($info)){
            return false;
        }
        else{
            $_SESSION['userID'] = $info[0][$loginType.'ID'];
            return true;
        }
    }

}
?>