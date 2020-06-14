
<div style="border-radius: 0.5rem" class="container bg-light">
  <h2 style="padding-top:10px">Thông tin tài khoản</h2>
    <div class="col-md-6">
          <ul class="nav nav-tabs " id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active text-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Thông tin cá nhân</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-info" id="question-tab" data-toggle="tab" href="#question" role="tab" aria-controls="question" aria-selected="false">Câu hỏi của tôi</a>
              </li>
              <li class="nav-item">
                <a href="#booking" id="booking-tab" data-toggle="tab" role="tab" aria-controls="booking" aria-selected="false" class="nav-link text-info">Lịch khám</a>
              </li>
          </ul>
    </div>
    <div class="row">
        <div style="background: #fff; border-radius: 1rem" class="col-md-12"> 
            <div class="tab-content profile-tab" id="myTabContent">
                <div  class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php if($_SESSION['type'] == 'patient'){ ?>
                                <!-- Hiển thị thông tin người dùng -->
                            <form style="margin-left:20px" id="changeInf" action="index.php?controller=getInf&action=changeInf" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
                                <fieldset>
                                    <?php
                                        if( isset($data['notification']))
                                        echo '<p>'.$data['notification'].'</p>';
                                    ?>
                                    <div class="form-group">
                                        <label for="firstName">Họ *</label>
                                        <input type="text" class="form-control" name="firstName" value="<?php echo $data['info']['firstName'] ?>">
                                    </div>

                                    <div class='form-group'>
                                        <label for="lastName">Tên *</label>
                                        <input type="text" class="form-control "name='lastName' value="<?php echo $data['info']['lastName'] ?>">
                                    </div>

                                    <div class='form-group'>
                                        <label for="sex">Giới tính *</label>
                                        <select class="form-control "name='sex'>
                                            <option value="<?php echo $data['info']['sex'] ?>"><?php echo $data['info']['sex'] ?></option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>

                                    <div class='form-group'>
                                        <label for="age">Tuổi *</label>
                                        <input type="number" class="form-control"name='age' value="<?php echo $data['info']['age'] ?>" min=0 max=150>
                                    </div>
                                    <div class='form-group'>
                                        <label for="height">Chiều cao *</label>
                                        <input type="number" class="form-control "name='height' value="<?php echo $data['info']['height'] ?>" min=0 max=250> 
                                    </div>
                                    <div class='form-group'>
                                        <label for="weight">Cân nặng *</label>
                                        <input type="number" class="form-control"name='weight' value="<?php echo $data['info']['weight'] ?>" min=0 max=300>
                                    </div>
                                    <div class='form-group'>
                                        <label for="bloodGroup">Nhóm máu *</label>
                                        <select class="form-control" name='bloodGroup'>
                                            <option value="<?php echo $data['info']['bloodGroup'] ?>"><?php echo $data['info']['bloodGroup'] ?></option>
                                            <option value="A">A</opt>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label for="contactNo">Số điện thoại *</label>
                                        <input type="tel" class="form-control"name='contactNo' value="<?php echo $data['info']['contact-no'] ?>" pattern="[0-9]{10}">
                                    </div>
                                    <div class='form-group'>
                                        <label for="address">Địa chỉ *</label>
                                        <input type="text" class="form-control "name='address' value="<?php echo $data['info']['address'] ?>">
                                    </div>
                                    <div class='form-group'>
                                        <label for="loginName">Tên đăng nhập *</label>
                                        <input type="text" class="form-control "name='loginName' value="<?php echo $data['info'][$_SESSION['type'].'LoginName'] ?>">
                                    </div>
                                    <div style="margin-bottom: 40px" class='form-group'>
                                        <label for="currentPassword">Mật khẩu hiện tại *</label>
                                        <input type='password' class="form-control " name='currentPassword' placeholder='Mật khẩu hiện tại'>
                                    </div>
                                    <div class='form-group'>
                                        <label for="newPassword">Mật khẩu mới *</label>
                                        <input type="password" class="form-control "name='newPassword' placeholder='Mật khẩu mới'>
                                    </div>

                                    <div style="margin-top:30px" class="d-flex justify-content-between align-items-center">
                                        <div class="form-group d-flex justify-content-start">
                                            <button type="submit" class="btn btn-primary"name='changeInf' value='Lưu thay đổi'>Lưu thay đổi</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                <?php }else{ ?>
                            <!-- Hiển thị thông tin bác sỹ -->
                            <div class="row bg-info">
                                <div class="col-md-6"><label>Họ và tên</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['doctorName'] ?></div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6"><label>Chuyên khoa</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['specialization'] ?></div>
                            </div>
                            <div class="row bg-info">
                                <div class="col-md-6"><label>Bằng cấp chuyên môn</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['qualification']?></div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6"><label>Nơi làm việc</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['hospital'] ?></div>
                            </div>
                <?php } ?>
                </div>
                <!-- Hiển thị danh sách câu hỏi và câu trả lời  -->
                <div class="tab-pane fade" id="question" role="tabpanel" aria-labelledby="question-tab">
                      <?php 
                          $questions = $data['question'];
                          foreach($questions as $question ){ 
                              if( isset($question['questionDetail'])){          
                      ?>
                            <div class="row">
                                <!-- <div class='col-sm-1 bg-danger'></div> -->
                                <div style="border-radius: 0.5rem; margin: 15px 40px 15px 40px" class="col-md-8 bg-info text-light">
                                    <label>Tiêu đề : <?php echo $question['questionTitle'] ?></label><br>
                                    <p>Nội dung : <?php echo $question['questionDetail'] ?></p>
                                    <?php
                                        if( !isset($question['answer']) and $_SESSION['type'] == 'patient'){
                                    ?>
                                        <a class="text-dark" href="?controller=advisory&action=creQuestion&id=<?php echo $question['questionID'] ?>">chỉnh sửa</a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php if(isset($question['answer'])){ ?>
                              <div class="row">
                                <div class="col-md"></div>
                                  <div style="border-radius: 0.5rem; margin: 15px 40px 15px 40px" class="col-md-8 bg-warning ">
                                      <p><?php echo $question['answer'] ?></p>
                                  </div>
                              </div>
                            <?php
                               }
                               elseif($_SESSION['type']=='doctor')
                               { 
                            ?>
                              <div class="row">
                                <div class="col-md"></div>
                                <div style="border-radius: 0.5rem; margin: 15px 40px 15px 40px" class="col-md-1 bg-warning text-center">
                                    <a class="text-dark" href="?controller=advisory&action=answer&id=<?php echo $question['questionID'] ?>">Trả lời</a>
                                </div>
                              </div>
                            <?php
                              }}} 
                            ?>
                </div>
                <!-- Hiển thị lịch khám  -->
                <div class="tab-pane fade" id="booking" role="tabpanel" aria-labellebly="booking-tab">
                   
                    <div class="row bg-info">
                        <div class="col-md-3"><label>Ngày</label></div>
                        <div class="col-md-3"><label>Giờ</label></div>
                        <div class="col-md-3"></div>
                    </div>
        
                    <?php 
                        $schedules = $data['schedule'];
                        foreach($schedules as $schedule ){           
                    ?>
                    <div class="row bg-light">
                        <div class="col-md-3"><?php echo $schedule['dateBooking'] ?></div>
                        <div class="col-md-3"><?php echo $schedule['timeBooking'] ?></div>
                        <?php
                            if($_SESSION['type'] == 'patient'){
                        ?>
                        <form class="row bg-light" action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $schedule['bookingID'] ?>">
                            <div class="col-md-3"><input type="submit" class="btn btn-sm text-danger" name="delete" value="Hủy lịch khám" ></input></div>
                        </form>
                        <?php } ?>
                    </div>
                        
                    <?php
                        }
                    ?>
                
                </div>
            </div>
        </div>
    </div>
</div>     