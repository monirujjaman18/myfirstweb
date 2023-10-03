<?php
$host="localhost";
$user="root";
$pass="";

$link=mysqli_connect($host,$user,$pass);
mysqli_query($link,"create database form");
mysqli_select_db($link,"form");
mysqli_query($link,"create table info(Name text(25),Roll text(8),Department text(25),Semester text(8),Shift text(8),Gender text(8),Mobile_number text(11))");


?>