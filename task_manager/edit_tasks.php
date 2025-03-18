<?php 
include 'config.php'; // Include the connection file

// Check if the task ID is provided
if(isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convert to integer for safety

    // Fetch the task details from the database using a prepared statement
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $task = $result->fetch_assoc();
    } else {
        echo "❌ Task not found!";
        exit(); // Exit the script if the task is not found
    }
} else {
    echo "❌ Task ID not provided!";
    exit(); // Exit the script if the task ID is not provided
}

// Handle the form submission (when user clicks "Save Changes" button)
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    // Update the task using a prepared statement
    $stmt = $conn->prepare("UPDATE tasks SET title = ?, description = ?, due_date = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $description, $due_date, $id);

    if($stmt->execute()) {
        echo "✅ Task updated successfully!";
        header("Location: view_tasks.php"); // Redirect to the task list page
        exit(); // Ensure script stops execution
    } else {
        echo "❌ Error: " . $conn->error;
    }
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

    <h2>Edit Task</h2>
    <form method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" required><br><br>
    
        <label>Task Description:</label><br>
        <textarea name="description"><?php echo htmlspecialchars($task['description']); ?></textarea><br><br>
         
        <label>Due Date:</label><br>
        <input type="date" name="due_date" value="<?php echo htmlspecialchars($task['due_date']); ?>"><br><br>

        <input type="submit" value="Save Changes">
    </form>

    <br>
    <a href="view_tasks.php">Back to Task List</a> <!-- Corrected link -->
    
</body>
</html>
