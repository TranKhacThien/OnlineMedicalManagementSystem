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
        	
        	$loginName = $_SESSION['username'] ;
            $loginType = $_SESSION['type'];
            $userID = $_SESSION['userID'];
        	$db = DB::getInstance();

        	if($loginType== "patient") {
        		/*$sql = "INSERT INTO booking VALUES ( '".$_SESSION['username']."','".$input['doctor']."','".$input['date']."','".$input['time']."') ";
                */
                $sql = "INSERT INTO booking (patientID,doctorID,dateBooking,timeBooking)
                VALUES ('".$userID."','".$input['doctorID']."','".$input['date']."',
                '".$input['time']."')";

        		$db->exec($sql);

        	}
            
        }
        static function exist($input){
            $db = DB::getInstance();
            $sql = "SELECT bookingID FROM booking WHERE dateBooking = '".$input['date']."' AND timeBooking BETWEEN SUBTIME('".$input['time']."','02:00') AND ADDTIME('".$input['time']."','02:00')";
            $req = $db->prepare($sql);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $list = $req->fetchAll();
            if(isset($list[0])){
                return true;
            }else
                return false;
        }

        static function schedule($type, $userID, $condition = 'filter'){
            $db = DB::getInstance();
            if($condition == 'latest')
                $sql = "SELECT * FROM `booking` WHERE ".$type."ID = '".$userID."' AND dateBooking < CURRENT_DATE ORDER BY dateBooking DESC LIMIT 1";    
            else if($condition == 'met')
                $sql = "SELECT * FROM `booking` WHERE ".$type."ID = '".$userID."' AND dateBooking < CURRENT_DATE ORDER BY dateBooking DESC";    
            else if($condition == 'patient')
                $sql = "SELECT * FROM `booking` WHERE ".$type."ID = '".$userID."' AND dateBooking > CURRENT_DATE";    
            else
                $sql = "SELECT * FROM `booking` WHERE ".$type."ID = '".$userID."' ORDER BY dateBooking DESC";
            // print_r($sql);
            $req = $db->prepare($sql);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $list = $req->fetchAll();
            return $list;
        }
        static function delete($id){
            $db= DB::getInstance();
            $sql = "DELETE FROM booking WHERE bookingID=". $id ;
            $db->exec($sql);
        }
 	}
?>
