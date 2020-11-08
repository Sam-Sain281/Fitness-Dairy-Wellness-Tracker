<?php
require_once "dbconfig.php";
require_once "session.php";
$error = '';
if ($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['submit'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($email)){
        $error .= '<p class="error">Please enter email.</p>';
    }
    if(empty($password)){
        $error .= '<p class="error">Please enter your password.</p>';
    }

    if(empty($error)){
        $query = "Select * from puser where email = '$email' ;";
        $result = mysqli_query($db, $query);
        if($result) {
            //Query is successful, do something
            // $username = $result["username"];
            $pwd = '';
            $name = '';
            $uid = '';
            $user = array();
            foreach ($result as $row) {
                $pwd = $row['pwd'];
                $name = $row['name'];
                $uid = $row['id'];
            }
            if(password_verify($password, $pwd)){
                $_SESSION["userid"] = $uid;
                $_SESSION["name"] = $name;
                header("location: homepage.php");
                exit;
            }else{
                # $error .= '<p class="error">The password is not valid.</p>';
            }
        }else{
            $error .= '<p class="error">No user exist with that email address.</p>';
        }
    }
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FitnessDiary: Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <p>Please fill in your email and password.</p>
                    <?php echo $error; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <p>Don't have an account? <a href="register.php">Register here</a>.<p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>