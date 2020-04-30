<?php
 	require_once 'controllers/base_controller.php';
    require_once 'models/booking.php';
    class BookingController extends base_controller{
    	private $input;
    	
    	function isNull(){
    		$this->input=array(
    			'doctorLoginName' => $_REQUEST['doctorLoginName'],
    			'Date'=> $_REQUEST['Date'],
    			'Timing'=> $_REQUEST['Timing'],
    			'requirePat'=>$_REQUEST['requirePat']
    		);
    		if($this->input['doctorLoginName']=='' || $this->input['Date']=='' || $this->input['Timing']=='' ) 
    		{
    			return true;
    		}
    		else return false;
    	}


    	function book(){
    		booking::book($this->input);
    	}

    }
?> 