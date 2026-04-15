<?php
include 'dp.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])) {
    $title = trim(htmlspecialchars($_POST['title']));
    $priority = $_POST['priority'] ?? 'medium';

    if (!empty($title)) {
        $sql = "INSERT INTO tasks (title, priority) VALUES ('$title', '$priority')";
        mysqli_query($conn, $sql);
    }
}
header("Location: index.php");
exit();