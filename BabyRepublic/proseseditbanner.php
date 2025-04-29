<?php
    include('koneksi.php');
    
    $id = $_POST['id'];
    $keterangan = $_POST['keterangan'];
    $image = $_POST['image'];

    $query = "UPDATE banner SET id='$id', keterangan='$keterangan', image='$image'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil diubah');window.location='banner.php';</script>";
        }
?>