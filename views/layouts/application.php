<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HMS</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://onlinemedicalmanagementsystem.herokuapp.com/css/simple-sidebar.css" rel="stylesheet">
</head>
    <?php
        if( isset($_SESSION['username'])){
    ?>
            <body style="background: url('image/background.jpg') no-repeat center center fixed" >
    <?php
        }else{
    ?>
            <body style="background: url('image/background3.jpg') no-repeat center center fixed" >
    <?php        
        }
    ?>
    <!-- <body style="background-color:powderblue;"> -->
    <body style="background: url('image/background3.jpg') no-repeat center center fixed" >
        <div class="d-flex" id="wrapper">
        <?php
            
            if( isset($_SESSION['username'])){
                echo "<div class='bg-light border-right' id='sidebar-wrapper'>
                    <div class='sidebar-heading'> <a href='' class='text-dark page-item'><img src='image/home.png' title='home' width='200' height='100'></a>  </div>
                    <div class='list-group list-group-flush'>";

                if( $_SESSION['type'] == 'patient') {
                    $advisory = 'creQuestion';
                    echo "<a href='views/pages/contact.php' class='list-group-item list-group-item-action bg-light'>Giới thiệu</a>
                        <a href='#' class='list-group-item list-group-item-action bg-light'>Tin tức</a>
                        <a href='index.php?controller=doctorList&action=showList' class='list-group-item list-group-item-action bg-light'>Đội ngũ y tế</a>";
                }
                else{
                    $advisory = 'showQuestions';
                }
                echo   "<a href='index.php?controller=booking&action=book' class='list-group-item list-group-item-action bg-light'>Đặt lịch</a>
                        <a href='index.php?controller=advisory&action=".$advisory."' class='list-group-item list-group-item-action bg-light'>Hỏi đáp</a>
                        <a href='#' class='list-group-item list-group-item-action bg-light'>Báo cáo</a>
                        <a href='#' class='list-group-item list-group-item-action bg-light'>Phàn nàn</a>
                    </div>
    
                </div>";
            }
        ?>
            <div id="page-content-wrapper">
                <header style=" margin-bottom: 50px">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <?php
                            if( isset($_SESSION['username'])){
                                echo "<button class='btn btn-primary' id='menu-toggle'>Menu</button>";
                            }
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?controller=pages&action=home">Trang chủ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Liên hệ
                                    </a>
                                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                                        <a class="dropdown-item" href="#">0909587999</a>
                                        <a class="dropdown-item" href="#">Địa chỉ </a>
                                    </div>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <?php
                                    if( isset($_SESSION['username'])){
                                        echo   "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    ".$_SESSION['username']."
                                                </a>
                                                <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                                                   <a class='dropdown-item' href='index.php?controller=getInf&action=showInf'>Thông tin tài khoản</a>            
                                                    <a class='dropdown-item' href='index.php?controller=login&action=logout'>Đăng xuất</a>
                                                </div>";
                                    }
                                    ?>

                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>


                <?= @$content ?>
        
            </div>
        </div>
        <?php
            if( isset($_SESSION['username'])) 
                echo"<footer style='position: static;margin-top: 10px; bottom:0; width: 100%' class='py-3 bg-dark'>
                        <div class='container'>
                            <p class=' text-center text-white'>Copyright &copy; Your Website 2020</p>
                        </div>
                    </footer>";
        ?>
        <!-- Bootstrap core JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>
</html>
