<?php
    include "db_config.php";
    session_start();

    $email = $_SESSION['email'];
    //Selain itu, fungsi session_start() digunakan untuk memulai sesi, dan variabel $email diisi dengan nilai dari $_SESSION['email'].

    if($_POST['nama'] ==''||  $email ==''|| $_POST['subjek'] ==''|| $_POST['pesan'] ==''){
        header("location:contact.php");
    }else{
        $query = "INSERT INTO saran(nama,email,subjek,pesan)
        values('$_POST[nama]', '$email', '$_POST[subjek]', '$_POST[pesan]')";
        
        if(mysqli_query($conn, $query)){
            header("location:contact.php");
        }
    }
    /*
    Kode ini memeriksa apakah ada data yang kosong pada form yang dikirim melalui metode POST.
    Jika ada data yang kosong, pengguna akan diarahkan kembali ke halaman contact.php.
    Jika tidak ada data yang kosong, query SQL akan dibuat untuk menyimpan data pesan pada tabel saran.
    Jika query berhasil dijalankan, pengguna akan diarahkan kembali ke halaman contact.php.
    */
?>
