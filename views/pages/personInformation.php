
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
        <div style="background: #fff; border-radius: 1rem " class="col-md-12"> 
            <div class="tab-content profile-tab" id="myTabContent">
                <div style="margin-left:40px" class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php if($_SESSION['type'] == 'patient'){ ?>
                        <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Họ</label>
                                </div>
                                <div style="border-radius: 5rem" class="col-md-6">
                                    <p><?php echo $data['info']['firstName'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tên</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['lastName'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Giới tính</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['sex'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tuổi</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['age'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Cân nặng (kg)</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['weight'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Chiều cao (cm)</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['height'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Nhóm máu</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['bloodGroup'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Số điện thoại</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['contact-no'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>địa chỉ</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['info']['address'] ?></p>
                                </div>
                            </div>
                <?php }else{ ?>
                            <div class="row">
                                <div class="col-md-6"><label>Họ và tên</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['doctorName'] ?></div>
                            </div>
                            <div class="row bg-info">
                                <div class="col-md-6"><label>Chuyên khoa</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['specialization'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label>Bằng cấp chuyên môn</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['qualification']?></div>
                            </div>
                            <div class="row bg-info">
                                <div class="col-md-6"><label>Nơi làm việc</label></div>
                                <div class="col-md-6 text-left "><?php echo $data['info']['hospital'] ?></div>
                            </div>
                <?php } ?>
                </div>
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
                <div class="tab-pane fade" id="booking" role="tabpanel" aria-labellebly="booking-tab">
                    <div class="row">
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     