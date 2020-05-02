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
        		/*$sql = "INSERT INTO booking VALUES ( '".$_SESSION['username']."','".$input['doctor']."','".$input['date']."','".$input['time']."') ";
                */
                $sql = "INSERT INTO booking (patientLoginName,doctorLoginName,dateBooking,timeBooking)
                VALUES ('".$loginName."','".$input['doctor']."','".$input['date']."',
                '".$input['time']."')";


        		$db->exec($sql);
                


        	}
            
        }
 	}
?>