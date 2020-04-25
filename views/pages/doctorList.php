<div class= content>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <?php
                    for( $i = 0; $i < 5; $i++){
                        if( isset($data[$i]))
                        echo "
                            <div class='container'>                    
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <a href='#'>
                                            <img class='img-fluid rounded mb-3 mb-md-0' src='".$data[$i]['avatar']."' alt='' width=200>
                                        </a>
                                    </div>
                                    <div class='col-md-8'>
                                        <h3>Bác sĩ:     ".$data[$i]['doctorName']."</h3>
                                        <p>Chuyên khoa: ".$data[$i]['specialization']." </p>
                                        <p>Trình độ:    ".$data[$i]['qualification']."</p>
                                        <a class='btn btn-primary' href='#'>Đặt câu hỏi</a><br><br>
                                        <a class='btn btn-primary' href='#'>Đặt lịch khám</a>
                                    </div>
                                </div>                            
                                <hr>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </div>


    <?php
        $currentPage = $data['page'];
    
        echo"<ul class='pagination justify-content-center'>
                <li class='page-item'>
                    <a class='page-link'";
                if( $currentPage == 1){
                    echo "href='#'";
                }
                else{ 
                    echo  "href='index.php?controller=doctorList&action=showList&page=".($currentPage-1);
                }
                echo   "' aria-label='Previous'>
                        
                        <span aria-hidden='true'>&laquo;</span>
                        <span class='sr-only'>Previous</span>
                    </a>
                </li>
                <li class='page-item'>
                    <a class='page-link' href='index.php?controller=doctorList&action=showList&page=1'>1</a>
                </li>
                <li class='page-item'>
                    <a class='page-link' href='index.php?controller=doctorList&action=showList&page=2'>2</a>
                </li>
                <li class='page-item'>
                    <a class='page-link' href='index.php?controller=doctorList&action=showList&page=3'>3</a>
                </li>
                <li class='page-item'>
                    <a class='page-link'";
                if( $currentPage == 3){
                    echo "href='#";
                }
                else{
                    echo "href='index.php?controller=doctorList&action=showList&page=".($currentPage+1);
                }
                echo "' aria-label='Next'>
                    <span aria-hidden='true'>&raquo;</span>
                    <span class='sr-only'>Next</span>
                    </a>
                </li>
            </ul>";
    ?>
</div>


