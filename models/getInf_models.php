<?php
class getInformation{
  public function __constructor(){

    }

    public function __destructor(){

    }
    public static function GetInf($loginName,$loginType){
                $db=DB::getInstance();            
                $sql_get_data_patient = $db->prepare("SELECT * FROM " . $loginType ." WHERE " . $loginType ."LoginName ="." '". $loginName."'");
                $sql_get_data_patient->setFetchMode(PDO::FETCH_ASSOC);
                $sql_get_data_patient->execute();
                $info  = $sql_get_data_patient->fetchAll();
                return $info ;
             
    }
    public static function ChangeInf($input){
        $db=DB::getInstance();
        $sql = " UPDATE `patient` SET `password` = '".$input['newPassword'] ."', `firstName` = '". $input['firstName'] ."',`lastName`='".$input['lastName']."', `contact-no` = '".$input['contactNo']."', `address` = '".$input['address']."', `height` = '".$input['height']."', `weight` = '".$input['weight']."', `sex` = '".$input['sex']."', `age`='".$input['age']."', `bloodGroup` = '".$input['bloodGroup']."' WHERE `patient`.`patientLoginName` = '".$_SESSION['username']."'";
        $db->exec($sql);
      }
}
?> 
