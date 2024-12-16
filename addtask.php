<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $status = $_POST['status'];

    if (empty($title)) {
        die("Title cannot be empty.");
    }

    if (strlen($description) > 500) {
        die("Description cannot exceed 500 characters.");
    }

    $query = "INSERT INTO tasks (title, description, status) VALUES ('$title', '$description', '$status')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>