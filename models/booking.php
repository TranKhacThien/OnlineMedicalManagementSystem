<?php
 	class booking {
 		public function __construct()
        {
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }
        static function book($input) {
        	session_start();
        	$loginName = $_SESSION['username'] ;
            $loginType = $_SESSION['type'];
        	$db = DB::getInstance();

        	if($loginType== "patient") {
        		$sql = "INSERT INTO booking VALUES ( '".$input['patientLoginName']."','".$input['doctorLoginName']."','".$input['Date']."','".$input['TimeBooking']."','".$input['requirePat']."') ";
        		$db->exec($sql);
        	}

        }
 	}
?>