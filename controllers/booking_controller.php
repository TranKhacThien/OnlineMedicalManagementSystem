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
    			'doctorID' => $_REQUEST['doctorID'],
    			'date'=> $_REQUEST['date'],
    			'time'=> $_REQUEST['time']   			
    		);
    		if($this->input['doctorID']=='' || $this->input['date']=='' || $this->input['time']=='' )
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
                else if( booking::exist($this->input)){
                    $this->result = 'Bác sĩ đã có lịch khám trong khoảng thời gian này';
                }
                else{
                    booking::book($this->input);
                    $this->result = 'Bạn có lịch khám vào lúc  '. $this->input['time'] .' - ' . $this->input['date'];
                }
           
            }
            if(isset($_GET['doctorID'])) $data['schedule'] = booking::schedule('doctor',$_GET['doctorID']);
            $data['result'] = $this->result;
            if(isset($_SESSION['username'])){
                $this->render('booking',$data);
            }
            else{
                header('Location: index.php');
            }
    	}

    }
?> 