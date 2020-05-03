<div class="container">
	<div class="registration mx-auto d-block w-50">
		<div class="page-header text-center">
			<h1>Đăng ký</h1>
		</div>
		
		<form id="member-registration" action="" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<fieldset>
                <?php
                    if( isset($result))
                    echo '<p>'.$result.'</p>';
                ?>
				<div class="form-group">
					<label for="firstName">Họ *</label>
					<input type="text" class="form-control" name="firstName" placeholder='Họ'>
				</div>

                <div class='form-group'>
                    <label for="lastName">Tên *</label>
                    <input type="text" class="form-control "name='lastName' placeholder='Tên'>
                </div>

                <div class='form-group'>
                    <label for="sex">Giới tính *</label>
                    <select class="form-control "name='sex'>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label for="lastName">Tuổi *</label>
                    <input type="number" class="form-control"name='age' placeholder='Tuổi' min=0 max=150>
                </div>
                <div class='form-group'>
                    <label for="height">Chiều cao *</label>
                    <input type="number" class="form-control "name='height' placeholder='Chiều cao ( cm )' min=0 max=250> 
                </div>
                <div class='form-group'>
                    <label for="weight">Cân nặng *</label>
                    <input type="number" class="form-control"name='weight' placeholder='Cân nặng (kg)' min=0 max=300>
                </div>
                <div class='form-group'>
                    <label for="bloodGroup">Nhóm máu *</label>
                    <select class="form-control" name='bloodGroup'>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for="contactNo">Số điện thoại *</label>
                    <input type="tel" class="form-control"name='contactNo' placeholder='012-345-6789' pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                </div>
                <div class='form-group'>
                    <label for="address">Địa chỉ *</label>
                    <input type="text" class="form-control "name='address' placeholder='Địa chỉ'>
                </div>
                <div class='form-group'>
                    <label for="userName">Tên đăng nhập *</label>
                    <input type="text" class="form-control "name='userName' placeholder='Tên đăng nhập'>
                </div>
                <div style="margin-bottom: 40px" class='form-group'>
                    <label for="password">Mật khẩu *</label>
                    <input type='Password' class="form-control " name='password' placeholder='Mật khẩu'>
                </div>






				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary"name='registration' value='Đăng ký'>Đăng ký</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="index.php">Đăng nhập</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>