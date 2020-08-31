<?php

include 'db.php';

$name_student = $_POST['name_student'];
$date_birth = $_POST['date_birth'];

$query = "INSERT INTO STUDENTS (name_student, date_birth) VALUES ('$name_student', $date_birth)";

mysqli_query($conn, $query);
