<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>منصة تعليمية</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="logo">المنصة التعليمية</a>
                <ul class="nav-links">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="courses.html">الكورسات</a></li>
                    <?php if (!is_logged_in()): ?>
                        <li><a href="register.html">إنشاء حساب جديد</a></li>
                        <li><a href="login.html">تسجيل الدخول</a></li>
                    <?php else: ?>
                        <li><a href="profile.html">الملف الشخصي</a></li>
                        <li><a href="logout.php">تسجيل الخروج</a></li>
                        <?php if (is_admin()): ?>
                            <li><a href="admin/dashboard.php">لوحة التحكم</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
