<?php

include('koneksi.php');

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($koneksi, $_POST['email']);
   $password = $_POST['password'];
   $role = $_POST['role'];
   $lastactivity = $_POST['lastactivity'];
   
   $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";
   $result = mysqli_query($koneksi, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['id'] = $row['id'];

      if($row['role'] == 'admin'){
         header('location:dashboard.php');

      }elseif($row['role'] == 'user'){
         header('location:home.php');

      }
      $select = "UPDATE user SET lastactivity = now() WHERE id =".$_SESSION['id'];
      $result = mysqli_query($koneksi, $select);
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/register.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo "<script>alert('incorrect email or password!')</script>";
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>