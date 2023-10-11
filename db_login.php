<?php
    session_start();
    include("db_config.php"); //memulai dan menginpor file db_config.php
    $email = $_POST['email']; //variabel $email dan $password diisi dengan nilai yang dikirim melalui metode POST dari form login.
    $password = $_POST['password'];
    if($email != '' && $password != ''){
        //Bagian ini memeriksa apakah email dan password yang dimasukkan tidak kosong. 
        //Jika keduanya tidak kosong, maka dilanjutkan dengan proses autentikasi.
        $sql = "SELECT * FROM reg_user WHERE email='$email' AND password='$password'";
        $query = mysqli_query($conn, $sql); //mencocokan email dan password yang dimasukkan dengan data pengguna yang ada di tabel reg_user. 
        $data = mysqli_fetch_assoc($query); //asil query disimpan dalam variabel $query, dan data hasil query disimpan dalam variabel $data dalam array
        if(mysqli_num_rows($query) < 1){
            setcookie("message", "Maaf, email atau password salah",time()+60);
            header("location: login.php");
            //Jika jumlah baris hasil query kurang dari 1, artinya tidak ada baris data yang cocok dengan email dan password yang dimasukkan.
            //Jika jumlah baris hasil query lebih dari atau sama dengan 1, artinya ada kecocokan email dan password yang benar. 
        }else{
            $_SESSION['email'] = $data['email'];//Data email dan username dari pengguna yang cocok disimpan dalam variabel sesi $_SESSION untuk digunakan dalam sesi yang berkelanjutan.
            $_SESSION['nama'] = $data['username'];
            
            if ($email === 'admin@gmail.com') {
                //Bagian ini memeriksa apakah email yang dimasukkan adalah "admin@gmail.com". Jika ya, pengguna akan diarahkan ke halaman admin (db_admin.php)
                //Jika email bukan "admin@gmail.com", maka akan dilanjutkan dengan pengalihan ke halaman selamat datang (db_welcome.php).
                header("location: db_admin/admin_welcome.php");
                exit(); 
            }
            setcookie("message","",time()-60);
            header("location: db_welcome.php");
        }
    }else{
        setcookie("message", "email atau Password kosong", time()+60);
        header("location: login.php");
        //Jika email atau password kosong, sebuah cookie dengan pesan kesalahan diatur, dan pengguna diarahkan kembali ke halaman login.
    }
?>