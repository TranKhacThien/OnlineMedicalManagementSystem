<div class='row'>
    <div class='col-sm-1'></div>
    <div border-style: solid class='col-md-8'>  
        <form action="" class="form" method="post">
            <h3 class='text-dark' >Kết quả
            </h3>
            <div class="form-group">
                    <?php
                        if( empty($data['schedule']) )
                            echo "Bạn không có lịch khám gần đây</br>";
                        else
                        print_r($data);

                    ?>
                <label for="bookingID" class="text-dark">Lịch khám:</label><br>
                <select class="form-control text-info" name="bookingID" style="width: 450px">
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
                <label for="complication" class="text-dark">Kết quả khám bệnh:</label><br>
                
                <textarea class="form-control" rows="4" name="complication" class="form-control"></textarea>
            </div>
            <div class="form-group text-light">
                <input class="btn btn-info btn-md" type="submit" name="complicant" value="Gửi">
            </div>
        </form>
    </div>
</div>