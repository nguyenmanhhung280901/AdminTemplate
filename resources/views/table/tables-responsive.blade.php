<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Responsive Tables | Okler Themes | Porto-Admin</title>
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
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Forms</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../forms/forms-basic.blade.php">
													 Basic
												</a>
											</li>
											<li>
												<a href="../forms/forms-advanced.blade.php">
													 Advanced
												</a>
											</li>
											<li>
												<a href="../forms/forms-validation.blade.php">
													 Validation
												</a>
											</li>
											<li>
												<a href="../forms/forms-layouts.blade.php">
													 Layouts
												</a>
											</li>
											<li>
												<a href="../forms/forms-wizard.blade.php">
													 Wizard
												</a>
											</li>
											<li>
												<a href="../forms/forms-code-editor.blade.php">
													 Code Editor
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Tables</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-basic.blade.php">
													 Basic
												</a>
											</li>
											<li>
												<a href="tables-advanced.blade.php">
													 Advanced
												</a>
											</li>
											<li class="nav-active">
												<a href="tables-responsive.blade.php">
													 Responsive
												</a>
											</li>
											<li>
												<a href="tables-editable.blade.php">
													 Editable
												</a>
											</li>
											<li>
												<a href="tables-ajax.blade.php">
													 Ajax
												</a>
											</li>
											<li>
												<a href="tables-pricing.blade.php">
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
						<h2>Responsive Tables</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="../index.blade.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Responsive</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="alert alert-info">
							Resize the browser to see the responsiveness in action.
						</div>

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>

								<h2 class="panel-title">Bootstrap Responsive</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>Code</th>
												<th>Company</th>
												<th class="text-right">Price</th>
												<th class="text-right">Change</th>
												<th class="text-right">Change %</th>
												<th class="text-right">Open</th>
												<th class="text-right">High</th>
												<th class="text-right">Low</th>
												<th class="text-right">Volume</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>AAC</td>
												<td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
												<td class="text-right">$1.38</td>
												<td class="text-right">-0.01</td>
												<td class="text-right">-0.36%</td>
												<td class="text-right">$1.39</td>
												<td class="text-right">$1.39</td>
												<td class="text-right">$1.38</td>
												<td class="text-right">9,395</td>
											</tr>
											<tr>
												<td>AAD</td>
												<td>ARDENT LEISURE GROUP</td>
												<td class="text-right">$1.15</td>
												<td class="text-right">  +0.02</td>
												<td class="text-right">1.32%</td>
												<td class="text-right">$1.14</td>
												<td class="text-right">$1.15</td>
												<td class="text-right">$1.13</td>
												<td class="text-right">56,431</td>
											</tr>
											<tr>
												<td>AAX</td>
												<td>AUSENCO LIMITED</td>
												<td class="text-right">$4.00</td>
												<td class="text-right">-0.04</td>
												<td class="text-right">-0.99%</td>
												<td class="text-right">$4.01</td>
												<td class="text-right">$4.05</td>
												<td class="text-right">$4.00</td>
												<td class="text-right">90,641</td>
											</tr>
											<tr>
												<td>ABC</td>
												<td>ADELAIDE BRIGHTON LIMITED</td>
												<td class="text-right">$3.00</td>
												<td class="text-right">  +0.06</td>
												<td class="text-right">2.04%</td>
												<td class="text-right">$2.98</td>
												<td class="text-right">$3.00</td>
												<td class="text-right">$2.96</td>
												<td class="text-right">862,518</td>
											</tr>
											<tr>
												<td>ABP</td>
												<td>ABACUS PROPERTY GROUP</td>
												<td class="text-right">$1.91</td>
												<td class="text-right">0.00</td>
												<td class="text-right">0.00%</td>
												<td class="text-right">$1.92</td>
												<td class="text-right">$1.93</td>
												<td class="text-right">$1.90</td>
												<td class="text-right">595,701</td>
											</tr>
											<tr>
												<td>ABY</td>
												<td>ADITYA BIRLA MINERALS LIMITED</td>
												<td class="text-right">$0.77</td>
												<td class="text-right">  +0.02</td>
												<td class="text-right">2.00%</td>
												<td class="text-right">$0.76</td>
												<td class="text-right">$0.77</td>
												<td class="text-right">$0.76</td>
												<td class="text-right">54,567</td>
											</tr>
											<tr>
												<td>ACR</td>
												<td>ACRUX LIMITED</td>
												<td class="text-right">$3.71</td>
												<td class="text-right">  +0.01</td>
												<td class="text-right">0.14%</td>
												<td class="text-right">$3.70</td>
												<td class="text-right">$3.72</td>
												<td class="text-right">$3.68</td>
												<td class="text-right">191,373</td>
											</tr>
											<tr>
												<td>ADU</td>
												<td>ADAMUS RESOURCES LIMITED</td>
												<td class="text-right">$0.72</td>
												<td class="text-right">0.00</td>
												<td class="text-right">0.00%</td>
												<td class="text-right">$0.73</td>
												<td class="text-right">$0.74</td>
												<td class="text-right">$0.72</td>
												<td class="text-right">8,602,291</td>
											</tr>
											<tr>
												<td>AGG</td>
												<td>ANGLOGOLD ASHANTI LIMITED</td>
												<td class="text-right">$7.81</td>
												<td class="text-right">-0.22</td>
												<td class="text-right">-2.74%</td>
												<td class="text-right">$7.82</td>
												<td class="text-right">$7.82</td>
												<td class="text-right">$7.81</td>
												<td class="text-right">148</td>
											</tr>
											<tr>
												<td>AGK</td>
												<td>AGL ENERGY LIMITED</td>
												<td class="text-right">$13.82</td>
												<td class="text-right">  +0.02</td>
												<td class="text-right">0.14%</td>
												<td class="text-right">$13.83</td>
												<td class="text-right">$13.83</td>
												<td class="text-right">$13.67</td>
												<td class="text-right">846,403</td>
											</tr>
											<tr>
												<td>AGO</td>
												<td>ATLAS IRON LIMITED</td>
												<td class="text-right">$3.17</td>
												<td class="text-right">-0.02</td>
												<td class="text-right">-0.47%</td>
												<td class="text-right">$3.11</td>
												<td class="text-right">$3.22</td>
												<td class="text-right">$3.10</td>
												<td class="text-right">5,416,303</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>

								<h2 class="panel-title">Unseen Column</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
									<thead>
										<tr>
											<th>Code</th>
											<th class="hidden-xs hidden-sm">Company</th>
											<th class="text-right">Price</th>
											<th class="text-right hidden-xs hidden-sm">Change</th>
											<th class="text-right hidden-xs">Change %</th>
											<th class="text-right">Open</th>
											<th class="text-right hidden-xs hidden-sm">High</th>
											<th class="text-right hidden-xs hidden-sm">Low</th>
											<th class="text-right">Volume</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>AAC</td>
											<td class="hidden-xs hidden-sm">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
											<td class="text-right">$1.38</td>
											<td class="text-right hidden-xs hidden-sm">-0.01</td>
											<td class="text-right hidden-xs">-0.36%</td>
											<td class="text-right">$1.39</td>
											<td class="text-right hidden-xs hidden-sm">$1.39</td>
											<td class="text-right hidden-xs hidden-sm">$1.38</td>
											<td class="text-right">9,395</td>
										</tr>
										<tr>
											<td>AAD</td>
											<td class="hidden-xs hidden-sm">ARDENT LEISURE GROUP</td>
											<td class="text-right">$1.15</td>
											<td class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td class="text-right hidden-xs">1.32%</td>
											<td class="text-right">$1.14</td>
											<td class="text-right hidden-xs hidden-sm">$1.15</td>
											<td class="text-right hidden-xs hidden-sm">$1.13</td>
											<td class="text-right">56,431</td>
										</tr>
										<tr>
											<td>AAX</td>
											<td class="hidden-xs hidden-sm">AUSENCO LIMITED</td>
											<td class="text-right">$4.00</td>
											<td class="text-right hidden-xs hidden-sm">-0.04</td>
											<td class="text-right hidden-xs">-0.99%</td>
											<td class="text-right">$4.01</td>
											<td class="text-right hidden-xs hidden-sm">$4.05</td>
											<td class="text-right hidden-xs hidden-sm">$4.00</td>
											<td class="text-right">90,641</td>
										</tr>
										<tr>
											<td>ABC</td>
											<td class="hidden-xs hidden-sm">ADELAIDE BRIGHTON LIMITED</td>
											<td class="text-right">$3.00</td>
											<td class="text-right hidden-xs hidden-sm">  +0.06</td>
											<td class="text-right hidden-xs">2.04%</td>
											<td class="text-right">$2.98</td>
											<td class="text-right hidden-xs hidden-sm">$3.00</td>
											<td class="text-right hidden-xs hidden-sm">$2.96</td>
											<td class="text-right">862,518</td>
										</tr>
										<tr>
											<td>ABP</td>
											<td class="hidden-xs hidden-sm">ABACUS PROPERTY GROUP</td>
											<td class="text-right">$1.91</td>
											<td class="text-right hidden-xs hidden-sm">0.00</td>
											<td class="text-right hidden-xs">0.00%</td>
											<td class="text-right">$1.92</td>
											<td class="text-right hidden-xs hidden-sm">$1.93</td>
											<td class="text-right hidden-xs hidden-sm">$1.90</td>
											<td class="text-right">595,701</td>
										</tr>
										<tr>
											<td>ABY</td>
											<td class="hidden-xs hidden-sm">ADITYA BIRLA MINERALS LIMITED</td>
											<td class="text-right">$0.77</td>
											<td class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td class="text-right hidden-xs">2.00%</td>
											<td class="text-right">$0.76</td>
											<td class="text-right hidden-xs hidden-sm">$0.77</td>
											<td class="text-right hidden-xs hidden-sm">$0.76</td>
											<td class="text-right">54,567</td>
										</tr>
										<tr>
											<td>ACR</td>
											<td class="hidden-xs hidden-sm">ACRUX LIMITED</td>
											<td class="text-right">$3.71</td>
											<td class="text-right hidden-xs hidden-sm">  +0.01</td>
											<td class="text-right hidden-xs">0.14%</td>
											<td class="text-right">$3.70</td>
											<td class="text-right hidden-xs hidden-sm">$3.72</td>
											<td class="text-right hidden-xs hidden-sm">$3.68</td>
											<td class="text-right">191,373</td>
										</tr>
										<tr>
											<td>ADU</td>
											<td class="hidden-xs hidden-sm">ADAMUS RESOURCES LIMITED</td>
											<td class="text-right">$0.72</td>
											<td class="text-right hidden-xs hidden-sm">0.00</td>
											<td class="text-right hidden-xs">0.00%</td>
											<td class="text-right">$0.73</td>
											<td class="text-right hidden-xs hidden-sm">$0.74</td>
											<td class="text-right hidden-xs hidden-sm">$0.72</td>
											<td class="text-right">8,602,291</td>
										</tr>
										<tr>
											<td>AGG</td>
											<td class="hidden-xs hidden-sm">ANGLOGOLD ASHANTI LIMITED</td>
											<td class="text-right">$7.81</td>
											<td class="text-right hidden-xs hidden-sm">-0.22</td>
											<td class="text-right hidden-xs">-2.74%</td>
											<td class="text-right">$7.82</td>
											<td class="text-right hidden-xs hidden-sm">$7.82</td>
											<td class="text-right hidden-xs hidden-sm">$7.81</td>
											<td class="text-right">148</td>
										</tr>
										<tr>
											<td>AGK</td>
											<td class="hidden-xs hidden-sm">AGL ENERGY LIMITED</td>
											<td class="text-right">$13.82</td>
											<td class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td class="text-right hidden-xs">0.14%</td>
											<td class="text-right">$13.83</td>
											<td class="text-right hidden-xs hidden-sm">$13.83</td>
											<td class="text-right hidden-xs hidden-sm">$13.67</td>
											<td class="text-right">846,403</td>
										</tr>
										<tr>
											<td>AGO</td>
											<td class="hidden-xs hidden-sm">ATLAS IRON LIMITED</td>
											<td class="text-right">$3.17</td>
											<td class="text-right hidden-xs hidden-sm">-0.02</td>
											<td class="text-right hidden-xs">-0.47%</td>
											<td class="text-right">$3.11</td>
											<td class="text-right hidden-xs hidden-sm">$3.22</td>
											<td class="text-right hidden-xs hidden-sm">$3.10</td>
											<td class="text-right">5,416,303</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>

								<h2 class="panel-title">No More Tables</h2>
							</header>
							<div class="panel-body">
								<table class="table table-no-more table-bordered table-striped mb-none">
									<thead>
										<tr>
											<th>Code</th>
											<th class="hidden-xs hidden-sm">Company</th>
											<th class="text-right">Price</th>
											<th class="text-right hidden-xs hidden-sm">Change</th>
											<th class="text-right">Change %</th>
											<th class="text-right">Open</th>
											<th class="text-right hidden-xs hidden-sm">High</th>
											<th class="text-right hidden-xs hidden-sm">Low</th>
											<th class="text-right">Volume</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Code">AAC</td>
											<td data-title="Company" class="hidden-xs hidden-sm">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
											<td data-title="Price" class="text-right">$1.38</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">-0.01</td>
											<td data-title="Change %" class="text-right">-0.36%</td>
											<td data-title="Open" class="text-right">$1.39</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$1.39</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$1.38</td>
											<td data-title="Volume" class="text-right">9,395</td>
										</tr>
										<tr>
											<td data-title="Code">AAD</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ARDENT LEISURE GROUP</td>
											<td data-title="Price" class="text-right">$1.15</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td data-title="Change %" class="text-right">1.32%</td>
											<td data-title="Open" class="text-right">$1.14</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$1.15</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$1.13</td>
											<td data-title="Volume" class="text-right">56,431</td>
										</tr>
										<tr>
											<td data-title="Code">AAX</td>
											<td data-title="Company" class="hidden-xs hidden-sm">AUSENCO LIMITED</td>
											<td data-title="Price" class="text-right">$4.00</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">-0.04</td>
											<td data-title="Change %" class="text-right">-0.99%</td>
											<td data-title="Open" class="text-right">$4.01</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$4.05</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$4.00</td>
											<td data-title="Volume" class="text-right">90,641</td>
										</tr>
										<tr>
											<td data-title="Code">ABC</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ADELAIDE BRIGHTON LIMITED</td>
											<td data-title="Price" class="text-right">$3.00</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">  +0.06</td>
											<td data-title="Change %" class="text-right">2.04%</td>
											<td data-title="Open" class="text-right">$2.98</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$3.00</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$2.96</td>
											<td data-title="Volume" class="text-right">862,518</td>
										</tr>
										<tr>
											<td data-title="Code">ABP</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ABACUS PROPERTY GROUP</td>
											<td data-title="Price" class="text-right">$1.91</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">0.00</td>
											<td data-title="Change %" class="text-right">0.00%</td>
											<td data-title="Open" class="text-right">$1.92</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$1.93</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$1.90</td>
											<td data-title="Volume" class="text-right">595,701</td>
										</tr>
										<tr>
											<td data-title="Code">ABY</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ADITYA BIRLA MINERALS LIMITED</td>
											<td data-title="Price" class="text-right">$0.77</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td data-title="Change %" class="text-right">2.00%</td>
											<td data-title="Open" class="text-right">$0.76</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$0.77</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$0.76</td>
											<td data-title="Volume" class="text-right">54,567</td>
										</tr>
										<tr>
											<td data-title="Code">ACR</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ACRUX LIMITED</td>
											<td data-title="Price" class="text-right">$3.71</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">  +0.01</td>
											<td data-title="Change %" class="text-right">0.14%</td>
											<td data-title="Open" class="text-right">$3.70</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$3.72</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$3.68</td>
											<td data-title="Volume" class="text-right">191,373</td>
										</tr>
										<tr>
											<td data-title="Code">ADU</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ADAMUS RESOURCES LIMITED</td>
											<td data-title="Price" class="text-right">$0.72</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">0.00</td>
											<td data-title="Change %" class="text-right">0.00%</td>
											<td data-title="Open" class="text-right">$0.73</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$0.74</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$0.72</td>
											<td data-title="Volume" class="text-right">8,602,291</td>
										</tr>
										<tr>
											<td data-title="Code">AGG</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ANGLOGOLD ASHANTI LIMITED</td>
											<td data-title="Price" class="text-right">$7.81</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">-0.22</td>
											<td data-title="Change %" class="text-right">-2.74%</td>
											<td data-title="Open" class="text-right">$7.82</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$7.82</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$7.81</td>
											<td data-title="Volume" class="text-right">148</td>
										</tr>
										<tr>
											<td data-title="Code">AGK</td>
											<td data-title="Company" class="hidden-xs hidden-sm">AGL ENERGY LIMITED</td>
											<td data-title="Price" class="text-right">$13.82</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">  +0.02</td>
											<td data-title="Change %" class="text-right">0.14%</td>
											<td data-title="Open" class="text-right">$13.83</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$13.83</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$13.67</td>
											<td data-title="Volume" class="text-right">846,403</td>
										</tr>
										<tr>
											<td data-title="Code">AGO</td>
											<td data-title="Company" class="hidden-xs hidden-sm">ATLAS IRON LIMITED</td>
											<td data-title="Price" class="text-right">$3.17</td>
											<td data-title="Change" class="text-right hidden-xs hidden-sm">-0.02</td>
											<td data-title="Change %" class="text-right">-0.47%</td>
											<td data-title="Open" class="text-right">$3.11</td>
											<td data-title="High" class="text-right hidden-xs hidden-sm">$3.22</td>
											<td data-title="Low" class="text-right hidden-xs hidden-sm">$3.10</td>
											<td data-title="Volume" class="text-right">5,416,303</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
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

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>
