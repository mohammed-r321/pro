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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

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
                    include 'conn.php';

                    // استعلام لجلب الطلبات من قاعدة البيانات
                    $sql = "SELECT * FROM orders";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row_num = mysqli_num_rows($query);

                        if ($row_num > 0) {
                            while ($row = mysqli_fetch_assoc($query)) { // استخدام mysqli_fetch_assoc لعرض البيانات
                                echo "<tr>
                    <td>" . $row["onum"] . "</td>
                    <td>" . $row["brand"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["dsc_type"] . "</td>
                    <td>" . $row["cnum"] . "</td>
                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>لا توجد طلبات.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>حدث خطأ أثناء جلب البيانات.</td></tr>";
                    }
                    ?>

                </tbody>
            </table>


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