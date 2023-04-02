<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();

    if(isset($_POST['submit'])){
        $regNo=$_POST['regNo'];
        $firstName=$_POST['firstName'];
        $middleName=$_POST['middleName'];
        $lastName=$_POST['lastName'];
        $gender=$_POST['gender'];
        $roomno=$_POST['roomno'];
        $grievance=$_POST['grievance'];
        $query="INSERT into grievance (regNo,firstName,middleName,lastName,gender,roomno,grievance) values(?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        $rc=$stmt->bind_param('issssis',$regNo,$firstName, $middleName, $lastName, $gender,$roomno, $grievance);
        $stmt->execute();
        echo"<script>alert('Grievance Has been added!');</script>";
    }
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- By CodeAstro - codeastro.com -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <!-- <script type="text/javascript">
    function valid(){
        if(document.registration.password.value!= document.registration.cpassword.value){
            alert("Password and Re-Type Password Field do not match !!");
            document.registration.cpassword.focus();
        return false;
            } return true;
     }
    </script> -->
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include '../includes/student-navigation.php'?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include '../includes/student-sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <div class="container-fluid">

                <form method="POST">

                <?php
                    $uid=$_SESSION['login'];
                    $stmt=$mysqli->prepare("SELECT emailid FROM registration WHERE emailid=? ");
                    $stmt->bind_param('s',$uid);
                    $stmt->execute();
                    $stmt -> bind_result($email);
                    $rs=$stmt->fetch();
                    $stmt->close();

                    if(!$rs){ ?>
                    <div class="alert alert-primary alert-dismissible bg-danger text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                                <strong>Info: </strong> You need to book a room first!
                    </div>
                    <?php }
                    else{
						echo "";
					}			
				?>	


                <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Grievances</h4>
                </div>

              
                    <div class="row">

                            <?php	
                                $aid=$_SESSION['regNo'];
                                $ret="select * from registration where regNo=?";
                                $stmt= $mysqli->prepare($ret) ;
                                $stmt->bind_param('i',$aid);
                                $stmt->execute() ;//ok
                                $res=$stmt->get_result();
                                //$cnt=1;
                                while($row=$res->fetch_object())
                                {
                                    ?>
            



                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Registration Number</h4>
                                                <div class="form-group">
                                                    <input type="text" name="regNo" id="regNo" class="form-control" value="<?php echo $row->regNo;?>" required readonly>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                    </div>
                
                    
                    

                    <div class="row">
                    
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">First Name</h4>
                                        <div class="form-group">
                                        <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $row->firstName;?>" required readonly>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Middle Name</h4>
                                        <div class="form-group">
                                        <input type="text" name="middleName" id="middleName" class="form-control" value="<?php echo $row->middleName;?>" required readonly>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Last Name</h4>
                                        <div class="form-group">
                                        <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $row->lastName;?>" required readonly>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gender</h4>
                                    <div class="form-group mb-4">
                                    <input type="text" name="gender" id="gender" class="form-control" value="<?php echo $row->gender;?>" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Room No.</h4>
                                    <div class="form-group mb-4">
                                    <input type="text" name="roomno" id="roomno" class="form-control" value="<?php echo $row->roomno;?>" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Grievance</h4>
                                        <div class="form-group">
                                        <textarea rows="6" cols="36" name="grievance" id="grievance" placeholder="Enter your complain here!" required=""></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>

                        </div>
                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>



                        <?php } ?>

                        
                       

                    
                </form>
                



            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../includes/footer.php' ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps --><!-- By CodeAstro - codeastro.com -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>