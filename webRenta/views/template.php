<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo COMPANY; ?></title>
    <?php include "./views/inc/Link.php"; ?>
</head>
<body>
    <?php 
        $petitionAjax=false;
        require_once "./controllers/viewsController.php";

        $IV = new viewsController();
        $viewsRoute=$IV->get_views_controller();

        /** Como el login no contiene header ni footer entonces si desde el controlleer estamos trayendo el login no vamos a mostrar el header ni el footer, por eso el condicional */
        if($viewsRoute=="login") {
            require_once "./views/contents/login-view.php";
        }
        else if($viewsRoute=="404"){
            require_once "./views/contents/404-view.php";
        }
        else {
            session_start();
    ?>
    <h1>Funciona!</h1>
    <?php include "./views/inc/Header.php"; ?>

    <?php include $viewsRoute; ?>

    <?php include "./views/inc/Footer.php"; ?>
    <?php } ?>
    <?php include "./views/inc/Script.php"; ?>
</body>
</html>