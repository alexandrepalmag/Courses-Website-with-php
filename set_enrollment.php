<?php

include 'db.php';

$id_student = $_POST['choice_student'];
$id_course = $_POST['choice_course'];

$query = "INSERT INTO STUDENTS_COURSES(id_student, id_course) VALUES ($id_student, $id_course)";

mysqli_query($conn, $query);

header('location:index.php?page=enrollments');