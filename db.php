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

$query3 = "SELECT students_courses.id_student_course, students.name_student, courses.name_course
            FROM students, courses, students_courses
            WHERE students_courses.id_student = students.id_student
            AND students_courses.id_course = courses.id_course";

$query_enrollments = mysqli_query($conn, $query3);
