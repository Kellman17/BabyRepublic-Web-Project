<?php
    include('koneksi.php');
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $number = $_POST['number'];
    $address1 = $_POST['address'];
    $city = $_POST['city'];
    $method = $_POST['method'];
    $pin = $_POST['pin'];
    $total = $_POST['total'];

    $query = "INSERT INTO porder (name,email,number,address1,city,method,pin,total) 
    VALUES ('$name','$email','$number','$address1','$city','$method','$pin','$total')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
        echo "<script>alert('data berhasil ditambahkan');window.location='order.php';</script>";
        }
?>