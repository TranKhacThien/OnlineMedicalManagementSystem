
<div style="border-radius: 0.5rem" class="container bg-light">
  <h2>Thông tin tài khoản</h2>
    <div class="col-md-6">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Câu hỏi của tôi</a>
              </li>
          </ul>
    </div>
    <div class="row">
        <div style="background: #fff; border-radius: 1rem " class="col-md-12"> 
            <div class="tab-content profile-tab" id="myTabContent">
                <div style="margin-left:10px" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php if($_SESSION['type'] == 'patient'){ ?>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Họ</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['firstName'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tên</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['lastName'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Giới tính</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['sex'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tuổi</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['age'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Cân nặng (kg)</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['weight'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Chiều cao (cm)</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['height'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>Nhóm máu</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['bloodGroup'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Số điện thoại</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['contact-no'] ?></p>
                                </div>
                            </div>
                            <div style="border-radius: 0.5rem; background: #17a2b8" class="row">
                                <div class="col-md-3">
                                    <label>địa chỉ</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data[0]['address'] ?></p>
                                </div>
                            </div>
                <?php }else{ ?>
                            <div class="row">
                                <div class="col-md-6"><label>Họ và tên</label></div>
                                <div class="col-md-6 text-left "><?php echo $data[0]['doctorName'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label>Chuyên khoa</label></div>
                                <div class="col-md-6 text-left "><?php echo $data[0]['specialization'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label>Bằng cấp chuyên môn</label></div>
                                <div class="col-md-6 text-left "><?php echo $data[0]['qualification']?></div>
                            </div>
                            <div class=row>
                                <div class="col-md-6"><label>Nơi làm việc</label></div>
                                <div class="col-md-6 text-left "><?php echo $data[0]['hospital'] ?></div>
                            </div>
                <?php } ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Your Bio</label><br/>
                            <p>Your detail description</p>
                        </div>
                    </div>
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



