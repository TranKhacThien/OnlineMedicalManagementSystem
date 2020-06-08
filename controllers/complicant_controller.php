<?php
	require_once 'controllers/base_controller.php';
	require_once 'models/complicant.php';

	class ComplicantController extends BaseController{
		private $input;
        private $result;
        function __construct()
        {
            $this->folder = 'pages';
        }
    	
    	function isNull(){
    		$this->input=array(
    			'date'=> $_REQUEST['date'],
    			'complication'=> $_REQUEST['complication']   			
    		);
    		if($this->input['complication']=='' || $this->input['date']=='' ) 
    		{
    			return true;
    		}
    		else return false;
    	}

    	function compli(){
    		/*$data = array('result' => $this->result);
            	$this->render('complicant', $data);*/
            	session_start();
            	
    		if (isset($_REQUEST['complicant'])){
    			if($this->isNull()){
                $this->result = 'Bạn chưa nhập đủ thông tin';
                
            	}

            	else {

            		complicant::compli($this->input);
            		$this->result = 'Đăng ký thành công';
            		
            	}

            	
    		}
    		$data = array('result' => $this->result);
            $this->render('complicant', $data);
    	}
	}
?>