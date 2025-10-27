<?php
$host = "sql105.infinityfree.com";
$user = "if0_40002351";
$password = "Nemezu2005";
$dbname = "if0_40002351_task_trail";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
