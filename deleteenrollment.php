<?php

include 'db.php';

$id_student_course = $_GET['id_enrollment'];

echo $id_student_course;

$query = "DELETE FROM STUDENTS_COURSES WHERE id_student_course=$id_student_course";

if(mysqli_query($conn, $query)){
    
} else {
    echo 'Somenthing went wrong';
}

header('location:index.php?page=enrollments');
