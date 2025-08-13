<?php
require_once "../Model/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $department = $_POST["department"];
    $type = $_POST["type"];
    $priority = $_POST["priority"];
    $description = trim($_POST["description"]);

    if (empty($name) || empty($email)) {
        die("Name and email required.");
    }

    $sql = "INSERT INTO tickets (name, email, department, type, priority, description) VALUES (?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $department, $type, $priority, $description);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../View/Booking.php?success=1");
            exit();
        } else {
            echo "Database execution error: " . mysqli_error($link);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Database prepare error: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>