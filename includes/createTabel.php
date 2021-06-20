<?php
include_once './connect.php';

$sql = 'Create TABLE control(id int PRIMARY KEY AUTO_INCREMENT, 
control1 int(10) not null, 
control2 int(10) not null, 
control3 int(10) not null, 
control4 int(10) not null, 
control5 int(10) not null, 
control6 int(10) not null, 
running varchar(10) not null");';
