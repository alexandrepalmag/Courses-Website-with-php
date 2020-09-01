<?php
//database
include 'db.php';
//page header
include 'header.php';

//page content
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

switch($page){
    case 'courses': include 'views/courses.php'; break;
    case 'students': include 'views/students.php'; break;
    case 'enrollments': include 'views/enrollments.php'; break;
    case 'new_course': include 'views/new_course.php'; break;
    case 'newStudent': include 'views/newStudent.php'; break;
    case 'new_enrollment': include 'views/new_enrollment.php'; break;
    default: include 'views/home.php';

}

//page footer
include 'footer.php';
