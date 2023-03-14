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
				<a class="navbar-brand" href="index.php"><span>HOSPITAL</span>	</a>
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
					</l -->
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
							<li><a href="Delete.php">
								<div><em class="btn btn-danger"><i class="fa fa-trash-o"></em></i>Delete the Data</a>
									
									</div>
							</a></li>
							<li><a href="update.php">
								<div><em class="btn btn-info"><i class="fa fa-edit"></em></i> Update the Data </a>
									
									</div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar
">
		<div class="">
			<!-- <div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div> -->
		<!-- 	<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div> -->
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

			<li class="parent "><a data-toggle="collapse" href="#general">
				<em class="fa fa-navicon">&nbsp;</em> general <span data-toggle="collapse" href="#general" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="general">
					<li><a class="" href="view_rooms.php">
						<span class="fa fa-arrow-right">&nbsp;</span>  Room/wards
					</a></li>
					<li><a class="" href="add_dept.php">
							<span class="fa fa-arrow-right">&nbsp;</span> department 
						</a>
					</li>
					<li><a class="" href="add_doctor.php">
							<span class="fa fa-arrow-right">&nbsp;</span>  Staff 
						</a>
					</li>
				</ul>
			</li>

			

			

			<li class="parent "><a data-toggle="collapse" href="#sub-item-9">
				<em class="fa fa-navicon">&nbsp;</em>In patients <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-9">
					<li><a class="" href="inpatient.php">
						<span class="fa fa-arrow-right">&nbsp;</span> New Entry
					</a></li>
					
					<li><a class="" href="view_inpatient.php">
						<span class="fa fa-arrow-right">&nbsp;</span> view 
					</a></li>
					<li><a class="" href="discharge.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Discharge 
					</a></li>
					<li><a class="" href="invoice.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Invoice check
					</a></li>
					
				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em>Out patients <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="outpatients.php">
						<span class="fa fa-arrow-right">&nbsp;</span> show all
					</a></li>
					<li><a class="" href="appointment.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Appointments
					</a></li>
					
				</ul>
			</li> 

			

			

			<li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em> Reports <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="appointment_report.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Appointment
					</a></li>
					<li><a class="" href="prescription_report.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Prescriptions
					</a></li>
					<!-- <li><a class="" href="inpatients.php">
						<span class="fa fa-arrow-right">&nbsp;</span> inpatients/Doctor
					</a></li>
					<li><a class="" href="outpatients.php">
						<span class="fa fa-arrow-right">&nbsp;</span> outpatients/ Doctor
					</a></li> -->
					
				</ul>
			</li> 

			<li class="parent "><a data-toggle="collapse" href="#sub-item-8">
				<em class="fa fa-navicon">&nbsp;</em> Doctor Schedule <span data-toggle="collapse" href="#sub-item-8" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-8">
					<li><a class="" href="schedule.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Schedule
					</a></li>
					
					
				</ul>
			</li> 


			
			<li><a href="test_report.php"><em class="">&nbsp;</em> Test Reports</a>

			</li>
			
			
			
			
			
			
		</ul>
	</div><!--/.sidebar-->