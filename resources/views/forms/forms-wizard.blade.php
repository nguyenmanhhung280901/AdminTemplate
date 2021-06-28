<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Form Wizard | Okler Themes | Porto-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../.." class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="../pages/pages-search-results.blade.php" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>

					<span class="separator"></span>

					<ul class="notifications">
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
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
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
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="../pages/pages-user-profile.blade.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="../pages/pages-signin.blade.php"><i class="fa fa-power-off"></i> Logout</a>
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
									<li>
										<a href="../index.blade.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="../mailbox/mailbox-folder.blade.php">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Pages</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../pages/pages-signup.blade.php">
													 Sign Up
												</a>
											</li>
											<li>
												<a href="../pages/pages-signin.blade.php">
													 Sign In
												</a>
											</li>
											<li>
												<a href="../pages/pages-recover-password.blade.php">
													 Recover Password
												</a>
											</li>
											<li>
												<a href="../pages/pages-lock-screen.blade.php">
													 Locked Screen
												</a>
											</li>
											<li>
												<a href="../pages/pages-user-profile.blade.php">
													 User Profile
												</a>
											</li>
											<li>
												<a href="../pages/pages-session-timeout.blade.php">
													 Session Timeout
												</a>
											</li>
											<li>
												<a href="../pages/pages-calendar.blade.php">
													 Calendar
												</a>
											</li>
											<li>
												<a href="../pages/pages-timeline.blade.php">
													 Timeline
												</a>
											</li>
											<li>
												<a href="../pages/pages-media-gallery.blade.php">
													 Media Gallery
												</a>
											</li>
											<li>
												<a href="../pages/pages-invoice.blade.php">
													 Invoice
												</a>
											</li>
											<li>
												<a href="../pages/pages-blank.blade.php">
													 Blank Page
												</a>
											</li>
											<li>
												<a href="../pages/pages-404.blade.php">
													 404
												</a>
											</li>
											<li>
												<a href="../pages/pages-500.blade.php">
													 500
												</a>
											</li>
											<li>
												<a href="../pages/pages-log-viewer.blade.php">
													 Log Viewer
												</a>
											</li>
											<li>
												<a href="../pages/pages-search-results.blade.php">
													 Search Results
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>UI Elements</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../ui-elements/ui-elements-typography.blade.php">
													 Typography
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-icons.blade.php">
													 Icons
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-tabs.blade.php">
													 Tabs
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-panels.blade.php">
													 Panels
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-widgets.blade.php">
													 Widgets
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-portlets.blade.php">
													 Portlets
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-buttons.blade.php">
													 Buttons
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-alerts.blade.php">
													 Alerts
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-notifications.blade.php">
													 Notifications
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-modals.blade.php">
													 Modals
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-lightbox.blade.php">
													 Lightbox
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-progressbars.blade.php">
													 Progress Bars
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-sliders.blade.php">
													 Sliders
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-carousels.blade.php">
													 Carousels
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-accordions.blade.php">
													 Accordions
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-nestable.blade.php">
													 Nestable
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-tree-view.blade.php">
													 Tree View
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-grid-system.blade.php">
													 Grid System
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-charts.blade.php">
													 Charts
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-animations.blade.php">
													 Animations
												</a>
											</li>
											<li>
												<a href="../ui-elements/ui-elements-extra.blade.php">
													 Extra
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Forms</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.blade.php">
													 Basic
												</a>
											</li>
											<li>
												<a href="forms-advanced.blade.php">
													 Advanced
												</a>
											</li>
											<li>
												<a href="forms-validation.blade.php">
													 Validation
												</a>
											</li>
											<li>
												<a href="forms-layouts.blade.php">
													 Layouts
												</a>
											</li>
											<li class="nav-active">
												<a href="forms-wizard.blade.php">
													 Wizard
												</a>
											</li>
											<li>
												<a href="forms-code-editor.blade.php">
													 Code Editor
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Tables</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../table/tables-basic.blade.php">
													 Basic
												</a>
											</li>
											<li>
												<a href="../table/tables-advanced.blade.php">
													 Advanced
												</a>
											</li>
											<li>
												<a href="../table/tables-responsive.blade.php">
													 Responsive
												</a>
											</li>
											<li>
												<a href="../table/tables-editable.blade.php">
													 Editable
												</a>
											</li>
											<li>
												<a href="../table/tables-ajax.blade.php">
													 Ajax
												</a>
											</li>
											<li>
												<a href="../table/tables-pricing.blade.php">
													 Pricing
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../maps/maps-google-maps.blade.php">
													 Basic
												</a>
											</li>
											<li>
												<a href="../maps/maps-google-maps-builder.blade.php">
													 Map Builder
												</a>
											</li>
											<li>
												<a href="../maps/maps-vector.blade.php">
													 Vector
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Layouts</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../layouts/layouts-default.blade.php">
													 Default
												</a>
											</li>
											<li>
												<a href="../layouts/layouts-boxed.blade.php">
													 Boxed
												</a>
											</li>
											<li>
												<a href="../layouts/layouts-menu-collapsed.blade.php">
													 Menu Collapsed
												</a>
											</li>
											<li>
												<a href="../layouts/layouts-scroll.blade.php">
													 Scroll
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Menu Levels</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a>First Level</a>
											</li>
											<li class="nav-parent">
												<a>Second Level</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Third Level</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li>
														<a>Second Level Link #1</a>
													</li>
													<li>
														<a>Second Level Link #2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End <em class="not-included">(Not Included)</em></span>
										</a>
									</li>
								</ul>
							</nav>

							<hr class="separator" />

							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Porto HTML5 Template</a></li>
										<li><a href="#">Tucson Template</a></li>
										<li><a href="#">Porto Admin</a></li>
									</ul>
								</div>
							</div>

							<hr class="separator" />

							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Company Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Stat 1</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Form Wizard</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="../index.blade.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Wizard</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-6">
								<section class="panel form-wizard" id="w1">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Wizard</h2>
									</header>
									<div class="panel-body panel-body-nopadding">
										<div class="wizard-tabs">
											<ul class="wizard-steps">
												<li class="active">
													<a href="#w1-account" data-toggle="tab" class="text-center">
														<span class="badge hidden-xs">1</span>
														Account
													</a>
												</li>
												<li>
													<a href="#w1-profile" data-toggle="tab" class="text-center">
														<span class="badge hidden-xs">2</span>
														Profile
													</a>
												</li>
												<li>
													<a href="#w1-confirm" data-toggle="tab" class="text-center">
														<span class="badge hidden-xs">3</span>
														Confirm
													</a>
												</li>
											</ul>
										</div>
										<form class="form-horizontal" novalidate="novalidate">
											<div class="tab-content">
												<div id="w1-account" class="tab-pane active">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w1-username">Username</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="username" id="w1-username" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w1-password">Password</label>
														<div class="col-sm-8">
															<input type="password" class="form-control input-sm" name="password" id="w1-password" minlength="6" required>
														</div>
													</div>
												</div>
												<div id="w1-profile" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w1-first-name">First Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="first-name" id="w1-first-name" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w1-last-name">Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="last-name" id="w1-last-name" required>
														</div>
													</div>
												</div>
												<div id="w1-confirm" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w1-email">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="email" id="w1-email" required>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w1-terms" required>
																<label for="w1-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="panel-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fa fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden pull-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fa fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
							<div class="col-lg-6">
								<section class="panel form-wizard" id="w2">
									<div class="tabs">
										<ul class="nav nav-tabs nav-justify">
											<li class="active">
												<a href="#w2-account" data-toggle="tab" class="text-center">
													<span class="badge hidden-xs">1</span>
													Account
												</a>
											</li>
											<li>
												<a href="#w2-profile" data-toggle="tab" class="text-center">
													<span class="badge hidden-xs">2</span>
													Profile
												</a>
											</li>
											<li>
												<a href="#w2-confirm" data-toggle="tab" class="text-center">
													<span class="badge hidden-xs">3</span>
													Confirm
												</a>
											</li>
										</ul>
										<form class="form-horizontal" novalidate="novalidate">
											<div class="tab-content">
												<div id="w2-account" class="tab-pane active">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w2-username">Username</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" id="w2-username" name="username" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w2-password">Password</label>
														<div class="col-sm-8">
															<input type="password" class="form-control input-sm" name="password" id="w2-password" required minlength="6">
														</div>
													</div>
												</div>
												<div id="w2-profile" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w2-first-name">First Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="first-name" id="w2-first-name" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w2-last-name">Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="last-name" id="w2-last-name" required>
														</div>
													</div>
												</div>
												<div id="w2-confirm" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w2-email">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="email" id="w2-email" required>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w2-terms" required>
																<label for="w2-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="panel-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fa fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden pull-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fa fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<section class="panel form-wizard" id="w4">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Wizard</h2>
									</header>
									<div class="panel-body">
										<div class="wizard-progress wizard-progress-lg">
											<div class="steps-progress">
												<div class="progress-indicator"></div>
											</div>
											<ul class="wizard-steps">
												<li class="active">
													<a href="#w4-account" data-toggle="tab"><span>1</span>Account Info</a>
												</li>
												<li>
													<a href="#w4-profile" data-toggle="tab"><span>2</span>Profile Info</a>
												</li>
												<li>
													<a href="#w4-billing" data-toggle="tab"><span>3</span>Billing Info</a>
												</li>
												<li>
													<a href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
												</li>
											</ul>
										</div>

										<form class="form-horizontal" novalidate="novalidate">
											<div class="tab-content">
												<div id="w4-account" class="tab-pane active">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-username">Username</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="username" id="w4-username" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-password">Password</label>
														<div class="col-sm-9">
															<input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
														</div>
													</div>
												</div>
												<div id="w4-profile" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-first-name">First Name</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="first-name" id="w4-first-name" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-last-name">Last Name</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="last-name" id="w4-last-name" required>
														</div>
													</div>
												</div>
												<div id="w4-billing" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-cc">Card Number</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="cc-number" id="w4-cc" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="inputSuccess">Expiration</label>
														<div class="col-sm-5">
															<select class="form-control" name="exp-month" required>
																<option>January</option>
																<option>February</option>
																<option>March</option>
																<option>April</option>
																<option>May</option>
																<option>June</option>
																<option>July</option>
																<option>August</option>
																<option>September</option>
																<option>October</option>
																<option>November</option>
																<option>December</option>
															</select>
														</div>
														<div class="col-sm-4">
															<select class="form-control" name="exp-year" required>
																<option>2014</option>
																<option>2015</option>
																<option>2016</option>
																<option>2017</option>
																<option>2018</option>
																<option>2019</option>
																<option>2020</option>
																<option>2021</option>
																<option>2022</option>
															</select>
														</div>
													</div>
												</div>
												<div id="w4-confirm" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="w4-email">Email</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w4-terms" required>
																<label for="w4-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="panel-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fa fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden pull-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fa fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<section class="panel form-wizard" id="w3">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Wizard</h2>
									</header>
									<div class="panel-body">
										<div class="wizard-progress">
											<div class="steps-progress">
												<div class="progress-indicator"></div>
											</div>
											<ul>
												<li class="active">
													<a href="#w3-account" data-toggle="tab"><span>1</span>Account Info</a>
												</li>
												<li>
													<a href="#w3-profile" data-toggle="tab"><span>2</span>Profile Info</a>
												</li>
												<li>
													<a href="#w3-billing" data-toggle="tab"><span>3</span>Billing Info</a>
												</li>
												<li>
													<a href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
												</li>
											</ul>
										</div>
										<form class="form-horizontal" novalidate="novalidate">
											<div class="tab-content">
												<div id="w3-account" class="tab-pane active">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-username">Username</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="username" id="w3-username" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-password">Password</label>
														<div class="col-sm-8">
															<input type="password" class="form-control input-sm" name="password" id="w3-password" minlength="6" required>
														</div>
													</div>
												</div>
												<div id="w3-profile" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-first-name">First Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="first-name" id="w3-first-name">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-last-name">Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="last-name" id="w3-last-name">
														</div>
													</div>
												</div>
												<div id="w3-billing" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-cc">Card Number</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="cc-number" id="w3-cc" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="inputSuccess">Expiration</label>
														<div class="col-sm-4">
															<select class="form-control input-sm" name="exp-month" required>
																<option>January</option>
																<option>February</option>
																<option>March</option>
																<option>April</option>
																<option>May</option>
																<option>June</option>
																<option>July</option>
																<option>August</option>
																<option>September</option>
																<option>October</option>
																<option>November</option>
																<option>December</option>
															</select>
														</div>
														<div class="col-sm-4">
															<select class="form-control input-sm" name="exp-year" required>
																<option>2014</option>
																<option>2015</option>
																<option>2016</option>
																<option>2017</option>
																<option>2018</option>
																<option>2019</option>
																<option>2020</option>
																<option>2021</option>
																<option>2022</option>
															</select>
														</div>
													</div>
												</div>
												<div id="w3-confirm" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w3-email">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control input-sm" name="email" id="w3-email" required>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w3-terms" required>
																<label for="w3-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="panel-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fa fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden pull-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fa fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel form-wizard" id="w5">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Wizard</h2>
									</header>
									<div class="panel-body">
										<div class="wizard-tabs hidden">
											<ul class="wizard-steps">
												<li class="active">
													<a href="#w5-account" data-toggle="tab"><span class="badge">1</span>Account Info</a>
												</li>
												<li>
													<a href="#w5-profile" data-toggle="tab"><span class="badge">2</span>Profile Info</a>
												</li>
												<li>
													<a href="#w5-billing" data-toggle="tab"><span class="badge">3</span>Billing Info</a>
												</li>
												<li>
													<a href="#w5-confirm" data-toggle="tab"><span class="badge">4</span>Confirmation</a>
												</li>
											</ul>
										</div>
										<div class="progress progress-striped progress-xl m-md light">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
												<span class="sr-only">60%</span>
											</div>
										</div>
										<form class="form-horizontal" novalidate="novalidate">
											<div class="tab-content">
												<div id="w5-account" class="tab-pane active">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-username">Username</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="username" id="w5-username" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-password">Password</label>
														<div class="col-sm-8">
															<input type="password" class="form-control" name="password" id="w5-password" minlength="2" required>
														</div>
													</div>
												</div>
												<div id="w5-profile" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-first-name">First Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="first-name" id="w5-first-name" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-last-name">Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="last-name" id="w5-last-name" required>
														</div>
													</div>
												</div>
												<div id="w5-billing" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-cc">Card Number</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="cc-number" id="w5-cc" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="inputSuccess">Expiration</label>
														<div class="col-sm-4">
															<select class="form-control" name="exp-month" required>
																<option>January</option>
																<option>February</option>
																<option>March</option>
																<option>April</option>
																<option>May</option>
																<option>June</option>
																<option>July</option>
																<option>August</option>
																<option>September</option>
																<option>October</option>
																<option>November</option>
																<option>December</option>
															</select>
														</div>
														<div class="col-sm-4">
															<select class="form-control" name="exp-year" required>
																<option>2014</option>
																<option>2015</option>
																<option>2016</option>
																<option>2017</option>
																<option>2018</option>
																<option>2019</option>
																<option>2020</option>
																<option>2021</option>
																<option>2022</option>
															</select>
														</div>
													</div>
												</div>
												<div id="w5-confirm" class="tab-pane">
													<div class="form-group">
														<label class="col-sm-4 control-label" for="w5-email">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="email" id="w5-email" required>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w5-terms" required>
																<label for="w5-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="panel-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fa fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden pull-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fa fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
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
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
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
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/forms/examples.wizard.js"></script>
	</body>
</html>
