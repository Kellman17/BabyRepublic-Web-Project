<?php 
include('koneksi.php');



if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($koneksi, "SELECT * FROM `cart` WHERE name = '$product_name'");

  if(mysqli_num_rows($select_cart) > 0){
     $message[] = 'product already added to cart';
  }else{
     $insert_product = mysqli_query($koneksi, "INSERT INTO `cart`(name, price, image, quantity) 
     VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
     $message[] = 'product added to cart succesfully';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.php" media="screen">
    <!-- box icons -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  
    <header>
      
    <div class="nav container">
            <li><a href="#" class="logo"><img src="images/republic.png " alt=""></a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="clothes.html">Products</a></li>

            <?php
      
      $select_rows = mysqli_query($koneksi, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

            <li><a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a></li>
            <div id="menu-btn" class="fas fa-bars"></div>

    </div>
    </header>
    <div class="container3">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  <?php
        $query = "SELECT * FROM slideshow  where id ='1'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
         die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

       }
        $no = 1;

       while ($row = mysqli_fetch_assoc($result)){
                                                
  ?>
      
    <div class="carousel-item active">
      <img src="<?php echo $row['image'] ?>" alt="Los Angeles">
    </div>
    <?php
    $no++;}
    ?>
    <?php
                                            $query = "SELECT * FROM slideshow  where id ='2'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
    <div class="carousel-item">
      <img src="<?php echo $row['image'] ?>" alt="Chicago">
    </div>
    <?php
    $no++;}
    ?>
    <?php
                                            $query = "SELECT * FROM slideshow  where id ='3'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
    <div class="carousel-item">
      <img src="<?php echo $row['image'] ?>" alt="New York">
    </div>
    <?php
    $no++;}
    ?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  
</div>
<div class="container2">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
              <?php
                                            $query = "SELECT * FROM banner  where id ='1'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
            <img src ="<?php echo $row['image'] ?>">
                <?php
    $no++;}
    ?>    

								<div class="col-md- trend-right">
									<h4><span>GET YOUR</span></h4>
									<h4><span>BABY</span></h4>
                  <h4><span>EQUIPMENT</span></h4>
                  <h4><span>HERE</span></h4>
                  
								</div>
								<div class="clearfix"></div>
							</li>
							
						</ul>
					</div>
				</section>
			</div>
		</div>                            
                                            </div>
		<div class="container1">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
              <?php
                                            $query = "SELECT * FROM banner  where id ='2'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
            <img src ="<?php echo $row['image'] ?>">
                <?php
    $no++;}
    ?>    

								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS ON <span>Baby Republic</span></h4>
									
								</div>
								<div class="clearfix"></div>
							</li>
							
						</ul>
					</div>
				</section>
			</div>
		</div>
	

<div class ="video">
<?php
                                            $query = "SELECT * FROM video  where id ='1'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
            <iframe src ="<?php echo $row['video'] ?>"></iframe>
                <?php
    $no++;}
    ?>    
<?php
                                            $query = "SELECT * FROM video  where id ='2'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
            <iframe src ="<?php echo $row['video'] ?>"></iframe>
                <?php
    $no++;}
    ?>    

    </div>
  <div class ="product">
    <section class="home">

   <h1 class="heading">Latest Products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($koneksi, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">Rp <?php echo $fetch_product['price']; ?></div>
            <input type="hidden"  name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class='bx bx-shopping-bag add-cart' value="Buy Now" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
    </div>

    <div class="trend wow zoomIn animated" data-wow-delay=".5s">
		<div class="container">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
              <?php
                                            $query = "SELECT * FROM banner  where id ='3'";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query Error: " .mysqli_errno($koneksi)." - " .mysqli_error($koneksi));

                                            }
                                            $no = 1;

                                            while ($row = mysqli_fetch_assoc($result)){
                                                
                                    ?>
            <img src ="<?php echo $row['image'] ?>">
                <?php
    $no++;}
    ?>    

								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
								</div>
								<div class="clearfix"></div>
							</li>
							
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
    <div class="footer" id="footer">
        <div class="container">
            <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
                <h3 class="title">Baby<span> Republic</span></h3>
                <img src="images/republic.png" alt="Baby Republic">
                <div class="about-info">
                    <p>Everything for your Baby's world</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>