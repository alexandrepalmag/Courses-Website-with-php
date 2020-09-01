<?php

include 'db.php';

$id_student = $_GET['id_student'];

echo $id_student;

$query = "DELETE FROM STUDENTS WHERE id_student=$id_student";

if(mysqli_query($conn, $query)){
    
} else {
    echo 'Somenthing went wrong';
}

header('location:index.php?page=students');
