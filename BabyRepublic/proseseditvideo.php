<?php
    include('koneksi.php');
    
    $id = $_POST['id'];
    $keterangan = $_POST['keterangan'];
    $video = $_POST['video'];

    $query = "UPDATE video SET id='$id', keterangan='$keterangan', video='$video'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil diubah');window.location='video.php';</script>";
        }
?>