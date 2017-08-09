<?

include 'dbc.php';
$sysid=$_GET['sysid'];
 $result = mysql_query("select * from user_detail where sysid=$sysid");
          while($row = mysql_fetch_array($result))
 {
    $sys_nameid= $row['sys_nameid'];
    $userid= $row['userid'];
    $staff_id= $row['staff_id'];
    $fullname= $row['fullname'];
    $email= $row['email'];
    $Designation= $row['Designation'];
    $Remarks= $row['Remarks'];

    if($row['privilege']=="Normal User")
    {
          $selected1 = "selected";
    }
    elseif($row['privilege']=="Administrator")
    {
          $selected2 = "selected";
    }
 }



 if($_POST['submit']=="submit")
 {

    $userid= $_POST['userid'];
    $staff_id= $_POST['staffid'];
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $Designation= $_POST['designation'];
    $Remarks= $_POST['remarks'];
    $privilege= $_POST['privilege'];

    $sql="update user_detail set userid='".$userid."',staff_id='".$staff_id."',fullname='".$fullname."',email='".$email."',Designation='".$Designation."',Remarks='".$Remarks."',privilege='".$privilege."' where  staff_id='".$staff_id."' ";


     mysql_query($sql);
    echo  "<meta http-equiv='refresh' content='0; url=edit_userid_profile.php?pg=3&sysid=".$sysid."' />";
  die();
 }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

 <title>SYSTEM ADMINISTRATOR, ANM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

   <div class="logo">
    <a href="#" class="simple-text">
                  SYSTEM ADMINISTRATOR ANM
				</a>
			</div>

      <? include "menu.php"?>
	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Profile</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You re now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Edit Profile</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form action="#" method="post">
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">User ID</label>
													<input value="<? echo $userid;?>" type="text" class="form-control" name="userid" >
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Staff ID</label>
													<input value="<? echo $staff_id;?>" type="text" class="form-control" name="staffid" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email address</label>
													<input value="<? echo $email;?>" type="email" class="form-control" name="email">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Fullname</label>
													<input value="<? echo $fullname;?>" type="text" class="form-control" name="fullname" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Designation</label>
													<input value="<? echo $Designation;?>" type="text" class="form-control" name="designation" >
												</div>
	                                        </div>
	                                    </div>

                                     <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Unit/Vendor</label>
													<input value="<? echo $Remarks;?>" type="text" class="form-control" name="remarks" >
            </div>
	                                        </div>
	                                    </div>

                                      <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Privilege</label>
                                                             <select name="privilege" class="form-control">
                                                              <option <?php echo $selected1;?> value="Normal User">Normal User</option>
                                                               <option <?php echo $selected2;?> value="Administrator">Administrator</option>

                                                                  </select>

                                                                   </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">

	                                    </div>

	                                    <div class="row">

	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right" value="submit" name="submit">Update Profile</button>
                                     <a href="show_detail_review.php?pg=3&sysid=<? echo $sys_nameid;?>">Back</a>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="avatar/1.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Fullname</h6>
    								<h4 class="card-title"><? echo $fullname;?></h4>
    								<p class="card-content">
                                        <? echo $Remarks;?>
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Change Image</a>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>
  <div class="menu">
  <ul>

  <a onClick="return confirm('Are You Sure Remove This User?')" href="del_userid_profile.php?sysid=<?php echo $sysid; ?>&sys_nameid=<?php echo $sys_nameid; ?>"><li>REMOVE This User</li></a>

  </ul>
  </div>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="contextMenu.js"></script>
  <link rel="stylesheet" href="right_click_styles.css">

</html>
