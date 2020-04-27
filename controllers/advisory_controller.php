<?php
require_once('controllers/base_controller.php');
require_once('models/advisory.php');

class AdvisoryController extends BaseController
{
  function __construct()
  {
    session_start();
    $this->folder = 'advisory';
  }

  public function creQuestion()
  {
    // $posts = Post::all();
    // $data = array('posts' => $posts);
    $notification ="";
    if( isset($_REQUEST['advisory'])){
      if( $_REQUEST['questionTitle'] !='' and $_REQUEST['questionDetail'] != '' ){
        $question['questionTitle'] = $_REQUEST['questionTitle'];
        $question['questionDetail'] = $_REQUEST['questionDetail'];  
        Advisory::createQuestion($question);
        header('Location: index.php');
      }
      else{
        $notification = 'Hãy nhập đầy đủ thông tin';
      }
    }
    $data['notification'] = $notification;
    $this->render('creQuestion',$data);
  }
  public function showQuestion()
  {
    // $post = Post::find($_GET['id']);
    // $data = array('post' => $post);
    $this->render('showQuestion', $data);
  }
}