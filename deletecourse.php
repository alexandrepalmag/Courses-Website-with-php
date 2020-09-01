<?php

include 'db.php';

$id_course = $_GET['id_course'];

echo $id_course;

$query = "DELETE FROM COURSES WHERE id_course=$id_course";

if(mysqli_query($conn, $query)){
    
} else {
    echo 'Somenthing went wrong';
}

header('location:index.php?page=courses');
