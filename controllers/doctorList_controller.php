<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/doctor.php';
    class DoctorListController extends BaseController{
        public function __construct(){
            $this->folder = "pages";
        }
        public function __destruct(){

        }
        public function showList(){
            session_start();
            
            if( !isset($_GET['page']) )
            {
                $page = 1;
            }
            else
            {
                $page = $_GET['page'];
            }
            $list = Doctor::getList($page);
            $data = $list;
            
            if(isset($_SESSION['username'])){
                $this->render('doctorList',$data);
            }
            else{
                header('Location: index.php');
            }
        }
    }
    ?>