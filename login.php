<?php
include 'header.php';

// تحقق مما إذا كانت الجلسة قد بدأت بالفعل
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$ms = '';
if (isset($_POST['submit'])) {

    $uname = $_POST['username'];
    $pass = $_POST['password'];

    include 'conn.php';
    $sql = "select * from users where (uname='$uname' or email='$uname') and password='$pass'";
    $query = mysqli_query($conn, $sql);
    $rslt = mysqli_fetch_assoc($query);
    $row_num = mysqli_num_rows($query);

    if ($row_num == 1) {

        $_SESSION['uid'] = $rslt['id'];
        $_SESSION['name'] = $rslt['name'];
        $_SESSION['level'] = $rslt['level'];

        mysqli_close($conn);
        header('location:home.php');
    } else {
        $ms = 'username or password not correct';
    }
}
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<section class="login-form py-5">
    <div class="container">
        <h2 class="text-center mb-4">تسجيل الدخول</h2>
        <form action="login.php" method="post" class="p-4 border rounded shadow-sm">
            <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="enter">
            <?php echo '<label>' . $ms . '</label>'; ?>
        </form>
    </div>
</section>

<a href="singup.php">ليس لديك حساب؟</a><br><br>

<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2024 صيانة الأجهزة الذكية. جميع الحقوق محفوظة.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
