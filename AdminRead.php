<?php
    require_once "../Model/config.php";

    $sql = "SELECT * FROM tickets";

    $result = mysqli_query($link, $sql);

    if (!$result) {
        echo "Error retrieving tickets: " . mysqli_error($link);
    }
    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tickets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        .wrapper {
            width: 90%;
            margin: 20px auto;
        }
        table {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <h2 class="text-center">All Tickets</h2>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Issue</th>
                    <th>Priority</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["id"]); ?></td>
                        <td><?php echo htmlspecialchars($row["name"]); ?></td>
                        <td><?php echo htmlspecialchars($row["email"]); ?></td>
                        <td><?php echo htmlspecialchars($row["department"]); ?></td>
                        <td><?php echo htmlspecialchars($row["type"]); ?></td>
                        <td><?php echo htmlspecialchars($row["priority"]); ?></td>
                        <td><?php echo htmlspecialchars($row["description"]); ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-warning">No tickets found.</p>
        <?php endif; ?>
        <p><a href="../View/AdminDash.php" class="btn btn-primary">Back</a></p>
    </div>
</div>
</body>
</html>