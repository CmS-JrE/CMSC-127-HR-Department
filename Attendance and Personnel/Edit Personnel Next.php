<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Delete Personnel</title>
     <link rel="icon" href="Picture1.jpg" type="image/jpg">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="jquery-3.2.1.min.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Personnel</title>
     <link rel="icon" href="Picture1.jpg" type="image/jpg">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../">Luke Foundation Inc., Database</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                    <a  href="index.php">
                        <i class="fa fa-home fa-fw"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-list fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="Organizer.php">
                                <div>
                                    <i class="fa fa-group fa-fw"></i>   Organizer
                                </div>
                                
                            </a>
                        </li>
                         <li class="divider"></li>
                        <li>
                            <a href="Activities.php">
                                <div>
                                    <i class="fa fa-calendar-o fa-fw"></i>   Activities
                                </div>
                                
                            </a>
                        </li>
                        <li class="divider"></li>
                     
                        <li class="divider"></li>
                        <li>
                            <a href="Attendance.php">
                                <div>
                                    <i class="fa fa-book fa-fw"></i>   Attendance
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li >
                            <div>
                                <h4>Options:</h4>
                            </div>
                           
                        </li>
						<li>
                            <a href="Personnel.php"><i class="fa fa-search fa-fw"></i> Search Records</a>
                        </li>
                        <li>
                            <a href="Edit Personnel.php"><i class="fa fa-edit fa-fw"></i> Edit Record</a>
                        </li>
                        <li>
                            <a href="Delete Personnel.php"><i class="fa fa-trash-o fa-fw"></i> Delete Record</span></a>
                        </li>
                        <li>
                            <a href="Add Personnel.php"><i class="fa fa-plus-circle fa-fw"></i> Add Personnel</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li >
                            <div>
                                <h4>  Options:</h4>
                            </div>
                           
                        </li>
                        <li>
                            <a href="Personnel.php"><i class="fa fa-search fa-fw"></i> Search Records</a>
                        </li>
                        <li>
                            <a href="Edit Personnel.php"><i class="fa fa-edit fa-fw"></i> Edit Record</span></a>
                        </li>
                        <li>
                            <a href="Delete Personnel.php"><i class="fa fa-trash-o fa-fw"></i> Delete Record</a>
                        </li>
                        <li>
                            <a href="Add Personnel.php"><i class="fa fa-plus-circle fa-fw"></i> Add Personnel</a>
                        </li>
                      
                    </ul>
                </div>
            </div>

        </nav>
		

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Personnel</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please review the following information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="update_personnel.php" method="POST" onsubmit="return confirm('Are you sure you want to make changes to this record?');">
                                        <?php
											$con = mysqli_connect('127.0.0.1','root','');
	
											if (!$con){
												echo 'Not connected to server';
											}
	
											if (!mysqli_select_db($con,'lukedb')){
												echo 'Database not selected';
											}
											
											$query = "SELECT * FROM staff WHERE last_name = '$_POST[last_name]'";
											$result = mysqli_query($con,$query);
											$row=mysqli_fetch_row($result);
											
											$content="";
											$content=$content.'
															<input class="hide" name="staff_id" type="text" value="'.$row["0"].'" />
															
															<div class="form-group">
															<label>Last Name</label>
															<input class="form-control" placeholder="'.$row['1'].'" value="'.$row['1'].'" name="last_name" required>
															</div>
															<div class="form-group">
															<label>First Name</label>
																<input class="form-control" placeholder="'.$row['2'].'" value="'.$row['2'].'" name="first_name" required>
															</div>
															<div class="form-group">
																<label>Middle Name</label>
																<input class="form-control" placeholder="'.$row['3'].'" value="'.$row['3'].'" name="middle_name" required>
															</div>
                                          
															<div class="form-group">
																<label>Address</label>
																<input class="form-control" placeholder="'.$row['4'].'" value="'.$row['4'].'" name="address" required>
															</div>
															<div class="form-group">
																<label>Contact</label>
																<input class="form-control" maxlength="11" placeholder="'.$row['5'].'" value="'.$row['5'].'" name="contact_number" required pattern="^(09|\+639)\d{9}$">
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control" type="email" placeholder="'.$row['6'].'" value="'.$row['6'].'" name="email_address" required>
															</div>
										
															<div class="form-group">
																<label>Staff type:</label>
															<div class="radio">
																<label>
																	<input type="radio" name="optionsRadios" id="optionsRadios" value="Official Staff" checked name="staff_type">Official Staff
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" name="optionsRadios" id="optionsRadios" value="Intern" name="staff_type">Intern
																</label>
															</div>
			
														';
											
										?>
                                        <div class="form-group">
                                            
                                            <div class="form-group">                                            
                                               <?php
												echo $content;
											   ?>
                                                
                                        </div>
										<button type="button" onclick="history.back()" class="btn btn-default">Back</button>
                                        <button type="submit" class="btn btn-default">Confirm</button>
										
                                    </form>
									
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php mysqli_close($con);?>
</html>
