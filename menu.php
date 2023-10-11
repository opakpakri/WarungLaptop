<?php
include('db_config.php');
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
            <a class="active" href="menu.php">Shop</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
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

    <!-- Product Section -->
    <section id="product1" class="section-p1">
        <h2><span>Our </span>Best <span>Seller !!</span></h2>
        <p>.</p>
        <div id="filter">
            <i class="fa-solid fa-bars-staggered">
                <span class="filter-label" onclick="toggleFilterButtons()">Price :</span>
            </i>
            <form action="" method="post" class="filter-buttons">
                <input type="submit" name="asc" value="minimum price">
                <input type="submit" name="desc" value="maximum price">
            </form>
        </div>
        <div class="pro-container">

            <?php 
if (isset($_POST['asc'])){?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_best order by product_price asc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class="des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      ?>
            <?php }else { ?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_best order by product_price desc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class=" des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      } ?>
        </div>
    </section>

    <!-- Page Banner -->
    <section id="page-banner">
        <h2><span>Laptops</span> Under <span>10.000K</span></h2>
        <p>Unbelievable Value: Discover the Astonishing Range of Products Under 10.000K!</p>
    </section>

    <!-- Product Section -->
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php 
if (isset($_POST['asc'])){?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_u10 order by product_price asc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class="des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      ?>
            <?php }else { ?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_u10 order by product_price desc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class="des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      } ?>
        </div>
    </section>

    <!-- Page Banner -->
    <section id="page-banner">
        <h2><span>Accessories </span>Under<span> 3.000k</span></h2>
        <p>Gaming Gear for your Gaming Experience!!</p>
    </section>

    <!-- Product Section -->
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php 
if (isset($_POST['asc'])){?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_u3 order by product_price asc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class="des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      ?>
            <?php }else { ?>
            <?php
      $data=mysqli_query($conn,"SELECT * FROM product_u3 order by product_price desc");
      while($show_data=mysqli_fetch_array($data)){?>
            <div class="pro">
                <form action="menu.php" method="post">
                    <img src=" <?php echo $show_data['product_image'] ?>" alt="">
                    <div class="des">
                        <span> <?php echo $show_data["merk"] ?></span>
                        <h5><?php echo $show_data["product_name"] ?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4><?php echo $show_data["product_price"] ?>K</h4>
                    </div>
                    <button type="submit" name="add"><a href="#"><i
                                class="fa-solid fa-cart-shopping cart"></i></a></button>
                </form>
            </div>
            <?php } 
      } ?>
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