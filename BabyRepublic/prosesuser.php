<?php
    include('koneksi.php');
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO user (name,email,password,role) VALUES ('$name', '$email', '$password', '$role')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil ditambahkan');window.location='user.php';</script>";
        }
?>