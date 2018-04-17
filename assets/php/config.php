<?php

// $dbServername = "127.0.0.1";
// $dbUsername = "db_team1_agent";
// $dbPassword = "NF1RGUq{3P(+";
// $dbName = "db_team1"; // db_team1

$dbServername = "localhost";
$dbUsername = "kron.simmons";
$dbPassword = "";
$dbName = "chaheg2"; // db_team1

$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword, $dbName );

if ($conn === false) {
    # code...
    die("Error: Could not connect." . mysqli_connect_error());
    // remove the error when going into production
}
