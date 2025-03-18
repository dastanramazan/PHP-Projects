<?php
//Check if the form is submitted
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO tasks (title, description, due_date) VALUES ('$title', '$description', '$due_date')";
    
    if($conn->query($sql) === TRUE) {
        echo "✅ New Task created successfully!";
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
    <title>Add Task</title>
</head>
<body>

    <h2>Add a New Task</h2>
    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>
        
        <label>Task Description:</label><br>
        <textarea name="description"></textarea><br><br>
        
        <label for="due_date">Due Date:</label><br>
        <input type="date" name="due_date"><br><br>
        
        <input type="submit" value="Add Task">
    </form>

</body>
</html>
