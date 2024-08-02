<?php
include '../includes/db.php';
include '../includes/auth.php';

if (!is_logged_in() || !is_admin()) {
    header("Location: ../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>لوحة التحكم</h1>
        <p>مرحبًا <?php echo $_SESSION['username']; ?>!</p>
        <ul>
            <li><a href="manage_courses.php" class="button">إدارة الكورسات</a></li>
            <li><a href="manage_users.php" class="button">إدارة المستخدمين</a></li>
        </ul>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
