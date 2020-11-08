<?php

session_start();
if (!isset($_SESSION["userid"]) || $_SESSION["userid"] != true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Exercise</title>


    <link rel="stylesheet" href="tracker.css">

</head>

<body>
    <p>Hello, <strong> <?php echo $_SESSION["name"]; ?></strong>. Please add your exercise log. <a href="logout.php" type="button" role="button" aria-pressed="true">Logout</a> </p>
    <div class="tracker">

        <form>
            Date <input type="date" name="datetext" id="frmDate" value="">

            Sets <input type="number" name="setstext" id="frmSets" value="">

            Reps <input type="number" name="repstext" id="frmReps" value="">

            Weight <input type="number" name="weightsText" id="frmWeight" value="">

        </form>
        <input type="submit" value="submit" onclick="submitTracker()">
    </div>

    <div id="container">
        <pre id='markup'></pre>
    </div>


    <script src="tracker.js"></script>
</body>



</html>