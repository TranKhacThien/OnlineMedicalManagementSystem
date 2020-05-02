
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BOOKING</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://onlinemedicalmanagementsystem.herokuapp.com/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>

	<div class="container">
			<form action="" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
				<fieldset>
						<div class="booking" >
							<label for="date">Ngày khám bệnh *</label><br>
							<input  type="date" name="date" placeholder="Ngày khám bệnh YYYY-DD-MM" style="width: 400px">
						</div>
						<div class="booking" >
							<label for="time">Giờ khám bệnh *</label><br>
							<input  type="time" name="time" placeholder="Giờ khám bệnh HH-MM-SS" style="width: 400px">
						</div>
						<div class="booking" >
							<label for="doctor">Bác sĩ khám bệnh *</label><br>
							<input type="text" name="doctor" placeholder="doctorLoginName" style="width: 400px">
						</div>
				</fieldset>
				<div style="margin-top: 30px" class="form-group">
                            <input type='submit' name="booking"  class="btn btn-info btn-md" id="booking" value='BOOKING'>
                 </div>
			</form>
	</div>
</body>
</html>