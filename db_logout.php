<?php
    session_start();// session dimulai
    session_destroy();// hapus session
    header("location: login.php");// redirect ke halaman index.php
?>