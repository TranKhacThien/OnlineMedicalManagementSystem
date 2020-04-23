<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form style="margin-top: 100px" id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Đăng Nhập</h3>
                        <?php
                            if( isset($notification))
                                echo '<p class="text-danger">'.$notification.'</p>';
                        ?>
                        <div class="form-group">
                            <label for="username" class="text-info">Tên đăng nhập :</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Mật khẩu :</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div style="margin-top: 30px" class="row">
                            <div class = "col-md-6">
                                <input type="radio" id = "patient" name="loginType" value="patient" >
                                <label for="patient">Người khám bệnh</label>
                            </div>
                            <div class = "col-md-6">
                                <input type="radio" id = "doctor" name="loginType" value="doctor" >
                                <label for="doctor">Bác sĩ</label>
                            </div>
                        </div>
                        <div style="margin-top: 30px" class="form-group">
                            <input type='submit' name="login"  class="btn btn-info btn-md" id="login" value='Đăng nhập'>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="index.php?controller=registration&action=registration" class="text-info">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
