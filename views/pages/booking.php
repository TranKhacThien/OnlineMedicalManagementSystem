	<div class="container">
			<form action="" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				<h3>Đặt lịch khám</h3>
				<p class="text-danger"><?php if(isset($data['result'])) echo $data['result'] ?></p>
				<fieldset>
						<div class="booking" >
							<label for="date">Ngày khám bệnh *</label><br>
							<input class="form-control" type="date" name="date" placeholder="Ngày khám bệnh YYYY-DD-MM" style="width: 400px">
						</div>
						<div class="booking" >
							<label for="time">Giờ khám bệnh *</label><br>
							<input class="form-control" type="time" name="time" placeholder="Giờ khám bệnh HH-MM-SS" style="width: 400px" min="07:00" max="17:00">
						</div>
					<?php 
						if( !isset($_GET['doctor']) ){
					?>
						<div class="booking">
							<label for="doctor">Bác sĩ khám bệnh *</label><br>
							<select class="form-control" name="doctor" style="width: 400px">
							<?php
								$doctors = $data['doctors'];
								foreach( $doctors as $doctor){
							?>
								<option value="<?php echo $doctor['doctorLoginName']?>"><?php echo $doctor['qualification'].". ".$doctor['doctorName']. " : ". $doctor['specialization']?></option>
							<?php
								}
							?>
							</select>
						</div>
						<?php
							}elseif( isset ($data['schedule'])){
								$schedules = $data['schedule'];
						?>
							
							<label for="">Lịch khám của bác sĩ</label><br>

							
							<?php
									foreach( $schedules as $schedule){
							?>
								<div style="margin: 10px 0px 10px 50px; width:300px" class="form-control">
									<h9><?php echo $schedule['timeBooking']." _ ".$schedule['dateBooking'] ?></h9>
								</div>
							<?php
								}}
							?>
						
				</fieldset>
				<div style="margin-top: 30px" class="form-group">
                            <input type='submit' name="booking"  class="btn btn-info btn-md" id="booking" value='Xác nhận'>
                 </div>
			</form>
	</div>
