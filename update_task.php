<?php 
include 'dp.php';
$id = (int)$_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id = $id");
$task = mysqli_fetch_assoc($result);
?>
<form action="update_logic.php" method="post">
    <input type="hidden" name="id" value="<?= $task['id'] ?>">
    <div class="mb-3">
        <label>Task Title</label>
        <input type="text" name="title" value="<?= $task['title'] ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-warning">Update Task</button>
</form>