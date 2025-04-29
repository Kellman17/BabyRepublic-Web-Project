<?php
    include('koneksi.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price= $_POST['price'];
    $image = $_POST['image'];

    $query = "UPDATE product SET id='$id', name='$name', price='$price', image='$image'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil diubah');window.location='product.php';</script>";
        }
?>