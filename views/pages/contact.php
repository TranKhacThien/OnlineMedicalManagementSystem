
<?php
	require_once '../layouts/application.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Giới thiệu</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <style>
      	body{
	font-size: auto;
	font-family: 
}
img {
	float: left;
	margin-right: : 10px;
	padding-right: 30px;
}
h3 {
	padding-top: 10px;
	padding-bottom: 17.5px;
}
a.ten-bv{
	margin-top: 0px;
	margin-bottom: 5px;
}

p {
	margin-top: 2px;
	margin-left: 5px;
	line-height: 5px;

}
button {
	display: inline-block;
	width: 141.05px;
	height: 30px;
	padding: 3px 12px 3px 12px;
	margin-left: 10px;
	margin-bottom: 8.5px;
	border: 1px solid #0066a6;
	border-radius: 3px;
}

.book {
   background-color: #0876bf;
}
button.book: hover {
	color: #fff;
}
#show01 {
	background-color: lightblue;
}
#show02 {
	background-color: lightblue;
}
      </style>
  	</head>
   <body>
 
      <div class="container mt-3">
         <ul class="list-group">
            <li class="list-group-item">

            	<img src="../../image/vinmec1.jpg" alt="">
            			<a href="",class="ten-bv"><h3>Cơ sở khám bệnh số 1</h3></a>
            			<p><i class="fa fa-map-marker" aria-hidden="true"></i>208 Nguyễn Hữu Cảnh, Phường 22, Q.Bình Thạnh, Hồ Chí Minh (cách km)</p>
            			<p><i class="fa fa-stethoscope" aria-hidden="true"></i>
						<p>Hồi sức - Cấp cứu, Gây mê - điều trị đau, Khám sức khỏe tổng quát, Tim mạch, và 4 chuyên khoa khác</p>
						<p><i class="fa fa-user-md" aria-hidden="true"></i>80 bác sĩ</p>

						
						<button class ="book"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Đăng kí khám</button>
						<button class ="contact"  onclick="myFunction()"> <i class="fa fa-phone" aria-hidden="true"></i>Liên hệ ngay</button><br>
						<div class="action-showing" id="show01" >
							<i class="fa fa-phone-square" aria-hidden="true"></i>
								Bạn có thể liên hệ với bệnh viện theo số điện thoại: <u> 3333 3333 222 22 </u>
							
						</div>
			</li>
            <li class="list-group-item">
            	<img src="../../image/vinmec2.jpg" alt="">
            			<a href="",class="ten-bv"><h3>Cơ sở khám bệnh số 2</h3></a>
            			<p><i class="fa fa-map-marker" aria-hidden="true"></i>458 Minh Khai, Q. Hai Bà Trưng. Hà Nội (cách km)</p>
            			<p><i class="fa fa-stethoscope" aria-hidden="true"></i>Đa khoa</p>
						<p><i class="fa fa-user-md" aria-hidden="true"></i>80 bác sĩ</p>
						<button class ="book"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></i>Đăng kí khám</button>
						<button class ="contact" onclick="myFunction()"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ ngay</button><br>
						<div class="action-showing" id="show02" >
							<i class="fa fa-phone-square" aria-hidden="true"></i>
								Bạn có thể liên hệ với bệnh viện theo số điện thoại: <u> 4444 4444 333 22 </u>
							
						</div>
            </li>
         </ul>
      </div>
      <div class="footer">
      	
      </div>
      <script>
							 function myFunction(){
							 	var x = document.getElementById("show01");
							        y = document.getElementById("show02");
  									if (x.style.display === "none") {
   										 x.style.display = "block";
 										} else {
   									 		x.style.display = "none";
  										}
  									if (y.style.display === "none") {
   										 y.style.display = "block";
 										} else {
   									 		y.style.display = "none";
  										}
							 }

						</script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </body>
 
</html>