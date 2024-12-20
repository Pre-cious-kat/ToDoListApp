<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>To-Do List</h1>
    <form action="add_task.php" method="post">
        <input type="text" name="title" placeholder="Task Title" required>
        <textarea name="description" placeholder="Task Description"></textarea>
        <button type="submit">Add Task</button>
    </form>
    <ul>
        <?php
        include 'db.php';
        $result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<li>
                    <h2>{$row['title']}</h2>
                    <p>{$row['description']}</p>
                    <a href='edit_task.php?id={$row['id']}'>Edit</a>
                    <a href='delete_task.php?id={$row['id']}'>Delete</a>
                  </li>";
        }
        ?>
    </ul>
</body>
</html>
