<?php
require_once('controllers/base_controller.php');
require_once('models/advisory.php');

class AdvisoryController extends BaseController
{
  function __construct()
  {
    $this->folder = 'advisory';
  }

  public function creQuestion()
  {
    // $posts = Post::all();
    // $data = array('posts' => $posts);
    $this->render('creQuestion', $data);
  }
  public function showQuestion()
  {
    // $post = Post::find($_GET['id']);
    // $data = array('post' => $post);
    $this->render('showQuestion', $data);
  }
}