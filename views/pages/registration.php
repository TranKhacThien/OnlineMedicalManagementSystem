<!-- <div class="container">
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
</div> -->
<div class="container">
	<div class="registration mx-auto d-block w-50">
		<div class="page-header text-center">
			<h1>Đăng ký</h1>
		</div>
		
		<form id="registration" action="" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<fieldset>
                <?php
                    if( isset($result))
                    echo '<p>'.$result.'</p>';
                ?>				
                <div class="form-group">
					<label for="firstName">Họ *</label>
					<input type="text" class="form-control" name='firstName' placeholder='Họ'>
				</div>
				<div class="form-group">
					<label for="lastName">Tên *</label>
					<input type="text" class="form-control" name='lastName' placeholder='Tên'>
				</div>
				<!-- <div class="form-group">
					<label for="sex">Giới tính *</label>
                     <input type="text" class="form-control" name='sex' placeholder='Giới tính'> 
                    <div class="row radio-inline">
                        <input type="Radio" name='sex' value="Nam">
                        <label for="Nam">Nam</label>
                        <input type="Radio" name='sex' value="Nữ">
                        <label for="Nam">Nữ</label>
                        <input type="radio" name='sex' value="Khác">
                        <label for="Nam">Khác</label>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="sex">Giới tính *</label>
                    <select class="form-control" id='sex' name='sex'>
                        <option value='Nam'>Nam</option>
                        <option value='Nữ'>Nữ</option>
                        <option value='Khác'>Khác</option>
                    </select>
                </div>
				<div class="form-group">
					<label for="age">Tuổi *</label>
					<input type="number" class="form-control"  name='age' placeholder='Tuổi' min="1" max="150">
				</div>
				<div class="form-group">
					<label for="height">Chiều cao *</label>
					<input type="number" class="form-control" name='height' placeholder='Chiều cao ( cm )' min="0" max="250">
				</div>
				<div class="form-group">
					<label for="weight">Cân nặng *</label>
					<input type="number" class="form-control" name='weight' placeholder='Cân nặng (kg)' min="0" max="300">
                </div>
                <div class="form-group">
                    <label for="sex">Nhóm máu *</label>
                    <select class="form-control" name="bloodGroup">
                        <option value='A'>A</option>
                        <option value='B'>B</option>
                        <option value='AB'>AB</option>
                        <option value='O'>O</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contactNo">Số điện thoại *</label>
                    <input type="tel" class="form-control" name='contactNo' placeholder='Số điện thoại'>
                </div>
                <div class="form-group">
					<label for="address">Địa chỉ *</label>
					<input type="text" class="form-control"  name='address' placeholder='Địa chỉ'>
                </div>
                <div class="form-group">
					<label for="userName">Tên đăng nhập *</label>
					<input type="text" class="form-control"  name='userName' placeholder='Tên đăng nhập'>
                </div>
                <div class="form-group">
					<label for="password">Mật khẩu *</label>
					<input type="password" class="form-control"  name='password' placeholder='Mật khẩu'>
                </div>
				<div class="d-flex justify-content-between align-items-center">
					<div style="margin-top:10px" class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary" name='registration' value='Đăng ký'>Đăng ký</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="index.php">Đăng nhập</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>