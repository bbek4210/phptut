<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Could not connect to database failed: " . mysqli_connect_error());
}
// echo "success connection to the database";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];


$sql = "INSERT INTO `travel` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('bibek', '21', 'male', 'bibej@gmail.com', '9814422779', 'hhh', current_timestamp());"
