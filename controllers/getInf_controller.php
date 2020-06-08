<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/getInf_models.php';
    require_once 'models/advisory.php';
    require_once 'models/booking.php';
    require_once 'models/registration.php';
    class GetInfController extends BaseController
    {
            private $notification;
            private $information;
            private $input;
            private $data;
            public function __construct(){
                $this->folder = 'pages';
                session_start();
                $loginName = $_SESSION['username'] ;
                $loginType = $_SESSION['type'];
                $loginID = $_SESSION['userID'];
                $this->information=getInformation::GetInf($loginID,$loginType);
            }
            public function __destruct(){

            }
            public function showInf(){
                if(isset($_POST['delete'])){
                    booking::delete($_POST['id']);
                }
//                print_r($this->information);
                $info=$this->information[0];
                $questions=Advisory::getQuestions('myQuestion',0);
                $schedule =booking::schedule($_SESSION['type'],$_SESSION['userID'],'');
                $this->data['info']=$info;
                $this->data['question']=$questions;
                $this->data['schedule']=$schedule;
                if(isset($_SESSION['username'])){
                    $this->render('personInformation',$this->data);
                }
                else{
                    header('Location: index.php');
                }
                
            }
            public function changeInf(){
                if(isset($_REQUEST['changeInf'])){
                    if($this->isNull()){
                        $this->notification = 'Bạn chưa nhập đủ thông tin';
                    }elseif (!registration::isNotExist($this->input['loginName'])){
                        $this->notification = 'Tên đăng nhập đã tồn tại';
                    }elseif($this->input['currentPassword'] == $this->information[0]['password']){
                        getInformation::ChangeInf($this->input);
                        $this->notification = 'Thay đổi thông tin thành công';
                    }
                    else{
                        $this->notification = 'Mật khẩu hiện tại không đúng';
                    }
                }
                if( $this->notification != 'Thay đổi thông tin thành công'){
                    $this->data = array('notification' => $this->notification);
                    $this->showInf();
                }else
                    header('Location: index.php?controller=getInf&action=showInf');

            }
            function isNull(){
                $this->input = array(
                    'loginName' => $_REQUEST['loginName'],
                    'currentPassword'=> $_REQUEST ['currentPassword'],
                    'newPassword'=> $_REQUEST ['newPassword'],
                    'firstName'=> $_REQUEST['firstName'],
                    'lastName'=> $_REQUEST['lastName'],
                    'age'=> $_REQUEST['age'],
                    'contactNo'=> $_REQUEST['contactNo'],
                    'sex'=> $_REQUEST['sex'],
                    'bloodGroup'=> $_REQUEST['bloodGroup'],
                    'height'=> $_REQUEST['height'],
                    'weight'=> $_REQUEST['weight'],
                    'address'=> $_REQUEST['address']
                );

                if( $this->input['currentPassword'] == '' || $this->input['newPassword'] == '' || $this->input['firstName'] == '' || $this->input['lastName'] == '' || $this->input['age'] == '' || $this->input['contactNo'] == '' || $this->input['sex']  == '' || $this->input['height']  == '' || $this->input['weight']  == '' || $this->input['address'] == '' || $this->input['bloodGroup']  == '' ){
                    return true;
                }else{
                    return false;
                }
        }
    }
?>