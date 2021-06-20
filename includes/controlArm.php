<?php
include_once './connect.php';

print_r($_POST);
$control1 = (int)$_POST['control1'];
$control2 = (int)$_POST['control2'];
$control3 = (int)$_POST['control3'];
$control4 = (int)$_POST['control4'];
$control5 = (int)$_POST['control5'];
$control6 = (int)$_POST['control6'];
if (isset($_POST['running']))
    $running = 'on';
else
    $running = 'off';

$sql = "INSERT INTO control (control1, control2, control3, control4, control5, control6, running) 
VALUES ('$control1', '$control2', '$control3', '$control4', '$control5', '$control6', '$running');";

if (mysqli_query($connect, $sql)) {
    echo "Data Inserted";
} else {
    echo "Error";
    print_r($connect->error_list);
}

header("Location: ../index.html?Sucess");
