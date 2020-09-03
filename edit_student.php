<?php

include 'db.php';

$id_student = $_POST['id_student'];
$name_student = $_POST['name_student'];
$date_birth = $_POST['date_birth'];

echo 'id: ' . $id_student;
echo '<br>';
echo 'name: ' . $name_student;
echo '<br>';
echo 'hours: '.$date_birth;

$query = "UPDATE STUDENTS SET name_student='$name_student', date_birth=$date_birth WHERE id_student=$id_student";

if(mysqli_query($conn, $query)){
   
} else {
    echo 'Somenthing went wrong';
}

header('location:index.php?page=students');

?>
