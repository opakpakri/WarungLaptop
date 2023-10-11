<?php
    // session dimulai
    session_start();
        // cek session untuk memeriksa user telah melakukan login atau belum
        if (!isset($_SESSION['email'])) { // jika tidak ada session username
        header("location: index.php"); // redirect ke halaman index.php
    }
?>

<head>
    <title>Warung Laptop</title>
    <link rel="icon" href="../img/1.0/IconFix.png">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome Icon Src -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar Section -->
    <header id="header">
        <a href="#" class="logo">Warung<span>Laptop</span>.</a>
        <section id="navbar">
            <a href="admin_account.php">Account</a>
            <a href="admin_saran.php">Message</a>
            <a href="admin_product.php">Product</a>
        </section>

        <section id="icons">
            <a href="#" id="lg-search" class="fa-solid fa-magnifying-glass"></a>
            <a href="admin_welcome.php" id="lg-profile" class="fa-solid fa-user"></a>
            <a id="bar" class="fa-solid fa-bars"></a>
        </section>

        <!-- Search Form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search Here...">
            <label for="search-box"><i class="fa-solid fa-magnifying-glass"></i></label>
        </div>
        <!-- Search Form end -->
    </header>
    <div class="login">
        <div class="login-header">
            <h2>Selamat datang <?php echo $_SESSION['nama']; ?></h2><br>
            <h4>Anda berhasil login ke dalam database.</h4><br><br>
            <a href="admin_account.php" class="button">Lanjut ?</a>
            <a href='../db_logout.php' class="button">Logout ?</a>
        </div>
    </div>
</body>

</html>
<script src="../js/script.js"></script>