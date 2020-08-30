<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "schoolofcourses";

$conn = mysqli_connect($server, $user, $password, $db);

/* ===================================================== */

$query = "SELECT * FROM COURSES";
$tableQuery = mysqli_query($conn, $query);

/* ===================================================== */

$query = "SELECT * FROM STUDENTS";
$tableQuery_students = mysqli_query($conn, $query);

/* ===================================================== */

$query = "SELECT * FROM students.name_student, courses.name_course
            FROM STUDENTS, COURSES, STUDENTS_COURSES
            WHERE STUDENTS_COURSES.id_student = STUDENTS.id_student
            AND STUDENTS_COURSES.id_course = COURSES.id_course";

$query_enrollments = mysqli_query($conn, $query);
