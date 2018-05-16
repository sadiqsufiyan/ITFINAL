<?php
$db = mysqli_connect('localhost', 'root', 'suff@123');
if (!$db){
    die("Database Connection Failed".mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'itf');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($db));
}
?>
