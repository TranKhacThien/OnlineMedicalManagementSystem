<!--<div id="page-content-wrapper">-->
<!--    <header>-->
<!--        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">-->
<!--            <a href="index.php" class="text-dark page-item"><img src="image/home.png" title="home" width="200" height="100"></a>-->
<!--            <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Liên hệ</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </header>-->
<!--</div>-->
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class = "card">
                <h1>Đăng Nhập</h1>
                <?php
                if( isset($notification))
                    echo '<p>'.$notification.'</p>';
                ?>

                <form action='' method='post'>
                    <div><input type='text' name='username' placeholder='Tên đăng nhập'></div>
                    <div><input type='password' name='password' placeholder='Mật khẩu'></div>
                    <div>
                        <blockquote>
                            <input type="radio" id = "patient" name="loginType" value="patient" >
                            <label for="doctor">Người khám bệnh</label>
                            <input type="radio" id = "doctor" name="loginType" value="doctor" >
                            <label for="doctor">Bác sĩ</label>
                        </blockquote>
                    </div>
                    <div>
                        <button><input style="padding: 15px 32px; border: none   display: inline-block;
                        " class="tbn bg-info text-light" type='submit' name="login" id="login" value='Đăng nhập' ></button>
                        <button ><a class="btn btn-info text-light" href="index.php?controller=registration&action=registration">Đăng ký</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>