<div class='row'>
    <div class='col-sm-1'></div>
    <div border-style: solid class='col-md-8'>  
        <form action="" class="form" method="post">
            <div class="form-group">
                    <?php
                        if( empty($data['schedule']) )
                            echo "Bạn không có lịch khám gần đây</br>";
                        else{
                    ?>
                <label for="bookingID" class="text-dark font-weight-bold">Lịch khám:</label><br>
                <select class="form-control text-info" name="bookingID" style="width: 450px" onclick="getInfo(this.value)">
                    <?php
                        $schedules = $data['schedule'];
                        foreach( $schedules as $schedule){
                    ?>
                        <option  value="<?php echo $schedule['bookingID']?>"><?php echo $schedule['dateBooking']."  ".$schedule['timeBooking'] ?></option>
                    <?php        
                        }
                    ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label class="text-dark font-weight-bold"><?php echo $_SESSION['type'] == 'patient'? 'Kết quả khám:' :'Biến chứng:'?></label><br>
                
                <textarea readonly class="form-control" rows="4" name="view" class="form-control" id="showInfo"></textarea>
            </div>
            <div class="form-group">
                <label class="text-dark font-weight-bold"><?php echo $_SESSION['type'] == 'doctor'? 'Kết quả khám bệnh:' :'Biến chứng:'?></label><br>
                
                <textarea class="form-control" rows="4" name="<?php $content =$_SESSION['type'] == 'doctor' ? 'reportDetail' : 'complication'; echo $content ?>" class="form-control"></textarea>
            </div>
            <div class="form-group text-light">
                <input class="btn btn-info btn-md" type="submit" name="complicant" value="Gửi">
            </div>
            <?php } ?>
        </form>
    </div>
</div>
<script>
    function getInfo(bookingID) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
                document.getElementById("showInfo").innerHTML = xhttp.responseText;
        };
        xhttp.open("GET", "./models/report.php?method=showData&input="+bookingID, true);
        xhttp.send();
    }
</script>
