<?php
$connection = mysqli_connect('localhost', 'myteashop', 'yBMfPDRtS27smCA4');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'task_manager');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>