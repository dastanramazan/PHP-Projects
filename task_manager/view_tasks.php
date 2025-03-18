<?php
include 'config.php'; // Include the connection file

// Fetch all tasks from the database
$sql = "SELECT id, title, description, due_date FROM tasks";
$result = $conn->query($sql); // Run the query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tasks</title>
</head>
<body>
    <h2>All Tasks</h2>

    <?php
    // Check if there are any tasks in the database
    if ($result->num_rows > 0) {
        // Start the table and add table headers
        echo "<table border='1'>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>";

        // Fetch and display each task row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['title']) . "</td>
                    <td>" . htmlspecialchars($row['description']) . "</td>
                    <td>" . htmlspecialchars($row['due_date']) . "</td>
                    <td>
                        <a href='edit_tasks.php?id=" . $row['id'] . "'>Edit</a> | 
                        <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>"; // ✅ Closing table tag added
    } else {
        echo "<p>No tasks found.</p>"; // ✅ Show message when no tasks exist
    }
    ?>

</body>
</html>
