
<div id="page-content-wrapper">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <a href="index.php" class="text-dark page-item"><img src="image/home.png" title="home" width="200" height="100"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
<div class="container">
    <div class="row">
        <div style="padding-left: 40%">

            <form class='createbox' action="" method="post">
                <h1>Create Account</h1>
                <div class='textbox'>
                    <input type='text' name='firstName' placeholder='Họ'>
                </div>
                <div class='textbox'>
                    <input type='text' name='lastName' placeholder='Tên'>
                </div>
                <div class='textbox'>
                    <input type='text' name='sex' placeholder='Giới tính'>
                </div>

                <div class='textbox'>
                    <input type='text' name='age' placeholder='Tuổi'>
                </div>
                <div class='textbox'>
                    <input type='text' name='height' placeholder='Chiều cao ( cm )'>
                </div>
                <div class='textbox'>
                    <input type='text' name='weight' placeholder='Cân nặng (kg)'>
                </div>
                <div class='textbox'>
                    <input type='text' name='bloodGroup' placeholder='Nhóm máu'>
                </div>
                <div class='textbox'>
                    <input type='text' name='contactNo' placeholder='Số điện thoại'>
                </div>
                <div class='textbox'>
                    <input type='text' name='address' placeholder='Địa chỉ'>
                </div>
                <div class='textbox'>
                    <input type='text' name='userName' placeholder='Tên đăng nhập'>
                </div>
                <div class='textbox'>
                    <input type='Password' name='password' placeholder='Mật khẩu'>
                </div>
                <div>
                    <button><input type='submit' class='btn' name='registration' value='Đăng ký'></button>
                    <button><a class="btn btn-info" href="index.php">Đã có tài khoản</a></button>
                </div>
            </form>
                <?php
                if( isset($result))
                    echo '<p>'.$result.'</p>';
                ?>
        </div>
    </div>
</div>