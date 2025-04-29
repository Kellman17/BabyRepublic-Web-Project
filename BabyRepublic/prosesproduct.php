<?php
    include('koneksi.php');


        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
       

        $query = "INSERT INTO product (name,price,image) VALUES ('$name', '$price', '$image')";
        $result = mysqli_query($koneksi, $query);


        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        }
        else {
                echo "<script>alert('data berhasil ditambahkan');window.location='product.php';</script>";
            }
       


?>