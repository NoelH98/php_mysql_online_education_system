
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Deba System Admin | Dashboard</title>
        <link rel="stylesheet" href="../css2/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css2/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css2/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css2/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
    </head>
  <body class="top-navbar-fixed">
  
  <div class="main-wrapper">
       <?php include('../includes/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">
				
                    <?php include('../includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                  
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                      
                        </div>
						  <!-- /.container-fluid -->
						
                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$db = mysqli_connect('localhost', 'root', '', 'debasystem');
$sql = "SELECT count('id')FROM users WHERE query_status='Yes'";
$results = mysqli_query($db,$sql);
$row = mysqli_fetch_array($results);
$totalstudents=$row[0];;
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Approved Users</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="manage-subjects.php">
<?php 
$sql = "SELECT count('id')FROM blogs";
$results = mysqli_query($db,$sql);
$row = mysqli_fetch_array($results);
$totalsubjects=$row[0];;
?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Posts Listed</span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="manage-classes.php">
                               
<?php 
$sql = "SELECT count('id')FROM users WHERE query_status='No'";
$results = mysqli_query($db,$sql);
$row = mysqli_fetch_array($results);
$totalnew=$row[0];;
?>

                                            <span class="number counter"><?php echo htmlentities($totalnew);?></span>
                                            <span class="name">New Users</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="manage-results.php">
<?php 
$sql = "SELECT count('id')FROM partners";
$results = mysqli_query($db,$sql);
$row = mysqli_fetch_array($results);
$totalpat=$row[0];;
?>
                                            <span class="number counter"><?php echo htmlentities($totalpat);?></span>
                                            <span class="name">Partner companies</span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="manage-results.php">
<?php 
$sql = "SELECT count('id')FROM workshops";
$results = mysqli_query($db,$sql);
$row = mysqli_fetch_array($results);
$totalevent=$row[0];;
?>
                                            <span class="number counter"><?php echo htmlentities($totalevent);?></span>
                                            <span class="name">Workshops</span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

						
					</div>
				
  </div>
  </div>
  </div>
         <!-- ========== COMMON JS FILES ========== -->
        <script src="../js2/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js2/jquery-ui/jquery-ui.min.js"></script>
        <script src="../js2/bootstrap/bootstrap.min.js"></script>
        <script src="../js2/pace/pace.min.js"></script>
        <script src="../js2/lobipanel/lobipanel.min.js"></script>
        <script src="../js2/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js2/prism/prism.js"></script>
        <script src="../js2/waypoint/waypoints.min.js"></script>
        <script src="../js2/counterUp/jquery.counterup.min.js"></script>
        <script src="../js2/amcharts/amcharts.js"></script>
        <script src="../js2/amcharts/serial.js"></script>
        <script src="../js2/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="../js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="../js2/amcharts/themes/light.js"></script>
        <script src="../js2/toastr/toastr.min.js"></script>
        <script src="../js2/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js2/main.js"></script>
        <script src="../js2/production-chart.js"></script>
        <script src="../js2/traffic-chart.js"></script>
        <script src="../js2/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to Deba System Admin Page!");

            });
        </script>
    </body>
</html>