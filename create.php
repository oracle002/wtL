<?php
include 'db_connection.php';

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    

    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>
