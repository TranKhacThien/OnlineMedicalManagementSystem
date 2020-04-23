<?php
class getInformation{
  public function __constructor(){

    }

    public function __destructor(){

    }
    public static function GetInf(){
  	session_start();
                $loginName = $_SESSION['username'] ;
                $loginType = $_SESSION['type'];
                $db=DB::getInstance();

            if($loginType == "patient" ){
                $sql_get_data_patient = $db->prepare("SELECT * FROM " . $loginType ." WHERE " . $loginType ."LoginName ="." '". $loginName."'");

                $sql_get_data_patient->setFetchMode(PDO::FETCH_ASSOC);
                $sql_get_data_patient->execute();
                $info  = $sql_get_data_patient->fetchAll();
             /*   foreach ($info as $row ) {
                      $firstName = $row['firstName'];
                      $lastName = $row['lastName'];
                      $age = $row['age'];
                      $weight = $row['weight'];
                      $height = $row['height'];
                      $bloodGroup = $row['bloodGroup'];
                      $sex = $row['sex'];
                      $contact = $row['contact-no'];
                      $address = $row['address'];
                }
              */
                return $info ;
             }
    }
}
?> 
