<?php
    include('koneksi.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "UPDATE user SET id='$id', name='$name', email='$email', password='$password', role='$role'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil diubah');window.location='user.php';</script>";
        }
?>