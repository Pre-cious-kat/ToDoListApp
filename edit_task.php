<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$task = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $conn->query("UPDATE tasks SET title='$title', description='$description' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="post">
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
        <textarea name="description"><?php echo $task['description']; ?></textarea>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
