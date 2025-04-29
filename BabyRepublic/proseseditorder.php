<?php
    include('koneksi.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $number = $_POST['number'];
    $address1 = $_POST['address'];
    $city = $_POST['city'];
    $method = $_POST['method'];
    $pin = $_POST['pin'];
    $total = $_POST['total'];

    $query = "UPDATE user SET id='$id', name='$name', email='$email', number='$number', address1='$address1',
            city='$city',method='$method',pin='$pin',total='$total'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            echo "<script>alert('data berhasil diubah');window.location='order.php';</script>";
        }
?>