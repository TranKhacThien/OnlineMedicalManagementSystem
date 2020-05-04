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
        static function exist($input){
            $db = DB::getInstance();
            $req =$db->prepare("SELECT bookingID FROM booking WHERE dateBooking = '".$input['date']."' AND timeBooking BETWEEN SUBTIME('".$input['time']."','02-00') AND ADDTIME('".$input['time']."','02-00')") ;
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $list = $req->fetchAll();
            if(isset($list[0])){
                return true;
            }else
                return false;
        }

        static function schedule($type, $loginName){
            $db = DB::getInstance();
            $req = $db->prepare("SELECT * FROM booking WHERE ".$type."LoginName = '".$loginName."'");
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