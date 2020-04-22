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
            $page = $_GET['page'];
            $list = doctor::getlist($page);
            $data = $list;
            $this->render('doctorList',$data);
        }
    }