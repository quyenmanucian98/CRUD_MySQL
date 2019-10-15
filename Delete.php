<?php
include_once "StudentsManager.php";
include_once "DBConnect.php";
include "Student.php";

$index = $_GET['id'];
$manager = new StudentsManager();
$manager->deleteStudent($index);
header('Location: index.php');

?>
