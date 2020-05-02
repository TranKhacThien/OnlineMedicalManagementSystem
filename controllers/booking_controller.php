<?php
 	require_once 'controllers/base_controller.php';
    require_once 'models/booking.php';
    class BookingController extends BaseController{
    	private $input;
        private $result;
        function __construct()
        {
            $this->folder = 'pages';
        }
    	
    	function isNull(){
    		$this->input=array(
    			'doctor' => $_REQUEST['doctor'],
    			'date'=> $_REQUEST['date'],
    			'time'=> $_REQUEST['time']   			
    		);
    		if($this->input['doctor']=='' || $this->input['date']=='' || $this->input['time']=='' ) 
    		{
    			return true;
    		}
    		else return false;
    	}


    	function book(){
            /* $data = array('result' => $this->result);
            $this->render('booking', $data);*/

            if(isset($_REQUEST['booking'])) {

            if($this->isNull()){
                $this->result = 'Bạn chưa nhập đủ thông tin';
                
                echo "XIT";
            }
            
            else{
    		booking::book($this->input);
            $this->result = 'Đăng ký thành công';
            echo "DC cua lo";
            }
           
       }
            $data = array('result' => $this->result);
            $this->render('booking', $data);
    	}

    }
?> 