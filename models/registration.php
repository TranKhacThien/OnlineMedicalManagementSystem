<?php
    class registration{
        public function __construct()
        {
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }
        static function reg($input){
            if(self::isNotExist($input['userName']))
            {
                $db = DB::getInstance();
                $sql = "INSERT INTO patient VALUES ( '" . $input['userName'] ."' , '" . $input['password'] ."' , '". $input['firstName']. "' , '".$input['lastName'] ."' , '". $input['contactNo']."' , '". $input['address'] ."' , '".$input['age']."' , '" . $input['height'] ."' , '". $input['weight']  ."' , '" . $input['sex']."' , '". $input['bloodGroup']."' )";
                $db->exec($sql);
                if ($db->query($sql) === TRUE) {
                    // echo "New patient created successfully";
                    return true;
                } else {
                    // echo "Error: " . $sql . "<br>" . "xxxxxxxxx" . self::isNotExist($input['userName']);
                    return false;
                }
            }else{
                return false;
            }
        }
        static function isNotExist($loginName){
            $db = DB::getInstance();
            $req = $db->prepare("SELECT patientLoginName FROM patient WHERE patientLoginName = '". $loginName."'");
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $result = $req->fetchAll();
            if(empty($result))
            {
                return true;
            }
            else
            {
                return false;
            }
        }


    }

?>