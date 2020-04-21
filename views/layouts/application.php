<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HMS</title>

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/simple-sidebar.css" rel="stylesheet">
</head>
    <body style="height: 100%">
    <?= @$content ?>


<!--<footer style="position: fixed;margin-top: auto; bottom:0; width: 100%" class="py-3 bg-dark">-->
<!--    <div class="container">-->
<!--        <p class=" text-center text-white">Copyright &copy; Your Website 2020</p>-->
<!--    </div>-->
<!---->
<!--</footer>-->




<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>