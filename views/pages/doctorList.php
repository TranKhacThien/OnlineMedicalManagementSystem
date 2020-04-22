<div class= content>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <?php
                    for( $i = 0; $i < 5; $i++){
                        if( isset($data[$i]))
                            echo $_SESSION['username'];
                        echo "<div class='card' style='width: 50rem' >
                                    <div style='background-color: #ffe8a1' class='card-body row'>
                                        <div class='col-md-9'>
                                            <h2 class='card-title'>Bác sỹ ".$data[$i]['doctorName']." </h2>
                                            <p class='card-text'>Chuyên ngành :". $data[$i]['specialization']."</p>
                                            <p class='card-text'>Trình độ ".$data[$i]['qualification']."</p>
                                        </div>
                                        <div class='col-md-3'>
                                            <img style='width: 200px; height: 250px' src=".$data[$i]['avatar'].">
                                        </div>  
                                        <a href='#' class='btn btn-primary'> Đặt lịch khám </a>
                                    </div>
                                <div class='card-footer text-muted'>
                                </div>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="text-lg-center"  >
        <form action='' method='get'>
            <button class="btn-primary " id = "pagination" type="button"><a class="text-light" href="index.php?controller=doctorList&action=showList&page=1">page 1</a></button>
            <button class="btn-primary " id = "pagination"><a class="text-light" href="index.php?controller=doctorList&action=showList&page=2">page 2</a></button>
            <button class="btn-primary " id = "pagination"><a class="text-light" href="index.php?controller=doctorList&action=showList&page=2">page 3</a></button>
        </form>
    </div>
</div>


