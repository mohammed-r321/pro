<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيانة الأجهزة الذكية</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ملف CSS المخصص -->
    <link rel="stylesheet" href="test.css">
</head>

<body>

    <!-- الهيدر -->
    <?php include 'header.php'?>

    <!-- باقي الصفحة -->
    <!-- قسم البطل (Hero Section) -->
    <section class="hero text-center text-white py-5" style="background-color: #007bff;">
        <div class="container">
            <h2 class="display-4">إصلاح وصيانة جميع أنواع الأجهزة الذكية</h2>
            <p class="lead">نقدم خدمات عالية الجودة لإصلاح الهواتف الذكية، الأجهزة اللوحية والمزيد.</p>
            <a href="order.php" class="btn btn-primary btn-lg custom-btn">احجز الآن</a>
        </div>
    </section>

    <!-- قسم الخدمات -->
    <section class="services py-5">
        <div class="container">
            <h2 class="text-center mb-4">خدماتنا</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm service-card">
                        <div class="card-body">
                            <h3 class="card-title text-primary">إصلاح الشاشات</h3>
                            <p class="card-text">إصلاح واستبدال شاشات الهواتف الذكية التالفة بأعلى جودة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm service-card">
                        <div class="card-body">
                            <h3 class="card-title text-primary">صيانة البطارية</h3>
                            <p class="card-text">استبدال وصيانة البطاريات لضمان أفضل أداء لجهازك.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm service-card">
                        <div class="card-body">
                            <h3 class="card-title text-primary">إصلاح مشاكل النظام</h3>
                            <p class="card-text">حل مشاكل البرمجيات والتحديثات لضمان عمل جهازك بكفاءة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم شهادات العملاء -->
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="text-center mb-4">ماذا يقول عملاؤنا</h2>
            <div class="row">
                <div class="col-md-6">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">خدمة رائعة وسريعة! تم إصلاح هاتفي في غضون ساعة واحدة فقط.</p>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">أفضل مكان لصيانة الأجهزة، خدمات ممتازة وبأسعار معقولة.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- الفوتر -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>شاكرين لزيارتكم</p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>