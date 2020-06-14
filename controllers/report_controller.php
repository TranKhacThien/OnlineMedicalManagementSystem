<?php
	require_once 'controllers/base_controller.php';
	require_once 'models/report.php';
	require_once 'models/booking.php';

	class ReportController extends BaseController{
		private $input;
		private $data;
        private $result;
        function __construct()
        {
			session_start();
			if($_SESSION['type'] == 'patient'){
				// $this->data = array('schedule' => booking::schedule('patient',$_SESSION['userID'],'latest'));
				$this->data = array('schedule' => booking::schedule('patient',$_SESSION['userID'],'met'));
			}else
				$this->data = array('schedule' => booking::schedule('doctor',$_SESSION['userID'],'met'));
			$this->data['report'] = report::getData($this->data['schedule'][0]['bookingID']);
			// print_r($this->data['report']);
			$this->folder = 'pages';
        }
    	
    	function isNull(){
    		$this->input=array(
    			'bookingID'=> $_REQUEST['bookingID']  			
			);
			$this->input['type'] = isset($_REQUEST['complication']) ? 'complication' : 'reportDetail';
			$this->input[$this->input['type']] = isset($_REQUEST[$this->input['type']]) ? $_REQUEST[$this->input['type']] : '';
    		if( $this->input[$this->input['type']] == '' or $this->input['bookingID'] == '' ) 
    		{
    			return true;
    		}
    		else return false;
    	}

    	function submit(){
            	
    		if (isset($_REQUEST['complicant'])){
    			if($this->isNull()){
                $this->result = 'Bạn chưa nhập thông tin';
                
            	}

            	else {
					
            		report::submit($this->input);
            		$this->result = 'Gửi thành công';
            		
            	}
    		}
    		$this->data['result'] = $this->result;
            $this->render('report', $this->data);
    	}
	}
?>