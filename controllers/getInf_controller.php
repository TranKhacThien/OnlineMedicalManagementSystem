<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/getInf_models.php';
    require_once 'models/advisory.php';
    class GetInfController extends BaseController
    {
            public function __construct(){
                $this->folder = 'pages';
            }
            public function __destruct(){

            }
            public function showInf(){
                session_start();
                $loginName = $_SESSION['username'] ;
                $loginType = $_SESSION['type'];
                $info=getInformation::GetInf($loginName,$loginType);
                $questions=Advisory::showQuestions('myQuestion',0);
                $data['info']=$info[0];
                $data['question']=$questions;
                $this->render('personInformation',$data);
            }
    }
