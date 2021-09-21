<?php
//connecting to database and selecting the database.
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'cc');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

?>
