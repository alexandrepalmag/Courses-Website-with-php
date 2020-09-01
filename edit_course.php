<?php

$id_course = $_POST['id_course'];
$name_course = $_POST['name_course'];
$amount_hours = $_POST['amount_hours'];


$query = "UPDATE COURSES SET name_course='$name_course', amount_hours=$amount_hours WHERE id_course=$id_course";

mysqli_query($conn, $query);

header('location:index.php?page=courses');
