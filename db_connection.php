
<?php
$server = "localhost";
$db = "sample";
$username = 'root';
$password = '';
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    $sql_create_table = "CREATE TABLE IF NOT EXISTS `tasks` (
        `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
        `task` VARCHAR(255) NOT NULL
    )";
    
    mysqli_query($conn, $sql_create_table);
}
?>
