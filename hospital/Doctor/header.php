<?php 
include 'session.php';

?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>HOSPI</span>Tech - doctor	</a>
				<ul class="nav navbar-top-links navbar-right">
					<!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li> -->
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-dashboard"></em>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="logout.php">
								<div><em class="fa fa-power-off"></em> Log out
								</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="change_password.php">	
								<div><em class="fa fa-cog"></em> Change Password
									
									</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="my_leaves.php">	
								<div><em class="fa fa-cog"></em> update leave
									
									</div>
							</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

			

			

		

			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em>Out patients <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="prescription.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Prescription
					</a></li>
					
					
				</ul>
			</li> 

			<li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em>In patients <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="inpatient.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Inpatients
					</a></li>
					<li><a class="" href="inpatient_report.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Report
					</a></li>
					<li><a class="" href="view_reports.php">
						<span class="fa fa-arrow-right">&nbsp;</span> view Reports
					</a></li>

					
					
					
				</ul>
			</li> 

			<li class="parent "><a data-toggle="collapse" href="#sub-item-6">
				<em class="fa fa-navicon">&nbsp;</em> Appointments <span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li><a class="" href="todays_app.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Todays Appointments
					</a></li>
					<li><a class="" href="all_app.php">
						<span class="fa fa-arrow-right">&nbsp;</span> All Appointments
					</a></li>
					
				</ul>
			</li> 
			<li><a href="my_schedule.php"><em class="fa fa-arrow-right">&nbsp;</em>My schedule</a></li>
			<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em> Reports <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="inpatients.php">
						<span class="fa fa-arrow-right">&nbsp;</span> inpatients/Doctor Reports
					</a></li>
					<li><a class="" href="outpatients.php">
						<span class="fa fa-arrow-right">&nbsp;</span> outpatients/ Doctor Reports
					</a></li>
					
				</ul>
			</li> 


			
			<li><a href="elements.html"><em class="">&nbsp;</em> Test Reports</a>

			</li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em>Appointments</a></li>
			
			<li><a href="elements.html"><em class="fa fa-time">&nbsp;</em> Schedules</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
			<li><a href="Logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->