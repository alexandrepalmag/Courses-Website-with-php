<?php

include 'db.php';

$name_course = $_POST['name_course'];
$amount_hours = $_POST['amount_hours'];

echo $name_course;
echo $amount_hours;

$query = "INSERT INTO COURSES(name_course, amount_hours) VALUES ('$name_course', $amount_hours)";

mysqli_query($conn, $query);