<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>
