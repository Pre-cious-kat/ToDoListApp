<?php
include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];

$conn->query("INSERT INTO tasks (title, description) VALUES ('$title', '$description')");

header("Location: index.php");
?>
