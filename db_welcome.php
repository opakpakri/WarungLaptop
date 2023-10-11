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
  <link rel="icon" href="img/1.0/IconFix.png">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome Icon Src -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!-- Navbar Section -->
  <header id="header">
    <a href="#" class="logo">Warung<span>Laptop</span>.</a>
    <section id="navbar">
      <a href="index.php">Home</a>
      <a href="menu.php">Shop</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="cart.php" id="cart">Shopping Cart</a>
      <a href="logReg.php" id="profile">Profile</a>
    </section>

    <section id="icons">
      <a href="#" id="lg-search" class="fa-solid fa-magnifying-glass"></a>
      <a href="cart.php" id="lg-cart" class="fa-solid fa-cart-shopping"></a>
      <a href="login.php" id="lg-profile" class="fa-solid fa-user"></a>
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
      <h4>Anda berhasil login ke dalam aplikasi.</h4><br><br>
      <a href="menu.php" class="button">Lanjut Belanja ?</a>
      <a href='db_logout.php' class="button">Logout ?</a>
    </div>
  </div>
  <!-- Footer Section -->
  <footer class="section-p1">
    <div class="col">
      <a href="#" class="logo logo-footer">Warung<span>Laptop</span>.</a>
      <h4>Contact</h4>
      <p><strong>Address:</strong> Jl. Pd. Labu Raya No.1, Pangkalan Jati, Kec.<br>
        Cinere, Kota Depok, Jawa Barat 16514</p>
      <p><strong>Phone:</strong> 021-7818707</p>
      <p><strong>Hours:</strong> 10:00 - 17:00, Mon - Sat</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-tiktok"></i>
          <i class="fa-brands fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="about.php">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="contact.php">Contact Us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="login.php">Sign In</a>
      <a href="cart.php">View Cart</a>
      <a href="cart.php">My Wishlist</a>
      <a href="cart.php">Track My Order</a>
      <a href="contact.php">Help</a>
    </div>

    <div class="copyright">
      <p>Created by <b>WarungLaptop</b>. | &copy; 2023.</p>
    </div>
  </footer>

</body>

</html>
<script src="js/script.js"></script>
