<?php
include 'db.php';
$conn = mysqli_connect($Host, $User, $Pass, $DBName);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM tasks WHERE id=$id");
    header("Location: index.php");
}
?>
