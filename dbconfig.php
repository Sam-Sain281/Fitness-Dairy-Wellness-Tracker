<?php
define('DBSERVER', '<serverip>');
define('DBUSERNAME','<dbuser>');
define('DBPASSWORD', '<dbpassword>');
define('DBNAME','<dbuser>');


$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if($db === false){
    die("Error: connection error." .mysqli_connect_error());
}

?>