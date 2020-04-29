<div class= content>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <?php
                
                    for( $i = 0 ; $i < 5 ; $i++){
                      if( isset($data[$i])){  
                ?>
                    <div style= 'margin-bottom:50px' class='card text-left'>
                        <div class='card-header'>
                          <h5>Tiêu đề : 
                            <?php echo $data[$i]['questionTitle'] ?>
                          </h5>
                        </div>
                        <div class='card-body' row='4'>
                          <p class="text-truncate" row='2'>Nội dung : 
                            <?php  
                                echo $data[$i]['questionDetail']
                                // echo substr( $data[$i]['questionDetail'],  0, 201);
                                // if( strlen($data[$i]['questionDetail'])>200){
                                //       echo " . . . ";
                                // }
                            ?>
                                      
                          </p>
                          <a href='?controller=advisory&action=answer&id=<?php echo $data[$i]['questionID'] ?>'class='btn btn-primary'>Trả lời</a>
                        </div>
                        <div class='card-footer text-muted'>
                            <?php echo $data[$i]['patientLoginName'];  ?>
                        </div>
                    </div>
                <?php
                      }
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
              echo  "href='?controller=advisory&action=showQuestions&page=".($currentPage-1);
          }
          echo   "' aria-label='Previous'>
                  
                  <span aria-hidden='true'>&laquo;</span>
                  <span class='sr-only'>Previous</span>
              </a>
          </li>
          <li class='page-item'>
              <a class='page-link' href='index.php?controller=advisory&action=showQuestions&page=1'>1</a>
          </li>
          <li class='page-item'>
              <a class='page-link' href='index.php?controller=advisory&action=showQuestions&page=2'>2</a>
          </li>
          <li class='page-item'>
              <a class='page-link' href='index.php?controller=advisory&action=showQuestions&page=3'>3</a>
          </li>
          <li class='page-item'>
              <a class='page-link'";
          if( $currentPage == 3){
              echo "href='#";
          }
          else{
              echo "href='index.php?controller=advisory&action=showQuestions&page=".($currentPage+1);
          }
          echo "' aria-label='Next'>
              <span aria-hidden='true'>&raquo;</span>
              <span class='sr-only'>Next</span>
              </a>
          </li>
      </ul>";
  ?>
</div>