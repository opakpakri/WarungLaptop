<!DOCTYPE html>

<head>
  <title>Warung Laptop</title>
  <link rel="icon" href="img/1.0/Icon.png">
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
      <a class="active" href="contact.php">Contact</a>
      <a href="cart.php" id="cart">Shopping Cart</a>
      <a href="login.php" id="profile">Profile</a>
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

  <!-- header section -->
  <section id="page-header">
    <h2>#Contact Us</h2>
  </section>

  <!-- lanjutkan kodenya -->
  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>Get in Touch</span>
      <h2>Visit our store or contact us now</h2>
      <h3>Head Store</h3>
      <div>
        <li>
          <i class="fa-solid fa-location-dot"></i>
          <p>Jl. Pd. Labu Raya No.1, Pangkalan Jati, Kec.
            Cinere, Kota Depok, Jawa Barat 16514</p>
        </li>
        <li>
          <i class="fa-regular fa-envelope"></i>
          <p>warunglaptop@gmail.com</p>
        </li>
        <li>
          <i class="fa-solid fa-phone"></i>
          <p>021-7818707</p>
        </li>
        <li>
          <i class="fa-regular fa-clock"></i>
          <p>Monday - Saturday : 10.00am - 17.00pm</p>
        </li>
      </div>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6010419216054!2d106.79343289999998!3d-6.316022300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee15fb607b8f%3A0xd79daea1e0e9f63!2supn%20Pondok%20Labu!5e0!3m2!1sen!2sid!4v1684225918716!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <section id="form-details">
    <form method="post" action="db_saran.php">
      <span>LEAVE A MESSAGE</span>
      <h2>We love to hear from you</h2>
      <input type="text" name="nama" placeholder="Your Name">
      <input type="text" name="subjek" placeholder="Subject">
      <textarea name="pesan" cols="30" rows="10" placeholder="Your Message"></textarea>
      <button type="submit" class="normal">Submit</button>
    </form>

    <div class="people">
      <div>
        <img src="img/1.0/people/pandar.jpg" alt="">
        <p><span>Irvandharsyah Madyatama</span>Programmer<br>phone: 087611227834<br>Email: 2110512126@mahasiswa.upnvj.ac.id</p>
      </div>
      <div>
        <img src="img/1.0/people/arpin.jpg" alt="">
        <p><span>Arvin Rifqi Hanif</span>Programmer<br>phone: 085647877679<br>Email: 2110512128@mahasiswa.upnvj.ac.id</p>
      </div>
      <div>
        <img src="img/1.0/people/opak.jpg" alt="">
        <p><span>Aufa Fakhri Tiyo Widodo</span>Programmer<br>phone: 087785654212<br>Email: 2110512130@mahasiswa.upnvj.ac.id</p>
      </div>
      <div>
        <img src="img/1.0/people/rahman.jpg" alt="">
        <p><span>Rahman Aulia Krisnapati</span>Programmer<br>phone: 089987676551<br>Email: 2110512164@mahasiswa.upnvj.ac.id</p>
      </div>
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
</body>

</html>
