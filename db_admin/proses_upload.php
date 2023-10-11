<?php
include("db_config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $tabel = $_POST['tabel'];

    $size = 10000000; // limit 10 MB

    if ($_FILES["fupload"]["size"] > $size) {
        echo "<strong>Gagal upload! <br>Ukuran Maksimal 10MB, saat ini ukuran file " . $_FILES["fupload"]["size"] . "</strong>";
        echo "<a href='upload.php'>Upload ulang</a>";
        exit();
    } else {
        $target_dir = "./img/1.0/produk/";
        $target_file = ".".$target_dir . basename($_FILES["fupload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
            if (move_uploaded_file($_FILES["fupload"]["tmp_name"], $target_file)) {
                $target_file = $target_dir . basename($_FILES["fupload"]["name"]);
                switch ($tabel) {
                    case "product_best":
                        // Simpan data ke tabel product_best
                        $query = mysqli_query($conn, "INSERT INTO product_best (product_name, product_price, kategori, merk, product_image) VALUES ('$product_name', '$product_price', '$kategori', '$merk', '$target_file')") or die(mysqli_error($conn));
                        break;
                    case "product_u10":
                        // Simpan data ke tabel product_u10
                        $query = mysqli_query($conn, "INSERT INTO product_u10 (product_name, product_price, kategori, merk, product_image) VALUES ('$product_name', '$product_price', '$kategori', '$merk', '$target_file')") or die(mysqli_error($conn));
                        break;
                    case "product_u3":
                        // Simpan data ke tabel product_u3
                        $query = mysqli_query($conn, "INSERT INTO product_u3 (product_name, product_price, kategori, merk, product_image) VALUES ('$product_name', '$product_price', '$kategori', '$merk', '$target_file')") or die(mysqli_error($conn));
                        break;
                    default:
                        // Jika pilihan tabel tidak valid
                        echo "Pilihan tabel tidak valid.";
                        break;
                }

                echo "Data berhasil di upload!<br>";
                header('location:admin_product.php');
                exit;
            } else {
                echo "Gagal upload!<br>";
                echo "<a href='admin_upload.php'>Upload ulang</a>";
            }
        } else {
            echo "File yang diunggah harus berformat JPG, JPEG, atau PNG.";
            echo "<a href='admin_upload.php'>Upload ulang</a>";
        }
    }
}
?>