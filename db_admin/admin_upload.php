<!DOCTYPE html>
<html>

<head>
    <title>Warung Laptop</title>
    <link rel="icon" href="../img/1.0/Icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome Icon Src -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
    /* ... style code ... */
    </style>
</head>

<body>
    <div class="login admin">
        <div class="login-header"><br>
            <h2>Upload Product</h2><br>
        </div>
        <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
            <label>Nama Produk:</label>
            <input type="text" name="product_name" id="product_name" required><br>

            <label>Harga Produk:</label>
            <input type="number" name="product_price" id="product_price" required><br>

            <label>Gambar Produk:</label>
            <input type="file" name="fupload" id="fuplaod" required><br>

            <label>Kategori:</label>
            <select name="kategori" id="kategori" required>
                <option value="laptop">Laptop</option>
                <option value="aksesoris">Aksesoris</option>
            </select>
            <br><br>
            <label>Merk Produk:</label>
            <input type="text" name="merk" id="merk" required><br>

            <label>Tabel:</label>
            <select name="tabel" id="tabel" required>
                <option value="product_best">Product Best</option>
                <option value="product_u10">Product U10</option>
                <option value="product_u3">Product U3</option>
            </select><br><br><br>

            <input type="submit" value="Upload"><br>
        </form>
        <a href="admin_product.php" class="button upload-btn">Back?</a><br>
    </div>
</body>

</html>