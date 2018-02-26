<?php

$dbServername = "localhost";
$dbUsername = "kron.simmons";
$dbPassword = "";
$dbName = "chaheg";

$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword, $dbName );

if ($conn === false) {
    # code...
    die("Error: Could not connect." . mysqli_connect_error());
    // remove the error when going into production
}
