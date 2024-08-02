<?php
include '../includes/db.php';
include '../includes/auth.php';

if (!is_logged_in() || !is_admin()) {
    header("Location: ../index.html");
    exit();
}

// Functionality to manage users here
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المستخدمين</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>إدارة المستخدمين</h1>
        <div class="user-list">
            <!-- Code to list users -->
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
