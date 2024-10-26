<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حسابك</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <section class="login-form py-5">
        <div class="container">
            <h2 class="text-center mb-4">تسجيل الدخول</h2>
            <form action="process_login.php" method="post" class="p-4 border rounded shadow-sm">
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">الإيميل</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">اسم المستخدم</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">كلمة المرور</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">تأكيد كلمة المرور</label>
                    <input type="password" id="confirm-password" name="confirm_password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg custom-btn">تسجيل الدخول</button>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 صيانة الأجهزة الذكية. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
