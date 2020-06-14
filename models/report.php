<?php

 	class report {
 		public function __construct()
        {
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }
        static function getData($input){
            $db = DB::getInstance();
            $sql = "SELECT * FROM report WHERE bookingID = '" . $input . "'";
            $req = $db->prepare($sql);
            $req->execute();
            $data = $req->FetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        static function submit($input) {
        	
            $db = DB::getInstance();
            $data = self::getData($input['bookingID']);
            if(empty($data)){
                $sql = "INSERT INTO report ( `bookingID`, `" . $input['type']. "`)
                        VALUES ('" . $input['bookingID'] . "','" . $input[$input['type']] ."')";
            }else{
                $sql = "UPDATE report
                    SET ".$input['type']. "= '" . $input[$input['type']] ."' 
                    WHERE bookingID = ". $input['bookingID'];
            }
            $db->exec($sql);            
            // print_r($sql);
        }
        static function showData($input){
            require_once('../connection.php');
            session_start();
            $data = self::getData($input)[0];
            $reportDetail = empty($data['reportDetail']) ? 'Chưa có kết quả khám' : $data['reportDetail'];
            $complication = empty($data['complication']) ? 'Chưa có biến chứng'   : $data['complication'];
            echo $_SESSION['type'] == 'patient' ? $reportDetail : $complication;
        }
     }
     if(isset($_REQUEST['method'])){
        if( isset($_GET['input'])){
            call_user_func('report::'.$_GET['method'],$_GET['input']);
        }else{
            call_user_func('report::'.$_GET['method']);
        }
    }
?>