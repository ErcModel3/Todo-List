<?php
$conn = new mysqli("localhost", "root", "", "todolist");
if ($conn->connect_error) {
    die("Connection to database failed: ". $conn->connect_error);
}
if (isset($_POST["addtask"])) {
    $task = $_POST["task"];
    $conn -> query("INSERT INTO task (task) VALUES ('$task')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Da great Todo list app</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <div class="container">
        <h1>Todo list</h1>
        <form action="index.php" method="post">
            <input type="text" name="task" placeholder="Enter new task:" id="">
            <button type="submit" name="addtask">Add Task</button>
        </form>
    </div>
</body>
</html>