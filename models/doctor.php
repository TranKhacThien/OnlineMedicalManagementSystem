<?php

class Doctor{
    public function __constructor(){

    }
    public function __destructor(){

    }
    public static function getList($page){
        $db = DB::getInstance();
        
        $head = ($page-1)*5;
        if($page==-1){
            $req = $db->prepare("SELECT * FROM doctor");
        }else{
            $req = $db->prepare("SELECT * FROM `doctor` LIMIT " . $head . ", 5");
        }
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
      
        $list = $req->fetchAll();
        if($page != -1 ) $list['page']= $page;
        return $list;
    }
}
?>