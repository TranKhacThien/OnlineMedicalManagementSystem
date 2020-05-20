<?php
 	class complicant {
 		public function __construct()
        {
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }
        static function compli($input) {
        	
        	$loginName = $_SESSION['username'] ;
            $loginType = $_SESSION['type'];
        	$db = DB::getInstance();

        	if($loginType== "patient") {
        		
                $sql = "INSERT INTO complicant (patientLoginName,complication,regDate)
                VALUES ('".$loginName."','".$input['complication']."','".$input['date']."')";
        	}
            
        }
 	}
?>