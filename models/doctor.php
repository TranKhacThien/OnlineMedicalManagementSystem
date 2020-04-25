<?php

class Doctor{
    public function __constructor(){

    }
    public function __destructor(){

    }
    public static function getList($page){
        $db = DB::getInstance();
        
        $head = ($page-1)*5;

        $req = $db->prepare("SELECT * FROM `doctor` LIMIT " . $head . ", 5");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
      
        $list = $req->fetchAll();
        $list['page']= $page;
        return $list;
    }
}