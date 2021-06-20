<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "controlarm";

$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$connect) {
    die('Connection failed');
}
