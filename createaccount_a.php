<?php

$db = mysqli_connect("localhost","root","","elecprj");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$course = $_POST['course'];

$sql = "INSERT INTO account(fname, lname, email, password, course) VALUES ('$fname', '$lname','$email','$password','$course')";
$query = mysqli_query($db, $sql);
		header('Location: index.php');
?>