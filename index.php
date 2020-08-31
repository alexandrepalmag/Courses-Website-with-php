<?php
//database
include 'db.php';
//page header
include 'header.php';

//page content
$page = $_GET['page'];
if ($page == 'courses') {
    include 'views/courses.php';
} elseif ($page == 'students') {
    include 'views/students.php';
} elseif ($page == 'enrollments') {
    include 'views/enrollments.php';
} elseif ($page == 'new_course') {
    include 'views/newCourse.php';
}elseif ($page == 'newStudent') {
    include 'views/newStudent.php';
} else {
    include 'views/home.php';
}

//page footer
include 'footer.php';
