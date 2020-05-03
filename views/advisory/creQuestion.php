<div class='row'>
    <div class='col-sm-1'></div>
    <div border-style: solid class='col-md-8'>  
        <form action="" class="form" method="post">
            <h3 class='text-dark' >Đặt câu hỏi
                <?php 
                    if( isset($data[0]) ){
                        echo "cho bác sĩ ".$data[0]['doctorName'];
                    }
                ?>
            </h3>
            
                <?php
                    if( isset( $data['notification'] ) ){
                        echo"<div>" . $data['notification'] . "</div>";
                    }
                ?>
            
            <div class="form-group">
                <label for='questionTitle' class="text-dark">Chủ đề:</label><br>
                <input type="text" name="questionTitle" class="form-control">
            </div>
            <div class="form-group">
                <label for="questionDetail" class="text-dark">Nội dung câu hỏi:</label><br>
                <textarea class="form-control" rows="4" name="questionDetail" class="form-control"></textarea>
            </div>
            <div class="form-group text-light">
                <input class="btn btn-info btn-md" type="submit" name="advisory" value="Gửi">
            </div>
        </form>
    </div>
</div>