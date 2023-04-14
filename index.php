<?php
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

if(!$con){
    die("Could not connect to database failed: " . mysqli_connect_error());
}
echo"success connection to the database";
