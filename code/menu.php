<?php
$page=$_GET['pg'];

if($page==1)
{
  $active1='<li class="active">';
}
if($page==2)
{
  $active2='<li class="active">';
}
if($page==3)
{
  $active3='<li class="active">';
}
if($page==4)
{
  $active4='<li class="active">';
}



?>

<div class="sidebar-wrapper">
                          <ul class="nav">
                        <li>
                         <? echo $active1;?>
	                    <a href="dashboard.php?pg=1">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
                        <? echo $active2;?>
	                    <a href="search_userid_profile.php">
	                        <i class="material-icons">person</i>
	                        <p>Search Profile</p>
	                    </a>
	                </li>
	                <li>
                        <? echo $active3;?>
	                    <a href="review_index.php?pg=3">
	                        <i class="material-icons">content_paste</i>
	                        <p>User ID Management</p>
	                    </a>
	                </li>
					
	                <li>
	                    <a href="#">
	                        <i class="material-icons">library_books</i>
	                        <p>System Check</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Manual</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <i class="material-icons">location_on</i>
	                        <p>Email</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
                  <li>
	                    <a href="login/logout.php">
	                        <i class="material-icons text-gray">person</i>
	                        <p>Logout</p>
	                    </a>
	                </li>
					<li class="active-pro">
	                    <a href="#">
	                        <i class="material-icons">unarchive</i>
	                        <p>Enquiry</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>
