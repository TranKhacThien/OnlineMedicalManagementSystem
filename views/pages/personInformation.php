<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inf</title>
  <style>
  h2{
    margin-left: 350px;
    margin-top: 20px;
  }
table, th, td {
  border: 2px solid;
  border-collapse: collapse;
  margin-left:150px;
  margin-top:27px; 
}
th, td {
  padding: 5px;
  text-align: left;    
}
th{
  width: 20%;
}
table.center{
  width: 60%;
  margin :5px 10px 5px 10px;
}
</style>
</head>
<body id="">
      <h2>HO SO</h2>
      <?php
    
      if( isset($data[0]))
        echo "
<table >
 <tr id='FirtName'>
    <th>Firt Name:</th>
    <td>".$data[0]['firstName']."</td>
  </tr>
  <tr id='LastName'>
    <th>Last Name:</th>
    <td>".$data[0]['lastName']."</td>
  </tr>
  <tr id='Age'>
    <th>Age:</th>
    <td>".$data[0]['age']."</td>
  </tr>
  <tr id='Weight'>
    <th>Weight:</th>
    <td>".$data[0]['age']."</td>
  </tr>
  <tr id='Height'>
    <th>Height:</th>
    <td>".$data[0]['height']."</td>
  </tr>
  <tr id='Sex'>
    <th>Sex</th>
    <td>".$data[0]['sex']."</td>
  </tr>
  <tr id='BloodGroup'>
    <th>BloodGroup</th>
    <td>".$data[0]['bloodGroup']."</td>
  </tr>
  <tr id='Contact-no'>
    <th>Contact-no:</th>
    <td>".$data[0]['contact-no']."</td>
  </tr>
  <tr id='Address'>
    <th>Address</th>
    <td>".$data[0]['address']."</td>
  </tr>
</table>
   "; else echo"Khogn ton tai";
  ?>
</body>
</html>



