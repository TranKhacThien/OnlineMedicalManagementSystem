<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/login.php';
    class LoginController extends BaseController{
        private $notification;
        public function __construct()
        {
            $this->folder = 'pages';
        }
        function login(){
            session_start();
            if(isset($_SESSION['username'])){
                header('Location: index.php?controller=pages&action=home');
            }
            elseif( isset($_REQUEST['login']) ){
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $loginType = $_REQUEST['loginType'];
                if(isset($username) and isset($password) and isset($loginType))
                {
                    if( Login::verify($username,$password,$loginType)){
                        $_SESSION['username'] = $username;

                        header('Location: index.php?controller=pages&action=home');
                    }else{
                        $this->notification = 'Tên đăng nhập hoặc mật khẩu chưa đúng';
                    }
                }else{
                    $this->notification = 'Chưa nhập đủ thông tin';
                }
            }
            $data = array('notification' => $this->notification);
            $this->render('login',$data);
        }
        function logout(){
                session_start();
                $_SESSION = array();
                session_destroy();
                header('Location: index.php');
        }
    }