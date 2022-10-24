<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage blogs</title>
        <link rel="stylesheet" href="../css2/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css2/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="../js2/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css2/main.css" media="screen" >
        <script src="../js2/modernizr/modernizr.min.js"></script>
          <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
  </style>
</head>
<body class="top-navbar-fixed">
    <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
      <?php include('../includes/leftbar.php');?>  

	   <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage blogs</h2>
                                
                                </div>
       </div>         
	    <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Posts</li>
            							<li class="active">Manage blogs</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
	  </div>
	  </div>
	  
	  </div>
	  </div>

   <!-- ========== COMMON JS FILES ========== -->
        <script src="../js2/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js2/bootstrap/bootstrap.min.js"></script>
        <script src="../js2/pace/pace.min.js"></script>
        <script src="../js2/lobipanel/lobipanel.min.js"></script>
        <script src="../js2/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js2/prism/prism.js"></script>
        <script src="../js2/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js2/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>