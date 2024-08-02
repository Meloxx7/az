<?php
include '../includes/db.php';
include '../includes/auth.php';

if (!is_logged_in()) {
    header("Location: ../login.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

    $sql = "UPDATE users SET username='$username', email='$email'";
    if ($password) {
        $sql .= ", password='$password'";
    }
    $sql .= " WHERE id=" . $_SESSION['user_id'];

    if ($conn->query($sql) === TRUE) {
        header("Location: profile.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الملف الشخصي</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>تعديل الملف الشخصي</h1>
        <form action="edit_profile.php" method="post">
            <label for="username">اسم المستخدم:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
            
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            
            <label for="password">كلمة المرور الجديدة:</label>
            <input type="password" id="password" name="password">
            
            <button type="submit">تحديث المعلومات</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
