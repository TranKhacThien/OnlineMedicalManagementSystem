<?php
class Advisory
{
  function __construct()
  {

  }

  static function showQuestions($target,$page)
  {
    $list = [];
    $db = DB::getInstance();
    if( $target == 'myQuestion')
    {
        $req = $db->prepare("SELECT * FROM question WHERE ". $_SESSION['type']."LoginName = '". $_SESSION['username'] . "'");
    }
    elseif($target == 'all')
    {
      $req = $db->prepare('SELECT * FROM question WHERE answer IS NULL LIMIT '. (($page-1)*5) .' , 5');
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
    if( isset($question['doctorLoginName'])){
      $sql = "INSERT INTO question (patientLoginName,questionTitle,questionDetail,doctorLoginName) VALUES ('". $_SESSION['username']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']."' , '" .$question['doctorLoginName']. "' )";
    }else{
      $sql = "INSERT INTO question (patientLoginName,questionTitle,questionDetail) VALUES ('". $_SESSION['username']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']." ')";
    }
    $db->exec($sql);
  }

  static function answer($data)
  {
    $db =DB::getInstance();
    $sql = "UPDATE question SET answer='".$data['answer']."', doctorLoginName='".$_SESSION[username]."' WHERE questionID =".$data['id'];
    $db->exec($sql);
  }
}