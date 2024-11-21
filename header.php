<header class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-start align-items-center">
        <div class="logo">
            <h1 class="h3">
                <img src="img/design_2.jpg" 
                     alt="شعار الموقع" 
                     class="logo">
            </h1>
        </div>
        <nav class="ms-auto">
            <ul class="nav">
                <li class="nav-item"><a href="home.php" class="nav-link text-white">الرئيسية</a></li>
                <?php
                // تحقق من وجود جلسة مستخدم
                
                if (isset($_SESSION['uid'])) {
                    echo '<li class="nav-item"><a href="logout.php" class="nav-link text-white">تسجيل الخروج</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>