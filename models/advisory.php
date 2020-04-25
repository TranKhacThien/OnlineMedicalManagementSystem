<?php
class Post
{
  public $patientName;
  public $content;

  function __construct($patientName, $content)
  {
    $this->patientName = $patientName;
    $this->content = $content;
  }

  static function showQuestion($option)
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM posts');
    return $list;
    
    // foreach ($req->fetchAll() as $item) {
    //   $list[] = new Post($item['id'], $item['title'], $item['content']);
    // }

    // $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    //   $req->execute(array('id' => $id));
    //   $item = $req->fetch();
    //   if (isset($item['id'])) {
    //     return new Post($item['id'], $item['title'], $item['content']);
    //   }
    //   return null;
  }

  static function createQuestion($question)
  {
    $db = DB::getInstance();
    $sql = "INSERT INTO question (patientLoginName,questionTitle,questionDetail) VALUES ('". $_SESSION['username']  . "' , '" . $question['questionTitle'] . "' , '" . $question['questionDetail']." ')";
    $db->exec($sql);
    if ($db->query($sql) === TRUE) {
      // echo "New question created successfully";
      return true;
    } else {
        // echo "Error: " . $sql . "<br>" . "xxxxxxxxx" . self::isNotExist($input['userName']);
        return false;
    }
  }

}