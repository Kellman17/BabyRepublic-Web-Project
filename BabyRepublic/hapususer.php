<?php
include ('koneksi.php');

$id = $_GET['id'];
$query = "DELETE FROM user WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
        echo "<script>alert('data user berhasil dihapus');window.location='user.php';</script>";
    }

?>