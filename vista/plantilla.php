<?php

$ruta = Plantilla::ctrlRuta();
//echo $ruta;

?>

<?php
// echo $ruta."/"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burger King - Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo $ruta . "/" ?>img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?php echo $ruta . "/" ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <?php include 'modulos/cabecera.php'; ?>
    <!-- Nav Bar End -->


 
   
    <?php
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == "about" || 
        $_GET["pagina"] == "inicio" ||
        $_GET["pagina"] == "feature" ||
        $_GET["pagina"] == "team" ||
        $_GET["pagina"] == "menu" ||
        $_GET["pagina"] == "blog" ||
        $_GET["pagina"] == "booking" ||
        $_GET["pagina"] == "single" ||
        $_GET["pagina"] == "contact") {
        include "modulos/" . $_GET["pagina"] . ".php";
    }
}
?>

    <!-- Footer Start -->
    <?php include 'modulos/footer.php'; ?>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo $ruta . "/" ?>mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $ruta . "/" ?>js/main.js"></script>
</body>

</html>