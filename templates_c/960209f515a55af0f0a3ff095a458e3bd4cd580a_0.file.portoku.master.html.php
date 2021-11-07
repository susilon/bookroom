<?php
/* Smarty version 3.1.32, created on 2019-12-20 19:29:27
  from 'C:\xampp\htdocs\Assigner\Views\Shared\portoku.master.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dfcbea7addbe4_10748365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '960209f515a55af0f0a3ff095a458e3bd4cd580a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Shared\\portoku.master.html',
      1 => 1576844960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcbea7addbe4_10748365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html class="fixed" id="htm">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | SHARED ON THEMELOCK.COM</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" />

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		 <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/skins/default.css" /> 

		<!-- Theme Custom CSS -->
		 <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme-custom.css"> 

		<!-- Head Libs -->
		  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>  

    	 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
> 
		  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/jquery.maskMoney.js" type="text/javascript"><?php echo '</script'; ?>
>  

		   <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>   -->
		


	</head>
	<body id="bdy">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/assigner.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<!-- <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form> -->
			
					<span class="separator"></span>
			
					<!-- <ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul> -->
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<!-- <span class="name" id ="share_emp_name" value="<?php echo $_smarty_tpl->tpl_vars['nama_user']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['emp_name'];?>
</span>
								<span class="role"><?php echo $_smarty_tpl->tpl_vars['nama_user']->value;?>
</span> -->
								<span class="name" id ="share_emp_name" value=""><?php echo $_smarty_tpl->tpl_vars['data_user']->value['emp_name'];?>
</span>
								<span class="role"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['group_name'];?>
</span>
								<input type="hidden" name="share_ntusername" id="share_ntusername" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<h6>
										<div class="col-md-4">Sign Id</div>
										<div class="col-md-1">:</div>
										<div class="col-md-6">
											<span id="share_nik"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['id'];?>
</span>
										</div>
									</h6>
									<!-- <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a> -->
								</li>
								<li>
									<h6>
										<div class="col-md-4">Group</div>
										<div class="col-md-1">:</div>
										<div class="col-md-6">
											<span id="share_group_cd"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['group_cd'];?>
</span>
										</div>
									</h6>
									<!-- <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a> -->
								</li>
								<li>
									<h6>
										<div class="col-md-4">Division</div>
										<div class="col-md-1">:</div>
										<div class="col-md-6">
											<span id="share_div_cd"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['div_cd'];?>
</span>
										</div>
									</h6>
									<!-- <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a> -->
								</li>
								<li>
									<h6>
										<div class="col-md-4">Departmen</div>
										<div class="col-md-1">:</div>
										<div class="col-md-6">
											<span id="share_dept_cd"><?php echo $_smarty_tpl->tpl_vars['data_user']->value['dept_cd'];?>
</span>
										</div>
									</h6>
									<!-- <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pages-signin.html"><i class="fa fa-power-off"></i> Logout</a> -->
								</li>
								<li>

								</li>
								<li>
									<div>
										<br><li class="divider"></li>
										<hr>
									</div>
									
									<!-- <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pages-signin.html"><i class="fa fa-power-off"></i> Logout</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/dashboard/index">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>

									<li class="nav-active">
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msproject/form">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Input Project</span>
										</a>
									</li>
									
									 <!-- <?php echo '<script language="php"> 

									echo "dfdfdfdf";									
									</script>';?> -->
								
									 <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_menu']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_menu_Text']->value)) {
echo $_smarty_tpl->tpl_vars['buka_menu_Text']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span><?php echo $_smarty_tpl->tpl_vars['data']->value['menu'];?>
</span>
										</a>
										<ul class="nav nav-children">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_sub_menu']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Text/index"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 </a>
											</li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
										</ul>
                                    </li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    -->
									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_Assignment']->value)) {
echo $_smarty_tpl->tpl_vars['buka_Assignment']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Assignment</span>
										</a>
										<ul class="nav nav-children">
											
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Secondassigner/index">First Assignment</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/index">	PIC Project</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/index">	PIC Dept</a>
											</li>
											
										</ul>
									</li>


									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_Task']->value)) {
echo $_smarty_tpl->tpl_vars['buka_Task']->value;
}?>" >
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Task</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_pic">	My Task</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_dept"> Task per Dept</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_dept"> Task per Div</a>
											</li>
											
											
										</ul>
									</li>

									<!-- <li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_Project_review']->value)) {
echo $_smarty_tpl->tpl_vars['buka_Project_review']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Project Review</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Monitoring/index">	Outstanding</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Monitoring/index"> Done</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Monitoring/index"> Postpone</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Monitoring/index"> Drop</a>
											</li>
											
											
										</ul>
									</li> -->

									<li class="nav-active">
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/index">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Project Info</span>
										</a>
									</li>

									<!-- <li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Project Info</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/index">	Project Info </a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Secondassigner/index">Dept task</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept">	Div task</a>
											</li>
											
											
										</ul>
									</li> -->

						

									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Book Number</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/bookform">Book Number</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datami">	Edit/Cancel Number</a>
											</li>
											<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal_master']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal_master']->value;
}?>">
												<a>Master</a>
												<ul class="nav nav-children">
													
													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/paranumber">Master Number</a>
													</li>
													
												</ul>
											</li>
											<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal_report']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal_report']->value;
}?>">
												<a>Report Book Number</a>
												<ul class="nav nav-children">

													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/f_rpt_number">Report Number</a>
													</li>
													
												</ul>
											</li>
										</ul>
									</li>

									<!-- <li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Purchase Order</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/form">Add New</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/index">List PO</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/listreviewpo">Approval</a>
											</li>
											
										</ul>
									</li>
 


									 <li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Transaction</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtasset/form">Asset Acception (New)</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtasset/form">Asset Acception (Borrowed)</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtasset/index">Assign/Return/Borrow</a>
											</li>
										</ul>
									</li>

									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_memointernal']->value)) {
echo $_smarty_tpl->tpl_vars['buka_memointernal']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Borrow</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtasset/form_borrow">Brorrow</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtasset/listreviewborrow">List Borrow</a>
											</li>
										
										</ul>
									</li>
									<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_menu_absen']->value)) {
echo $_smarty_tpl->tpl_vars['buka_menu_absen']->value;
}?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Master</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msprodctgry/index">Product Category</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msprodtype/index">Product Type </a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msproduct/index">Product</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Mslocation/index">Location</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msvendor/index">Vendor</a>
											</li>
											<li>
											<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_menu_report']->value)) {
echo $_smarty_tpl->tpl_vars['buka_menu_report']->value;
}?>">
												<a>Report</a>
												<ul class="nav nav-children">
													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Absen/Rpt_individual_before_conso">Performance Before Consolidation</a>
													</li>
													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Absen/individual_attendance_report">Performance After Consolidation</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent <?php if (isset($_smarty_tpl->tpl_vars['buka_menu_report']->value)) {
echo $_smarty_tpl->tpl_vars['buka_menu_report']->value;
}?>">
												<a>Master</a>
												<ul class="nav nav-children">
													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Absen/master_a">Emp</a>
													</li>
													<li>
														<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Absen/master_b">Default Time</a>
													</li>
												</ul>
											</li>
										</ul>
									</li> -->

                                    <li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>User Management</span>
										</a>
										<ul class="nav nav-children">
											
                                            <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/listmodul">Modul</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/listgroupmodul">Group Modul</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/listdtmappmodul">Mapping Modul</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/usermodul">User Modul</a>
											</li>
											<!-- <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/groups">Groups</a>
											</li> -->
                                        </ul>
									</li> 
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Master</span>
										</a>
										<ul class="nav nav-children">
											
                                            <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Mappingtask/index">Mapping Task</a>
											</li>
											<!-- <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/listgroupmodul">Group Modul</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/listdtmappmodul">Mapping Modul</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/usermodul">User Modul</a>
											</li> -->
											<!-- <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/groups">Groups</a>
											</li> -->
                                        </ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Report</span>
										</a>
										<ul class="nav nav-children">
											
                                            <li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/f_outstanding_prj">Outstanding Project</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/f_unassign_prj_per_dept">Unassign Project per Dept</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/f_rpt_number">Report Number</a>
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/f_unassign_prj">Unassign Project</a>
											</li>
											
                                        </ul>
									</li> 


								</ul> 
							</nav>
				
							<hr class="separator" />
			
				
							<hr class="separator" />

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $_smarty_tpl->tpl_vars['nama_halaman']->value;?>
</h2>
						<!-- <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2> -->
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37695dfcbea79f9307_97655376', 'headcontent');
?>




					</header>

					<!-- start: page -->
	

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212465dfcbea79fe768_68535587', 'bodycontent');
?>

					<!-- end: page -->
				</section>
			</div>

			<!-- <aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside> -->
		</section>

<!-- Vendor -->



 
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
>
			
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
>
			
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>
			
			

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"><?php echo '</script'; ?>
>
			
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />	

			
			

		<!-- Vendor mati-->
		 <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 sr/c="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
> -->

		<!-- Vendor idupin-->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" /> -->


		<!-- INi -->
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
> 
		
		
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>   -->
		
		<!-- Specific Page Vendor -->
	<!-- 	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-appear/jquery.appear.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/flot/jquery.flot.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/flot/jquery.flot.categories.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-sparkline/jquery.sparkline.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/raphael/raphael.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/morris/morris.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/gauge/gauge.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/snap-svg/snap.svg.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/liquid-meter/liquid.meter.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/jquery.vmap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/jquery.vmap.world.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"><?php echo '</script'; ?>
>  -->
 <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/ios7-switch/ios7-switch.js"><?php echo '</script'; ?>
>  -->
		
		
		<!-- Theme Base, Components and Settings -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>

		<!-- Theme Custom -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>

		<!-- Theme Initialization Files -->
		  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>  

		
		
		
		

		
		
		 
		


		<!-- Examples -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/dashboard/examples.dashboard.js"><?php echo '</script'; ?>
>
		

		<!-- Examples -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/forms/examples.advanced.form.js" /><?php echo '</script'; ?>
>
		
		<!-- Engine Modal -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->

	
	    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/css/jquery.dataTables.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <!-- bantingan -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bantingan/css/bantingan.picker.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bantingan/js/bantingan.picker.js"><?php echo '</script'; ?>
>
    <!-- select2 -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.min.css" rel="stylesheet" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_272315dfcbea7a811a3_58300202', 'bodyfooter');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278205dfcbea7a85827_72315801', 'scriptfooter');
?>

	</body>
</html><?php }
/* {block 'headcontent'} */
class Block_37695dfcbea79f9307_97655376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_37695dfcbea79f9307_97655376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<?php
}
}
/* {/block 'headcontent'} */
/* {block 'bodycontent'} */
class Block_212465dfcbea79fe768_68535587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_212465dfcbea79fe768_68535587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_272315dfcbea7a811a3_58300202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_272315dfcbea7a811a3_58300202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<?php
}
}
/* {/block 'bodyfooter'} */
/* {block 'scriptfooter'} */
class Block_278205dfcbea7a85827_72315801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_278205dfcbea7a85827_72315801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- <?php echo '<script'; ?>
 language="javascript">
$("#userbox1").click(function() {
    
  // alert(listfileobject.length);
  alert("Please Add atlease 1 data to submit");
 
  
  });
<?php echo '</script'; ?>
> -->
<?php
}
}
/* {/block 'scriptfooter'} */
}
