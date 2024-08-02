<?php
include '../includes/db.php';
include '../includes/auth.php';

if (!is_logged_in()) {
    header("Location: ../login.html");
    exit();
}

$sql = "SELECT * FROM users WHERE id = " . $_SESSION['user_id'];
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>مرحبًا، <?php echo htmlspecialchars($user['username']); ?></h1>
        <p>البريد الإلكتروني: <?php echo htmlspecialchars($user['email']); ?></p>
        <p>الدور: <?php echo htmlspecialchars($user['role']); ?></p>
        <a href="edit_profile.html" class="button">تعديل الملف الشخصي</a>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
