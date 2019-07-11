<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$session_data = $this->session->userdata('spc_lis');
$name = ucwords($session_data['first_name']) . ' ' . ucwords($session_data['middle_name'][0]) . '. ' . ucwords($session_data['last_name']);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SPC - 	LIS</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo site_url();?>assets/images/global/favicon.png">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-skins.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo site_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo site_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/respond.min.js"></script>
		<![endif]-->

		<!-- clock script -->

		<script type="text/javascript">
			function startTime() {
				var day = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
				var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", ];

			    var today = new Date();
			    var d = day[today.getDay()-1] + ' ' + month[today.getMonth()] + ' ' + today.getDate() + ' '  + today.getFullYear();
			    var h = today.getHours();
			    if (h>12) {
			    	h=h-12;
			    }
			    if (h==0) {
			    	h=12;
			    }
			    if (h<10) {
			    	h="0" + h;
			    }
			    var m = today.getMinutes();
			    var s = today.getSeconds();
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('h').innerHTML = h;
			    document.getElementById('m').innerHTML = m;
			    document.getElementById('s').innerHTML = s;
			    document.getElementById('today').innerHTML = d;
			    var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
			    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			    return i;
			}
		</script>

	</head>

	<body onload="startTime()" class="skin-1">
	
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="container navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left clock">
					<div>
						<span class="clock-element" id="h"></span>
					</div>
					<span class="s">:</span>
					<div>
						<span class="clock-element" id="m"></span>
					</div>
					<span class="s">:</span>
					<div>
						<span class="clock-element" id="s"></span>
					</div>
					<div class="clock-element-wrapper">
						<span class="clock-element" id="today"></span>
					</div>
				</div>

				<div class="avatar navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									<small><?php echo $name; ?></small>
									<small><?php echo $session_data['adviser_id']; ?></small>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
			<div class="header-2">
				<div class="container">

					<img class="company-logo" src="<?php echo base_url();?>assets/images/global/logo.png">
					
					<div class="company-name">
						<h1>SOUTHERN PHILIPPINES COLLEGE</h1>
						<h3>Learner Information System</h3>
					</div>


				</div>
			</div>
		</div>

		<div class="main-container container  ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success .modal-lg" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" title="Quick Search">
							<i class="ace-icon fa fa-search"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-user"></i>

						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-cog"></i>
						</button>
						<a class="ace-icon fa fa-power-off btn btn-danger" href="<?php echo site_url()?>logout"></a>
						
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li>
						<a href="<?php echo base_url();?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> K - 6 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>k6/2018-2019">
									<i class="menu-icon fa fa-caret-right"></i>
									2018-2019
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Junior High </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>juniorhigh/2018-2019">
									<i class="menu-icon fa fa-caret-right"></i>
									2018-2019
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">
								Senior High
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
										2018-2019
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="<?php echo site_url()?>seniorhigh/2018-2019/1">
											<i class="menu-icon fa fa-caret-right"></i>
											1st Sem
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?php echo site_url()?>seniorhigh/2018-2019/2">
											<i class="menu-icon fa fa-caret-right"></i>
											2nd Sem
										</a>

										<b class="arrow"></b>
									</li>

								</ul>
							</li>

						</ul>
					</li>

					<?php 

						

						if ($session_data['adviser_id'] == '772-160418-442') {
							echo '<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pie-chart"></i>
							<span class="menu-text"> Reports </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>reports/studentSummary">
									<i class="menu-icon fa fa-caret-right"></i>
									Student Summary
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>reports/studentList">
									<i class="menu-icon fa fa-caret-right"></i>
									Student List
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>';
						}
					?>

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>