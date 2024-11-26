<?php
session_start();
include 'conn.php'; // الاتصال بقاعدة البيانات

// التحقق من تسجيل الدخول
if (!isset($_SESSION['uid']) || !isset($_SESSION['level'])) {
    header('Location: login.php');
    exit;
}

// جلب بيانات المستخدم من الجلسة
$user_id = $_SESSION['uid'];
$user_level = $_SESSION['level'];

// استعلام لجلب الطلبات بناءً على مستوى المستخدم
if ($user_level == 1) {
    // المستخدم بمستوى 1 يرى جميع الطلبات
    $sql = "SELECT * FROM orders";
} else {
    // المستخدم بمستوى 0 يرى طلباته فقط
    $sql = "SELECT * FROM orders WHERE cnum = '$user_id'";
}

$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الطلبات</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ملف CSS المخصص -->
    <link rel="stylesheet" href="test.css">
</head>

<body>

    <!-- الهيدر -->
    <?php include 'header.php' ?>

    <!-- قسم عرض الطلبات -->
    <section class="orders py-5">
        <div class="container">
            <h2 class="text-center mb-4">الطلبات الواردة</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">رقم الطلب</th>
                        <th scope="col">اسم البراند</th>
                        <th scope="col">نوع الجهاز</th>
                        <th scope="col">نوع المشكلة</th>
                        <th scope="col">رقم العميل</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($query) {
                        $row_num = mysqli_num_rows($query);

                        if ($row_num > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>" . $row["onum"] . "</td>
                                    <td>" . $row["brand"] . "</td>
                                    <td>" . $row["phone"] . "</td>
                                    <td>" . $row["dsc_type"] . "</td>
                                    <td>" . $row["cnum"] . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>لا توجد طلبات.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>حدث خطأ أثناء جلب البيانات.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- الفوتر -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; صيانة الأجهزة الذكية. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
