<?php
include '../includes/db.php';
include '../includes/auth.php';

if (!is_logged_in() || !is_admin()) {
    header("Location: ../index.html");
    exit();
}

// Functionality to manage courses here
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الكورسات</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>إدارة الكورسات</h1>
        <a href="add_course.php" class="button">إضافة كورس جديد</a>
        <div class="course-list">
            <!-- Code to list courses -->
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
