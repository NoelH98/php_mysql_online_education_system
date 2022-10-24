<?php
	// session_start();
	// $_SESSION = array();
    // if (!isset($_SESSION['username'])) {
	//	$_SESSION['msg'] = "You must log in first";
	//	header('location: login.php');
	//}

	//if (isset($_GET['logout'])) {
	//	session_destroy();
	///	unset($_SESSION['username']);
	//	header("location: login.php");
	//}
   
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deba System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet">
</head>
<body class="grey lighten-3">
 <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                    <strong class="blue-text">Deba System</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                    </ul>

                   
                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Admin Dashboard
                </a>
                <a href="addBlog.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Add blogs</a>
				<a href="editCred.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Edit Credentials</a>	
			    <a href="workshopUpload.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Edit Workshop</a>	
			    <a href="galleryUpload.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Edit Gallery</a>	
			    <a href="logout.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Logout</a>	
            </div>

        </div>
        <!-- Sidebar -->
    </header>	 
	 <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
    
		<div class="row wow fadeIn">

	 <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

	    <!-- Table  -->
             <table class="table table-hover">
                <!-- Table head -->
                    <thead class="blue-grey lighten-4">
                        <tr> 
                        <th>Name of blog</th>
						<th>Created On</th>
						<th>   </th>
						<th>   </th>
					 	</tr> 
                        </thead>
						<!-- Table head -->

						<?php 
						 // connect to database
	                    $dbconnection = mysqli_connect('localhost', 'root', '', 'debasystem');

						$query = "SELECT DISTINCT title,created_at FROM blogs";
			            $result = mysqli_query($dbconnection,$query);
						
						$query_2 = "SELECT DISTINCT filename FROM uploads";
			            $result_2 = mysqli_query($dbconnection,$query_2);
		  
		  
		                if(!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])){
							$startrow = 0;
						}else{
							$startrow = (int)$_GET['startrow'];
						}
						
						$fetch = mysqli_query($dbconnection,"SELECT * FROM uploads LIMIT $startrow, 4") or die (mysql_error());
						
						$num = mysqli_num_rows($fetch);
		                
						for($i=0;$i<$num;$i++){
						while($row = mysqli_fetch_array($result)){
				           
							echo"<tr>";
							echo"<th>".$row['title']."</th>";
							echo"<th>".$row['created_at']."</th>";
							echo"<th><input type='submit' name='file' id='file' value='Edit'><br/></th>";
							echo"<th><input type='submit' name='file' id='file' value='Delete'><br/></th>";
							echo"</tr>";
						}
						}
						echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+4).'">Next</a>';
						$prev = $startrow - 4;
						
						if($prev >= 0)
						echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>';
						
						while($row_2 = mysqli_fetch_array($result_2)){
							echo"<tr>";
							echo"<th>".$row_2['filename']."</th>";
							echo"<th><input type='submit' name='file' id='file' value='Edit'><br/></th>";
							echo"<th><input type='submit' name='file' id='file' value='Delete'><br/></th>";
							echo"</tr>";
						}
						
						?>
                      
                  <!-- Table body -->
                    
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
				 <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>Name</th>
                                        <th>Course</th>
										<th>Reciept</th>
										<th>Pending Approval</th>
										<th><a href="select.html">Approve?</a></th>
                                    </tr>
                                </thead>
                                <!-- Table head -->
	                        <?php 
						       
						         $query_2 = "SELECT DISTINCT fullname,reciept FROM users ";
			                     $result_2 = mysqli_query($dbconnection,$query_2);
								 
								 $query_3 = "SELECT DISTINCT fullname,reciept FROM pdusers WHERE query_status='No' ";
			                     $result_3 = mysqli_query($dbconnection,$query_3);
								 
								 $query_4 = "SELECT DISTINCT fullname,reciept FROM feusers  WHERE query_status='No'";
			                     $result_4 = mysqli_query($dbconnection,$query_4);
								 
								 $query_5 = "SELECT DISTINCT fullname,reciept FROM biusers WHERE query_status='No' ";
			                     $result_5 = mysqli_query($dbconnection,$query_5);
								 
								 if(mysqli_num_rows($result_2) > 0){
								 
						         while($row_2 = mysqli_fetch_array($result_2)){
							 
								 
								 while($row_3 = mysqli_fetch_array($result_3)){
							
								 echo"<tr>";
								 echo"<td>".$row_3['fullname']."</td>";
							     echo"<td>".'PersonalDev'."</td>";
							     echo"<td>".$row_3['reciept']."</td>";
								 echo"<td>".'Yes'."</td>";
							     echo"</tr>";
								 
								 }
								 while($row_4 = mysqli_fetch_array($result_4)){
							
								 echo"<tr>";
								 echo"<td>".$row_4['fullname']."</td>";
							     echo"<td>".'FinancialED'."</td>";
							     echo"<td>".$row_4['reciept']."</td>";
								 echo"<td>".'Yes'."</td>";
							     echo"</tr>";
								 
								 }
								 while($row_5 = mysqli_fetch_array($result_5)){
							
								 echo"<tr>";
								 echo"<td>".$row_5['fullname']."</td>";
							     echo"<td>".'B&I'."</td>";
							     echo"<td>".$row_5['reciept']."</td>";
								 echo"<td>".'Yes'."</td>";
							     echo"</tr>";
								 
								 }
								 }
						         }
						         ?>
                                <!-- Table body -->
                                <tbody>
                                  
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
               
           </div>
	     </div>
		 
	    </div>
    </main>	 
	
</body>

</html>
	