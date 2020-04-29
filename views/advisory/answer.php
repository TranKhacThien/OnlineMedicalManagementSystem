<div style="margin-left:100px" class='row'>
    <div border-style: solid class='col-md-8'>  
        <h4> Câu hỏi </h4>
            <?php
                if( isset( $data['notification'] ) ){
                    echo"<div>" . $data['notification'] . "</div>";
                }
            ?>
        <div class="card text-left">
            <div class="card-header">
                <h5>Tiêu đề :
                    <?php echo $data['question'][0]['questionTitle']; ?>
                <h5>
            </div>
            <div class='card-body' row='4'>
                <p>Nội dung : 
                    <?php  
                        echo $data['question'][0]['questionDetail'];
                    ?>            
                </p>
            </div>
        </div>
        <form action="" class="form" method="post">
            <div class="form-group">
                <label for="answer" class="text-dark font-weight-bold">Trả lời:</label><br>
                <textarea class="form-control" rows="4" name="answer" class="form-control"></textarea>
            </div>
            <div class="form-group text-info">
                <input class="btn btn-info btn-md" type="submit" name="submit" value="Trả lời">
            </div>
        </form>
    </div>
</div>