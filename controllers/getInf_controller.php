<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/getInf_models.php';
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
                $data=getInformation::GetInf($loginName,$loginType);

                $this->render('personInformation',$data);
            }
    }
