<?php

@include 'koneksi.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($koneksi, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total = $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($koneksi, "INSERT INTO `checkout`(name, number, email, method, street, city, pin_code, total_product) 
   VALUES('$name','$number','$email','$method','$street','$city','$pin_code','$total_product')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : Rp".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$street.", ".$city." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='home.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/cart.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($koneksi, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $price_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += (int)$price_total;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : Rp<?= $grand_total; ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Nama</span>
            <input type="text" placeholder="Masukkan Nama Anda" name="name" required>
         </div>
         <div class="inputBox">
            <span>Nomor Telepon</span>
            <input type="number" placeholder="Masukkan Nomor Telephon Anda" name="number" required>
         </div>
         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="Masukkan Email Anda" name="email" required>
         </div>
         <div class="inputBox">
            <span>Metode Pembayaran</span>
            <select name="method">
               <option value="Ovo" selected>Ovo</option>
               <option value="Go Pay">Go Pay</option>
               <option value="Tunai">Tunai</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Alamat</span>
            <input type="text" placeholder="Jl. a" name="street" required>
         </div>
         <div class="inputBox">
            <span>Kota</span>
            <input type="text" placeholder="Medan" name="city" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="12345" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>