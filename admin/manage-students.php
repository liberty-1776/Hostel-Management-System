<?php
    session_start();
    include('../includes/dbconn.php');
    include('./includes/check-login.php');
    check_login();

    if(isset($_GET['del'])) {
        $id=intval($_GET['del']);
        $adn="DELETE from registration where regNo=?";
            $stmt= $mysqli->prepare($adn);
            $stmt->bind_param('i',$id);
            $stmt->execute();
            $stmt->close();	   
            echo "<script>alert('Record has been deleted');</script>" ;
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>

    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
     <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <script language="javascript" type="text/javascript">
    var popUpWin=0;
    function popUpWindow(URLStr, left, top, width, height){
        if(popUpWin) {
         if(!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
        }
    </script>

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php'?>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'includes/sidebar.php'?>
            </div>
        </aside>
 
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Hostel Student Management</h4>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle">Displaying all the registered students list.</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-hover table-bordered no-wrap">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Reg. No.</th>
                                                <th>Student's Name</th>
                                                <th>Room No.</th>
                                                <!-- <th>Seater</th> -->
                                                <th>Staying From</th>
                                                <th>Contact</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php	
                                        $aid=$_SESSION['id'];
                                        $ret="SELECT * from registration";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->execute() ;
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object())
                                            {
                                                ?>
                                        <tr><td><?php echo $cnt;;?></td>
                                        <td><?php echo $row->regNo;?></td>
                                        <td><?php echo $row->firstName;?> <?php echo $row->middleName;?> <?php echo $row->lastName;?></td>
                                        <td><?php echo $row->roomno;?></td>
                                        <td><?php echo $row->stayfrom;?></td>
                                        <td><?php echo $row->contactno;?></td>
                                        <td>
                                        <a href="students-profile.php?regNo=<?php echo $row->regNo;?>" title="View Full Details"><i class="icon-size-fullscreen"></i></a>&nbsp;&nbsp;
                                        <a href="manage-students.php?del=<?php echo $row->regNo;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="icon-close" style="color:red;"></i></a></td>
                                        </tr>
                                            <?php
                                        $cnt=$cnt+1;
                                            } ?>
											
										
									</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <?php include '../includes/footer.php' ?>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>

</body>

</html>