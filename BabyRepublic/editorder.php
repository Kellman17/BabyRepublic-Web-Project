<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM porder WHERE id = '$id'";
        $result = mysqli_query($koneksi,$query);
        if(!$result){
            die('Query Error: '. mysqli_errno($koneksi)." - ". mysqli_error($koneksi));
        }
        $data  = mysqli_fetch_assoc($result);

        if (!count($data)) {
            echo "<script>alert('data tidak ditemukan');window.location='order.php';</script>";
        }


    }else{
        echo "<script>alert('Masukkan ID yang ingin di Edit');window.location='order.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baby Republic</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        * {
            fontfamily: "Helvetica Neue",Helvetica,Arial;
        }
        h1 {
            text-transform : uppercase;
            color: #273746 ;
        }
        label {
            margin-top : 10px;	
            float : left;
            text-align : left;
            width : 100%;
            text-color : black;
        }
        input {
            padding : 6px;
            width : 100%;
            box-sizing : border-box;
            background-color :  #E5E7E9;
            border : 2px solid;
            outline-color : salmon;
        }
        .base{
            width : 400px;
            padding : 20px;
            margin-left: auto;
            margin-right: auto;
            background-color : gold ;
        }
        button{
            margin-top: 10px;
            text-align: center;
            padding : 10px;
            color : white ;
            background-color : #273746;
        }


    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning text-dark sidebar sidebar-warning" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Baby Republic </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Customer -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="home.php">
                <i class="fa fa-university" aria-hidden="true"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="user.php">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tambahuser.php">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span>Tambah User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history.php">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span>History Login</span></a>
            </li>

            <!-- Nav Item - Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Product.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Product</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tambahproduct.php">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span>Tambah Product</span></a>
            </li>

            <!-- Nav Item - Order -->
            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Order</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span>Tambah Order</span></a>
            </li>

            <!-- Nav Item - Order -->
            <li class="nav-item">
                <a class="nav-link" href="banner.php">
                <i class="fas fa-fw fa-table"></i>
                    <span>Banner</span></a>
            </li>

            <!-- Nav Item - Order -->
            <li class="nav-item">
                <a class="nav-link" href="video.php">
                <i class="fas fa-fw fa-table"></i>
                    <span>Video</span></a>
            </li>

            <!-- Nav Item - Order -->
            <li class="nav-item">
                <a class="nav-link" href="slideshow.php">
                <i class="fas fa-fw fa-table"></i>
                    <span>Slide-show</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Search -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">            
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                        

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                 
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                </a>
                            </div>

                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form method="POST" action="prosesorder.php" enctype="multipart/form-data">
                    <section class="base">
                    <center><h1>ADD ORDER <?php echo $data ['name']; ?></h1></center>
                    <div>
                        <label>Name :</label>
                        <input type="text" name="name" required="" VALUE="<?php echo $data ['name']; ?>">
                        <input type="hidden" name="id" required="" VALUE="<?php echo $data ['id']; ?>">
                    </div>
                    <div>
                        <label>Email :</label>
                        <input type="email" name="email" required="" VALUE="<?php echo $data ['email']; ?>">
                    </div>
                    <div>
                        <label>Number :</label>
                        <input type="text" name="number" required="" VALUE="<?php echo $data ['number']; ?>">
                    </div>
                    <div>
                        <label>Address :</label>
                        <input type="text" name="address" required="" VALUE="<?php echo $data ['address1']; ?>">
                    </div>
                    <div>
                        <label>City :</label>
                        <input type="text" name="city" required="" VALUE="<?php echo $data ['city']; ?>">
                    </div>
                    <div>
                        <label>Payment Method :</label>
                        <input type="text" name="method" required="" VALUE="<?php echo $data ['method']; ?>">
                    </div>
                    <div>
                        <label>PIN :</label>
                        <input type="text" name="pin" required="" VALUE="<?php echo $data ['pin']; ?>">
                    </div>
                    <div>
                        <label>Total :</label>
                        <input type="text" name="total" required="" VALUE="<?php echo $data ['total']; ?>">
                    </div>
                    <div>
                        <center><button type="submit">SUBMIT</button></center>
                    </div>
                    </section>
                    </form>  
                </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login_form.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>