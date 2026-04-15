<?php
include '../db.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";
    mysqli_query($conn, $sql);
}
header("Location: ../index.php");