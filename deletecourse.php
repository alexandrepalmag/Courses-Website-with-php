<?php

include 'db.php';

$id_course = $_GET['id_course'];

$query = "DELETE FROM COURSES WHERE id_course = $id_course";

mysqli_query($conn, $query);

header('location:index.php?page=courses');
