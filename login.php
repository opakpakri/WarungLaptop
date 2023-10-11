<head>
  <title>Warung Laptop</title>
  <link rel="icon" href="img/1.0/Icon.png">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome Icon Src -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<?php
    session_start();
    if(isset($_SESSION['email'])){
        header("location: db_welcome.php");
    }
?>

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
      <a class="active" href="login.php" id="profile">Profile</a>
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

  <!-- Lanjutkan kodenya -->
  <div class="login">
    <h2 class="login-header">
      <img src="img/1.0/Icon.png" alt="logo upnvj" style="width:50%;padding-top: 2rem;">
      <br>Masuk ke Akun WarungLaptop anda
      <?php
            // cek apakah terdapat cookie dengan nama message
            if (isset($_COOKIE["message"])) { // jika ada
                echo "<p style='color:red;'>".$_COOKIE["message"]."</p>"; // tampilkan pesannya
            }
            ?>
    </h2>
    <div class="login-container">
      <div style="color: red; margin-bottom: 15px">
      </div>
      <form method="post" action="db_login.php">
        <input type="email" name="email" placeholder="Email Address" /><br /><br />
        <input type="password" name="password" placeholder="Password" /><br /><br />
        <input type="submit" name="login" value="Login" /><br>
        <p class="login-register-text">Belum punya akun? <a href="register.php">Register disini</a>.</p>
      </form>
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

  <script src="js/script.js"></script>
</body>

</html>
