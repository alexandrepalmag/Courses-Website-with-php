<?php

include 'db.php';

$user = addslashes($_POST['user']);
$pass = addslashes($_POST['pass']);

$query = "SELECT * FROM USERS WHERE user = '$user' AND pass= '$pass'";

$search = mysqli_query($conn, $query);

if (mysqli_num_rows($search) == 1) {

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user'] = $user;
    header('location:index.php');

} else {

    header('location:index.php?erro');

}
