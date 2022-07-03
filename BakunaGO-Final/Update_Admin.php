<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Update Information</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="img/LOGO.png" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3">BHW Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Administrator</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Administrator:</h6>
                        <a class="collapse-item" href="Add-Admin.php">Adding Admin</a>
                        <a class="collapse-item" href="Admin-Profile.php">Admin Record</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Appointment</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Appointment Schedule:</h6>
                        <a class="collapse-item" href="Appointment-Log.php">Appointment Logs</a>
                        <a class="collapse-item" href="Appointment.php">Appointment Request</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Screens:</h6>
                        <a class="collapse-item" href="Analytics.php">Vaccine Analytics</a>
                        <a class="collapse-item" href="Register.php">Register</a>
                        <a class="collapse-item" href="About.php">About</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Inventory.php">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Inventory</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="Patient-Record.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Patient</span></a>
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

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
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

                <?php

  require_once 'db_connection.php';

  if(isset($_GET['update']) && !empty($_GET['update'])){
    $update = $_GET['update'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM admin_record WHERE id =:update');
    $stmt_edit->execute(array(':update'=>$update));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
      
  }else{
    
  }
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- DITO IDOL -->

                    <center><h2 style="color: black;">Update Record of Admin: <?php echo $name; ?> </h2></center>
          <form method="POST" class="p-3  text-light">
            <h3 style="color: black;">Update Admin Information</h3>
          <label style="color: black;">Full Name:</label>
         <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
            </div>

             <div class="col">
              <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
            </div>

             <div class="col">
              <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
            </div>
           </div><br>
            
           <label style="color: black;">Permanent Address:</label>
            <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="barangay" placeholder="Barangay" name="barangay" value="<?php echo $barangay; ?>">
            </div>

             <div class="col">
              <input type="text" class="form-control" id="city" placeholder="City/Town" name="city" value="<?php echo $city; ?>">
            </div>

            <div class="col">
              <input type="text" class="form-control" id="province" placeholder="Province" name="province" value="<?php echo $province; ?>">
            </div>
        </div><br>

        <label style="color: black;">Other Information:</label>

        <div class="row">
             <div class="col">
              <input type="number" class="form-control" id="age" placeholder="Age" name="age" value="<?php echo $age; ?>">
            </div>

             <div class="col">
              <input type="DATE" class="form-control" id="bday" placeholder="bday" name="bday" value="<?php echo $bday; ?>">
            </div>
        </div><br>

        <div class="row">
             <div class="col">
              <input type="number" class="form-control" id="phone" placeholder="Contact Number" name="phone" value="<?php echo $phone; ?>">
            </div>


             <div class="col">
              <select class="custom-select" id="sex" name="sex" value="<?php echo $sex; ?>">
              <option selected>Sex</option>
              <option>MALE</option>
              <option>FEMALE</option>
          </select>
            </div>
        </div><br>

        <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="height" placeholder="Height" name="height" value="<?php echo $height; ?>">
            </div>

             <div class="col">
              <input type="text" class="form-control" id="weight" placeholder="Weight" name="weight" value="<?php echo $weight; ?>">
            </div>

            <div class="col">
              <input type="text" class="form-control" id="civil" placeholder="Civil Status" name="civil" value="<?php echo $civil; ?>">
            </div>
        </div><br>

        <label style="color: black;">Admin Account:</label>

        <div class="row">
             <div class="col">
              <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username; ?>">
            </div>

             <div class="col">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
            </div>

            <div class="col">
              <input type="text" class="form-control" id="name" placeholder="Admin Name" name="name" value="<?php echo $name; ?>">
            </div>
            </div>

            
              <br>
              <a href="Admin-Profile.php" class="btn btn-primary">Back</a>
              <button type="submit" class="btn btn-success" name="Update">Update</button>
           
          </form>

                <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Cypher X Development Team 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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

<?php

ob_start();

  if (isset($_POST['Update'])) { 

    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $barnagay = $_POST['barangay'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $age = $_POST['age'];
    $bday = $_POST['bday'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $civil = $_POST['civil'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];


    $stmt = $DB_con->prepare('UPDATE admin_record SET lname=:lname, fname=:fname, mname=:mname, barangay=:barangay, city=:city, province=:province, age=:age, bday=:bday, phone=:phone, sex=:sex, height=:height, weight=:weight, civil=:civil, username=:username, password=:password, name=:name  WHERE id=:id');

    $stmt->bindParam(':lname',$lname);
    $stmt->bindParam(':fname',$fname);
    $stmt->bindParam(':mname',$mname);
     $stmt->bindParam(':barangay',$barangay);
    $stmt->bindParam(':city',$city);
    $stmt->bindParam(':province',$province);
    $stmt->bindParam(':age',$age);
    $stmt->bindParam(':bday',$bday);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':sex',$sex);
    $stmt->bindParam(':height',$height);
    $stmt->bindParam(':weight',$weight);
    $stmt->bindParam(':civil',$civil);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':id',$id);
    
    if($stmt->execute()){
echo "<script> alert('Record Successfully Updated!'); window.location='Admin-Profile.php' </script>";

      }else{

      

      } 
  }

?>

<?php 
}else{
     header("Location: User-Dashboard.php");
     exit();
}
 ?>