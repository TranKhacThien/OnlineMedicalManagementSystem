<?php
require_once 'controllers/base_controller.php';
require_once 'models/getInf_models.php';
require_once 'models/advisory.php';

class AdvisoryController extends BaseController
{
  function __construct()
  {
    session_start();
    $this->folder = 'advisory';
  }

  public function creQuestion()
  {
    $notification ="";
    if( isset($_GET['doctorID'])){
      $question['doctorID'] = $_GET['doctorID'];
      $data = getInformation::GetInf($_GET['doctorID'],'doctor');
    }
    if( isset($_GET['id'])){
      $data['question'] = Advisory::getQuestions($_GET['id'],0)[0];
      $question['questionID'] = $_GET['id'];
    }
    if( isset($_REQUEST['advisory'])){
      if($_REQUEST['advisory'] == 'Xóa câu hỏi'){
        Advisory::deleteQuestion($question['questionID']);
        header('Location: index.php?controller=getInf&action=showInf');
      }
      elseif( $_REQUEST['questionTitle'] !='' and $_REQUEST['questionDetail'] != '' ){
        $question['questionTitle'] = $_REQUEST['questionTitle'];
        $question['questionDetail'] = $_REQUEST['questionDetail'];
        Advisory::createQuestion($question);
        if( isset($_GET['doctorID'])){ 
          header('Location: index.php?controller=doctorList&action=showList');
        }else{
          header('Location: index.php');
        }
      }
      else{
        $notification = 'Hãy nhập đầy đủ thông tin';
      }
    }
    $data['notification'] = $notification;
    if(isset($_SESSION['username'])){
        $this->render('creQuestion',$data);
    }
    else{
        header('Location: index.php');
    }
   
  }
  public function showQuestions() 
  {// xem các câu hỏi chưa được trả lời 
    if(!isset($_GET['page'])){
      $page = 1;
    }
    else{
      $page = $_GET['page'];
    }
    $data = Advisory::getQuestions('all',$page);
    $this->render('showQuestions', $data);
  }
  // public function showMyQuestions() // xem các câu hỏi của mình 
  // {
  //     $data = Advisory::getQuestions('myQuestion');
  //     return $data;
  // }
  public function answer()
  {
      if($_SESSION['type'] == 'doctor'){
        $data['id'] = $_GET['id'];
        if( isset($_POST['submit'])){
          $data['answer'] = $_POST['answer'];
          Advisory::answer($data);
          header('Location: index.php?controller=advisory&action=showQuestions');
        }
        $id = $data['id'];
        $data['question']=Advisory::getQuestions($id,0);
          if(isset($_SESSION['username'])){
              $this->render('answer',$data);
          }
          else{
              header('Location: index.php');
          }
        }else{
          header('Location: index.php');
        }
  }
}
?>