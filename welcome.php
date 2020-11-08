<?php

session_start();
if (!isset($_SESSION["userid"]) || $_SESSION["userid"] != true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FitnessDiary: Welcome <?php echo $_SESSION["name"]; ?> </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hello , <strong> <?php echo $_SESSION["name"]; ?></strong>. Welcome to demo site.</h1>
                </div>
                <p> 
                    <a href="logout.php" type="button" role="button" aria-pressed="true">Logout</a>
                </p>
            </div>
        </div>
    </body>
</html>