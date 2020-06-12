<?php
	require_once 'controllers/base_controller.php';
	require_once 'models/complicant.php';
	require_once 'models/booking.php';

	class ComplicantController extends BaseController{
		private $input;
		private $data;
        private $result;
        function __construct()
        {
			session_start();
			if($_SESSION['type'] == 'patient')
				$this->data = array('schedule' => booking::schedule('patient',$_SESSION['userID'],'latest'));
			else
				$this->data = array('schedule' => booking::schedule('doctor',$_SESSION['userID'],''));
            $this->folder = 'pages';
        }
    	
    	function isNull(){
    		$this->input=array(
    			'bookingID'=> $_REQUEST['bookingID'],
    			'complication'=> $_REQUEST['complication']   			
    		);
    		if($this->input['complication']=='' || $this->input['bookingID']=='' ) 
    		{
    			return true;
    		}
    		else return false;
    	}

    	function compli(){
    		/*$data = array('result' => $this->result);
            	$this->render('complicant', $data);*/
            	// session_start();
            	
    		if (isset($_REQUEST['complicant'])){
    			if($this->isNull()){
                $this->result = 'Bạn chưa nhập thông tin';
                
            	}

            	else {

            		complicant::compli($this->input);
            		$this->result = 'Thành công';
            		
            	}

            	
    		}
    		$this->data['result'] = $this->result;
            $this->render('complicant', $this->data);
    	}
	}
?>