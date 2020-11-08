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


    <link rel="stylesheet" href="exercise.css">

</head>

<body>
    <div class="headergroup">
        <p class="wellnessHeader">Hello, <strong> <?php echo $_SESSION["name"]; ?></strong>. Please add your exercise log. <a href="logout.php" type="button" role="button" aria-pressed="true">Logout</a></p>
        <p class="wellnessHeader"><b>Fitness</b><span style="font-size: 30px">Diary</span></p>
    </div>

    <h3 class="exerciseHeader">Exercise</h3>
    <center>


        <div id="inputvalue">

            <tr>
                <th>Workout Name</th>
                <td><input type="text" name="fname" onfocus="this.value=''" id="fname"></td>
            </tr>
            <tr id="btna">
                <td colspan="2"><input type="button" name="add" id="btn" value="Add" onclick="AddRow()"></td>
            </tr>


        </div>

        <div id="container">
            <pre id='markup'></pre>
        </div>




    </center>
    <script src="exercise.js"></script>


</body>



</html>