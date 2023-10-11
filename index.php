<!DOCTYPE html>

<head>
  <title>Warung Laptop</title>
  <link rel="icon" href="img/1.0/Icon.png">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome Icon Src -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!-- Iklan Popup Start Index -->
  <div class="popup">
    <div class="popup-content">
      <img class="popup-iklan" src="img/1.0/banner/iklan.png" alt="">
      <img class="popup-btn" src="img/1.0/banner/iklan-btn.png" alt="">
    </div>
  </div>

  <!-- Navbar Section -->
  <header id="header">
    <a href="#" class="logo">Warung<span>Laptop</span>.</a>
    <section id="navbar">
      <a class="active" href="index.php">Home</a>
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

  <!-- Banner Iklan #1 -->
  <section id="slides" class="hidden-slide">
    <div class="slide">
      <img src="img/1.0/iklan1.png" alt="">
    </div>
    <div class="slide">
      <img src="img/1.0/iklan2.png" alt="">
    </div>
    <div class="slide">
      <img src="img/1.0/iklan3.png" alt="">
    </div>

    <div class="navigation">
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(-1)">&#10095;</a>
    </div>
  </section>

  <!-- Feature Section -->
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="img/1.0/features/f1.png" alt="">
      <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
      <img src="img/1.0/features/f2.png" alt="">
      <h6>Online Order</h6>
    </div>
    <div class="fe-box">
      <img src="img/1.0/features/f3.png" alt="">
      <h6>Save Money</h6>
    </div>
    <div class="fe-box">
      <img src="img/1.0/features/f4.png" alt="">
      <h6>Promotions</h6>
    </div>
    <div class="fe-box">
      <img src="img/1.0/features/f5.png" alt="">
      <h6>Happy Sale</h6>
    </div>
    <div class="fe-box">
      <img src="img/1.0/features/f6.png" alt="">
      <h6>F24/7 Support</h6>
    </div>
  </section>

  <!-- Banner Iklan #2 -->
  <section id="banner" class="section-m1">
    <h4></h4>
    <h2>Up to <span>30% Off</span> - All Laptops & Accessories</h2>
    <a href="menu.php"><button class="normal">Explore More</button></a>
  </section>

  <!-- Call To Action Banner -->
  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>Crazy Deal</h4>
      <h2>Buy Laptop get free Bonus</h2>
      <span>Don't Miss it! Get Perfection with this crazy offer!</span>
      <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
      <h4>Spring Summer</h4>
      <h2>Gaming Gear</h2>
      <span>Makes your Gaming Experience more Fun!</span>
      <button class="white">Collection</button>
    </div>
  </section>

  <!-- Text Banner -->
  <section id="banner3">
    <div class="banner-box">
      <h2>SEASONAL SALE</h2>
      <h3>Spring Collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
      <h2>HEADGEAR COLLECTION</h2>
      <h3>Spring/Summer 2023</h3>
    </div>
    <div class="banner-box banner-box3">
      <h2>GAMING LAPTOPS</h2>
      <h3>New Trendy Design</h3>
    </div>
  </section>

  <!-- Newsletters -->
  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For Newsletters</h4>
      <p>Get E-mail update about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address">
      <button class="normal">Sign Up</button>
    </div>
  </section>

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
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("slide");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }

  </script>
</body>

</html>
