<?php
session_start();
include("db_config.php");
?>

<!DOCTYPE html>

<head>
    <title>Warung Laptop</title>
    <link rel="icon" href="../img/1.0/Icon.png">
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
            <a class="active" href="admin_product.php">Product</a>
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

    <?php
    ?>

    <div class="login admin">
        <div class="login-header">
            <table border="1">
                <br>
                <h2>Data Product</h2><br>
                <h3>Best Seller</h3><br>
                <a href='admin_upload.php' class="button">Tambah Data</a>
                <tr>
                    <th>No</th>
                    <th>Product_name</td>
                    <th>Product_price</th>
                    <th>Product_image</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th colspan='3'>Aksi</th>
                </tr>
                <?php
            include "db_config.php";
            $no = 1;
            $sql = mysqli_query($conn, "SELECT * FROM product_best");
            while ($h = mysqli_fetch_array($sql)) {?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $h['product_name'] ?></td>
                    <td><?php echo $h['product_price'] ?>K</td>
                    <td><img src='.<?php echo $h['product_image']; ?>' alt="" width="60" height="60"></td>
                    <td><?php echo $h['kategori'] ?></td>
                    <td><?php echo $h['merk'] ?></td>
                    <?php
                    echo "<td> <a href='?hapus=$h[product_id]' class='button'><i class='fa-solid fa-trash'> </a></td>";
                    ?>
                </tr>
                <?php $no++;
                if(isset($_GET['hapus'])){
                    $hapus_id = $_GET['hapus'];
                    $hapus_query = "DELETE FROM product_best WHERE product_id = $hapus_id";
                    mysqli_query($conn, $hapus_query);
                    header("Location: admin_product.php"); 
                    //Bagian ini memeriksa apakah ada parameter hapus dalam URL. 
                    //Jika ada, maka dilakukan penghapusan data kotak saran dari tabel saran berdasarkan No yang diberikan. 
                    //Setelah penghapusan, pengguna akan diarahkan kembali ke halaman db_admin.php menggunakan fungsi header().
                }
            }
                ?>
            </table>
            <table border="1">
                <br>
                <h3>Laptop</h3><br>
                <tr>
                    <th>No</th>
                    <th>Product_name</td>
                    <th>Product_price</th>
                    <th>Product_image</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th colspan=' 3'>Aksi</th>
                </tr>
                <?php
            include "db_config.php";
            $no = 1;
            $query = "SELECT * FROM product_u10";
            $sql = mysqli_query($conn, $query);
            while ($h = mysqli_fetch_array($sql)) {?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $h['product_name'] ?></td>
                    <td><?php echo $h['product_price'] ?>K</td>
                    <td><img src=".<?php echo $h['product_image']; ?>" alt="" width="60" height="60"></td>
                    <td><?php echo $h['kategori'] ?></td>
                    <td><?php echo $h['merk'] ?></td>
                    <?php
                    echo "<td> <a href='?hapus=$h[product_id]' class='button'><i class='fa-solid fa-trash'> </a></td>";
                    ?>
                </tr>
                <?php $no++; 
                if(isset($_GET['hapus'])){
                    $hapus_id = $_GET['hapus'];
                    $hapus_query = "DELETE FROM product_best WHERE product_id = $hapus_id";
                    mysqli_query($conn, $hapus_query);
                    header("Location: admin_product.php"); 
                    //Bagian ini memeriksa apakah ada parameter hapus dalam URL. 
                    //Jika ada, maka dilakukan penghapusan data kotak saran dari tabel saran berdasarkan No yang diberikan. 
                    //Setelah penghapusan, pengguna akan diarahkan kembali ke halaman db_admin.php menggunakan fungsi header().
                }
            }
                ?>
            </table>
            <table border="1">
                <br>
                <h3>Accessories</h3><br>
                <tr>
                    <th>No</th>
                    <th>Product_name</td>
                    <th>Product_price</th>
                    <th>Product_image</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th colspan='3'>Aksi</th>
                </tr>
                <?php
            include "db_config.php";
            $no = 1;
            $query = "SELECT * FROM product_u3";
            $sql = mysqli_query($conn, $query);
            while ($h = mysqli_fetch_array($sql)) {?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $h['product_name'] ?></td>
                    <td><?php echo $h['product_price'] ?>K</td>
                    <td><img src=".<?php echo $h['product_image']; ?>" alt="" width="60" height="60"></td>
                    <td><?php echo $h['kategori'] ?></td>
                    <td><?php echo $h['merk'] ?></td>
                    <?php
                    echo "<td> <a href='?hapus=$h[product_id]' class='button'><i class='fa-solid fa-trash'> </a></td>";
                    ?>
                </tr>
                <?php $no++; 
                if(isset($_GET['hapus'])){
                    $hapus_id = $_GET['hapus'];
                    $hapus_query = "DELETE FROM product_best WHERE product_id = $hapus_id";
                    mysqli_query($conn, $hapus_query);
                    header("Location: admin_product.php"); 
                    //Bagian ini memeriksa apakah ada parameter hapus dalam URL. 
                    //Jika ada, maka dilakukan penghapusan data kotak saran dari tabel saran berdasarkan No yang diberikan. 
                    //Setelah penghapusan, pengguna akan diarahkan kembali ke halaman db_admin.php menggunakan fungsi header().
                }
            }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
<script src="../js/script.js"></script>