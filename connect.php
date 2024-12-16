<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "task_db";

$conn=mysqli_connect($servername,$username,$pass,$dbname);

if (!$conn) {
    echo" not connected:".mysqli_connect_error();
}
?>