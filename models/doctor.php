<?php

class Doctor{
    public function __constructor(){

    }
    public function __destructor(){

    }
    public static function getlist($page){
        $db = DB::getInstance();
        if( isset($page) ){
            $head = ($page-1)*5;
        }else{
            $head = 0;
        }
        $req = $db->prepare("SELECT * FROM `doctor` LIMIT " . $head . ", 5");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
      
        $list = $req->fetchAll();
        return $list;
    }
}