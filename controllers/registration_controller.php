<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/registration.php';
    require_once 'models/login.php';
    class RegistrationController extends BaseController {
        private $result;
        private $input;
        function __construct()
        {
            $this->folder = 'pages';
        }
        function registration(){
            if(isset($_REQUEST['registration'])){
                if($this->isNull()){
                    $this->result = 'Bạn chưa nhập đủ thông tin';
                }elseif( registration::reg($this->input) ){
                    
                    $this->result = 'Đăng ký thành công';
                    session_start();
                    Login::verify($this->input['userName'],$this->input['password'],'patient');
                    $_SESSION['userID'] = $this->input['userID'];
                    $_SESSION['username'] = $this->input['userName'];
                    $_SESSION['type'] = 'patient';
                    header('Location: index.php?controller=pages&action=home');
                }else{
                    $this->result = 'Tên đăng nhập đã tồn tại';
                }
            }
            $data = array('result' => $this->result);
            $this->render('registration', $data);
        }
        function isNull(){
                $this->input = array(
                    'userName'=> $_REQUEST ['userName'],
                    'password'=> $_REQUEST ['password'],
                    'firstName'=> $_REQUEST['firstName'],
                    'lastName'=> $_REQUEST['lastName'],
                    'age'=> $_REQUEST['age'],
                    'contactNo'=> $_REQUEST['contactNo'],
                    'sex'=> $_REQUEST['sex'],
                    'bloodGroup'=> $_REQUEST['bloodGroup'],
                    'height'=> $_REQUEST['height'],
                    'weight'=> $_REQUEST['weight'],
                    'address'=> $_REQUEST['address'],
                    'userID'=> rand()
                );

                if( $this->input['userName'] == '' || $this->input['password'] == '' || $this->input['firstName'] == '' || $this->input['lastName'] == '' || $this->input['age'] == '' || $this->input['contactNo'] == '' || $this->input['sex']  == '' || $this->input['height']  == '' || $this->input['weight']  == '' || $this->input['address'] == '' || $this->input['bloodGroup']  == '' ){
                    return true;
                }else{
                    return false;
                }
        }
    }
    ?>