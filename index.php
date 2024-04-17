<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <style>
        ul { list-style-type: none; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>ToDo List</h1>
    <?php
    // Include database connection
    include 'db_connection.php';

    // Fetch tasks from database
    $sql = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>' . $row['task'] . ' <a href="edit.php?id=' . $row['id'] . '">Edit</a> | <a href="delete.php?id=' . $row['id'] . '">Delete</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'No tasks found.';
    }
    ?>
    <h2>Add New Task</h2>
    <form action="create.php" method="post">
        <input type="text" name="task" placeholder="Enter Task" required>
        <button type="submit" name="submit">Add Task</button>
    </form>
</body>
</html>
