<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "babyrepublic";
    $koneksi = mysqli_connect ($host,$user,$pass,$db);
    if(!$koneksi){
        die("koneksi dengan database gagal: ".mysqli_connect_error());

    }
    else{
        //echo "<script>alert('koneksi berhasil')</script>";
    }
?>