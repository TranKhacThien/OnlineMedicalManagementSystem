<?php
 	require_once 'controllers/base_controller.php';
    require_once 'models/booking.php';
    require_once 'models/doctor.php';
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
            session_start();
            $data = array( 'doctors' => Doctor::getList(-1) );
            if(isset($_REQUEST['booking'])) {

                if($this->isNull()){
                    $this->result = 'Bạn chưa nhập đủ thông tin';
                }
                
                else{
                    booking::book($this->input);
                    $this->result = 'Bạn có lịch khám vào lúc'. $this->input['time'] .' - ' . $this->input['date'];
                }
           
            }
            $data['result'] = $this->result;
            $this->render('booking', $data);
    	}

    }
?> 