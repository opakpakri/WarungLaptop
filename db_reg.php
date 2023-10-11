<?php
    include 'db_config.php';
    $username = $_POST["username"];
    $no_tlp = $_POST["no_tlp"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpass = $_POST["rpass"];
    //Variabel-variabel ini digunakan untuk menyimpan nilai yang dikirim melalui metode POST dari form pendaftaran. 
    //Nama variabel sesuai dengan atribut name pada elemen input form.

    $query = "INSERT INTO reg_user (username, no_tlp, email, password, rpass)
            VALUES ('$username', '$no_tlp', '$email', '$password', '$rpass')";
            //Query SQL ini digunakan untuk memasukkan data pengguna baru ke dalam tabel reg_user.
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        //Bagian ini mengeksekusi query dengan menggunakan fungsi mysqli_query().
        //Jika query berhasil dijalankan, maka akan ditampilkan pesan pop-up yang memberi tahu bahwa pendaftaran pengguna berhasil dan ke login
    }else{
        echo "Pendaftaran Gagal : ".mysqli_error($conn);
        //Jika query gagal dijalankan, maka akan ditampilkan pesan "Pendaftaran Gagal"
    }
?>
