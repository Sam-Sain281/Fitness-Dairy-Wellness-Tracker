
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
    <meta charset="utf-8" name = "viewport" content= "width = divice - width, initial-scale = 1">

    <title>FitnessDiary</title>

    <link rel="stylesheet" href="homepage.css">

</head>

<body>
    <p>Hello, <strong> <?php echo $_SESSION["name"]; ?></strong>. Welcome to Fitness Diary.</p>
    <div>
        <button class = "tablink" onclick="openPage('Home', 'this', 'White')"><a href = "homepage.php">Home</a></button>
        <button class = "tablink" onclick="openPage('Exercise', 'this', 'White')"><a href = "exercise.php">Exercise</a></button>
        <button class = "tablink" onclick="openPage('Login', 'this', 'White')"><a href = "login.php">Login</a></button>
        <button class=  "tablink" onclick="openPage('Sign Up', 'this', 'White')"><a href = "register.php">Signup</a></button>
    </div>

   <img src ="fitness.dairy.png" width = "100%" height = "90%" alt = "Fitness Dairy">


</body>

<body>

    <div class = "row">

        <div id = "FitnessDiary" class = "column" style = "background-color: lightblue;">
            <h2>What is Fitness Diary?</h2>

            <p>Fitness Diary is a new, easy to use, and user friendly fitness tracking site.
               Instead of being bombarded with random exercises by an application. We're
               giving you the freedom to add your own unique workout, and record your activity
               using our on-board data visualizer. Simply input your data and let our site turn
               your numbers into an easy to read graph! Its that simple! 
            </p>
        </div>

        <div id = "easyWork" class = "column" style = "background-color: lightgray; ">
            <h2>We can make your workouts easy to organize</h2>

            <p>We don't wish to overwhelm you with a countless number of exercises.
               Our site's function is to help you organize your workouts so you never 
               have to worry about breaking your routine again. Simply make an account,
               add your workouts and exercises, and you'll see it listed on your personalized
               site! The numbers you input will automatically be visualized into a graph
               that is suited just for you!
            </p>
        </div>

    <div

    <div class = "row">

        <div class = "column">
            
            <div id = "whoAreWe" class = "card" style = "background-color: salmon;">
                <h2>Who are we?</h2>

                <p>We are Rutgers University students with dreams and aspirations.
                   Our goal is simple, to utilize our skills in programming and development
                   to create a better and more efficient society. This website is simply a 
                   stepping stone into the greater world.
                </p>
            </div>

            <div id = "toRUHack" class = "card" style = "background-color: lightgreen">
                <h2>To our esteemed judges at HackRU</h2>

                <p> We thank you for taking the time to examine the work we've done over the past 24 hours
                    despite the hardships we've all been through in the past few months. While this is far 
                    from what could be accomplished in a loger period of time, we're proud of what we've done
                    and we are glad to have learned new things along the way.

                </p>
            </div>

        </div>


    </div>

</body>

<script src="homepage.js"></script>

</html>