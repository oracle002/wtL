<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tasks WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $task = $_POST['task'];

    $sql = "UPDATE tasks SET task='$task' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="task" value="<?php echo $row['task']; ?>">
        <button type="submit" name="submit">Update Task</button>
    </form>
</body>
</html>
