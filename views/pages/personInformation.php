
<div style="border-radius: 0.5rem" class="container bg-light">
  <h2>Thông tin tài khoản</h2>
    <div class="col-md-6">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Thông tin cá nhân</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="question-tab" data-toggle="tab" href="#question" role="tab" aria-controls="question" aria-selected="false">Câu hỏi của tôi</a>
              </li>
          </ul>
    </div>
    <div class="row">
        <div style="background: #fff; border-radius: 1rem " class="col-md-12"> 
            <div class="tab-content profile-tab" id="myTabContent">
                <div style="margin-left:10px" class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php if($_SESSION['type'] == 'patient'){ ?>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Họ</label>
                                </div>
                                <div class="col-md-6">
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
                              <div class="col-md-8">
                                <div class='col-sm-4'></div>
                                <div style="border-radius: 0.5rem; margin-bottom: 10px" class="col-md-10 bg-info text-light">
                                    <label>Tiêu đề : <?php echo $question['questionTitle'] ?></label><br>
                                    <p>Nội dung : <?php echo $question['questionDetail'] ?></p>
                                </div>
                              </div>
                            </div>
                            <?php if(isset($question['answer'])){ ?>
                            <div class="row">
                              <div class="col-md"></div>
                                <div style="border-radius: 0.5rem; margin-bottom: 10px; margin-right:10px" class="col-md-8 bg-warning ">
                                    <p><?php echo $question['answer'] ?></p>
                                </div>
                            </div>
                      <?php }}} ?>
                </div>
            </div>
        </div>
    </div>
</div>     
      
      
      <?php
    
//       if( isset($data[0]))
//         echo "
// <table >
//  <tr id='FirtName'>
//     <th>Firt Name:</th>
//     <td>".$data[0]['firstName']."</td>
//   </tr>
//   <tr id='LastName'>
//     <th>Last Name:</th>
//     <td>".$data[0]['lastName']."</td>
//   </tr>
//   <tr id='Age'>
//     <th>Age:</th>
//     <td>".$data[0]['age']."</td>
//   </tr>
//   <tr id='Weight'>
//     <th>Weight:</th>
//     <td>".$data[0]['age']."</td>
//   </tr>
//   <tr id='Height'>
//     <th>Height:</th>
//     <td>".$data[0]['height']."</td>
//   </tr>
//   <tr id='Sex'>
//     <th>Sex</th>
//     <td>".$data[0]['sex']."</td>
//   </tr>
//   <tr id='BloodGroup'>
//     <th>BloodGroup</th>
//     <td>".$data[0]['bloodGroup']."</td>
//   </tr>
//   <tr id='Contact-no'>
//     <th>Contact-no:</th>
//     <td>".$data[0]['contact-no']."</td>
//   </tr>
//   <tr id='Address'>
//     <th>Address</th>
//     <td>".$data[0]['address']."</td>
//   </tr>
// </table>
//    "; else echo"Khogn ton tai";
  ?>



