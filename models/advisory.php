<?php
class Advisory
{
  function __construct()
  {

  }

  static function getQuestions($target,$page)
  {
    $list = [];
    $db = DB::getInstance();
    if( $target == 'myQuestion')
    {
        $req = $db->prepare("SELECT * FROM question WHERE ". $_SESSION['type']."ID = '". $_SESSION['userID'] . "'");
    }
    elseif($target == 'all')
    {
      $req = $db->prepare('SELECT * FROM question WHERE doctorID IS NULL LIMIT '. (($page-1)*5) .' , 5');
    }
    else{
      $req = $db->prepare("SELECT * FROM question WHERE questionID =".$target);
    }
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $list = $req->fetchAll();
    $list['page'] = $page;
    return $list;
  
  }

  static function createQuestion($question)
  {
    $db = DB::getInstance();
    if( isset($question['questionID'])){
      $sql = "UPDATE `question` SET `questionTitle` = '". $question['questionTitle'] ."', `questionDetail` = '".$question['questionDetail']."' WHERE `questionID` =".$question['questionID'];
    }
    elseif( isset($question['doctorID'])){
      $sql = "INSERT INTO `question` (`patientID`, `questionTitle`,`questionDetail`, `doctorID`) VALUES ('". $_SESSION['userID']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']."' , '" .$question['doctorID']. "' )";
      // $sql = "INSERT INTO question (patientLoginName,questionTitle,questionDetail,doctorLoginName) VALUES ('". $_SESSION['username']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']."' , '" .$question['doctorLoginName']. "' )";
    }else{
      $sql = "INSERT INTO `question` (`patientID`,`questionTitle`,`questionDetail`) VALUES ('". $_SESSION['userID']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']." ')";
    }
    echo $sql;
    $db->exec($sql);
  }

  static function answer($data)
  {
    $db =DB::getInstance();
    $sql = "UPDATE question SET answer='".$data['answer']."', doctorID='".$_SESSION[userID]."' WHERE questionID =".$data['id'];
    $db->exec($sql);
  }
  static function deleteQuestion($id){
    $db= DB::getInstance();
    $sql = "DELETE FROM question WHERE questionID=". $id ;
    $db->exec($sql);
  }

}
?>