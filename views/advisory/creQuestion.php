<div style="margin-left:100px" class='row'>
    <div border-style: solid class='col-md-8'>  
        <form action="" class="form" method="post">
            <h3 >Đặt câu hỏi</h3>
            
                <?php
                    if( isset( $data['notification'] ) ){
                        echo"<div>" . $data['notification'] . "</div>";
                    }
                ?>
            
            <div class="form-group">
                <label for='questionTitle' class="text-info">Chủ đề:</label><br>
                <input type="text" name="questionTitle" class="form-control">
            </div>
            <div class="form-group">
                <label for="questionDetail" class="text-info">Nội dung câu hỏi:</label><br>
                <textarea class="form-control" rows="4" name="questionDetail" class="form-control"></textarea>
            </div>
            <div class="form-group text-info">
                <input class="btn btn-info btn-md" type="submit" id="advisory" name="advisory" value="Gửi">
            </div>
        </form>
    </div>
</div>