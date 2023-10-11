<?php
session_start(); // Lakukan cek apakah pengguna sudah login atau belum

if (!isset($_SESSION['email'])) { 
  // Pengguna belum login, alihkan ke halaman login atau tampilkan pesan
  header('Location: login.php'); //jika email sudah diterima akan langsung pergi ke cart.php
  exit;
}
?>

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
            <a href="contact.php">Contact</a>
            <a class="active" href="cart.php" id="cart">Shopping Cart</a>
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
    <section id="page-header" class="section-p1">
        <h2>#Shopping Cart</h2>
    </section>

    <!-- Lanjutkan kodenya -->
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>SubTotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/1.0/produk/asus1.jpg" alt=""></td>
                    <td>Asus A416JAO-VIPS525/VIPS526</td>
                    <td>7.700K</td>
                    <td><input type="number" value="1"></td>
                    <td>7.700K</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/1.0/produk/asus3.png" alt=""></td>
                    <td>Asus A416JAO-VIPS325/VIPS326</td>
                    <td>5.750K</td>
                    <td><input type="number" value="1"></td>
                    <td>5.750K</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/1.0/produk/msi3.png" alt=""></td>
                    <td>MSI Modern 14 B10MW - Carbon Gray</td>
                    <td>7.499K</td>
                    <td><input type="number" value="1"></td>
                    <td>7.499K</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Coupon Code">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart subtotal</td>
                    <td>20.949K</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>20.949K</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to check out</button>
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