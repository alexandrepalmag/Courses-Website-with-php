<?php

include 'db.php';

$id_course = $_POST['id_course'];
$name_course = $_POST['name_course'];
$amount_hours = $_POST['amount_hours'];

echo 'id: ' . $id_course;
echo '<br>';
echo 'name: ' . $name_course;
echo '<br>';
echo 'hours: '.$amount_hours;

$query = "UPDATE COURSES SET name_course='$name_course', amount_hours=$amount_hours WHERE id_course=$id_course";

if(mysqli_query($conn, $query)){
   
} else {
    echo 'Somenthing went wrong';
}

header('location:index.php?page=courses');

?>
