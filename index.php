<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
        <title>ARCT-Enquete</title>
<body>
    <?php
    require_once 'config.php';

    $v = $_GET['v'];
    $c = $_GET['c'];
    $varDao = ucfirst($c) . 'Dao';
    $varController = ucfirst($c) . 'Controller';
    $methode = $v;
    $dao = new $varDao($db);
    $controller = new $varController($dao);
    $controller->$methode();
    ?>

</body>
</html>
