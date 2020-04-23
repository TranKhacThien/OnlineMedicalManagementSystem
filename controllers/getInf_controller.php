<?php
require_once('controllers/base_controller.php');
require_once('models/getinf_models.php');
 	class GetInfController extends BaseController{
 		public function __construct(){
            $this->folder = "pages";
        }
        public function __destruct(){

        }
        public function showInf(){

            $data=getInformation::GetInf();
            
            $this->render('personInformation',$data);
        }
 	}
?>