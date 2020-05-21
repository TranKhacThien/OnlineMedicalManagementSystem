<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div border-style: groove id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Đăng nhập</h3>
                            <?php
                                if( isset($data['notification']))
                                    echo "<p class='text-danger'>".$data['notification'].'</p>';
                            ?>
                            <div class="form-group">
                                <label for="username" class="text-light">Tên đăng nhập:</label><br>
                                <input type="text" name="username" id="username" value="test" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Mật khẩu:</label><br>
                                <input type="password" name="password" id="password" value="test123" class="form-control">
                            </div>
                            <div class="form-group text-light ">
                                <input type="radio" id = "patient" name="loginType" value="patient" >
                                <label for="patient">Người khám bệnh</label>
                                <input style="margin-left: 50px" type="radio" id = "doctor" name="loginType" value="doctor" >
                                <label for="doctor">Bác sĩ</label>
                            </div>
                            <div class="form-group text-info ">
                               <input class="btn btn-info btn-md" type='submit' name="login" id="login" value='Đăng nhập' >
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="index.php?controller=registration&action=registration" class="text-dark">Đăng ký</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
