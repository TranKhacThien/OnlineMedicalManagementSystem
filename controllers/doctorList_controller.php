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
            $page = $_GET['page'];
            $list = Doctor::getlist($page);
            $data = $list;
            $this->render('doctorList',$data);
        }
    }