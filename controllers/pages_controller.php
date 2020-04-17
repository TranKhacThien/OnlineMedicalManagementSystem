<?php
require_once('controllers/base_controller.php');
class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
    );
    session_start();
    if(isset($_SESSION['username'])){
        $this->render('home', $data);
    }
    else{
        header('Location: index.php');
    }
  }

  public function error()
  {
    $this->render('error');
  }
}