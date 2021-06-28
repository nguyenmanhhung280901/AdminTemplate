<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Charts | Okler Themes | Porto-Admin</title>
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
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

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
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>UI Elements</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.blade.php">
													 Typography
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.blade.php">
													 Icons
												</a>
											</li>
											<li>
												<a href="ui-elements-tabs.blade.php">
													 Tabs
												</a>
											</li>
											<li>
												<a href="ui-elements-panels.blade.php">
													 Panels
												</a>
											</li>
											<li>
												<a href="ui-elements-widgets.blade.php">
													 Widgets
												</a>
											</li>
											<li>
												<a href="ui-elements-portlets.blade.php">
													 Portlets
												</a>
											</li>
											<li>
												<a href="ui-elements-buttons.blade.php">
													 Buttons
												</a>
											</li>
											<li>
												<a href="ui-elements-alerts.blade.php">
													 Alerts
												</a>
											</li>
											<li>
												<a href="ui-elements-notifications.blade.php">
													 Notifications
												</a>
											</li>
											<li>
												<a href="ui-elements-modals.blade.php">
													 Modals
												</a>
											</li>
											<li>
												<a href="ui-elements-lightbox.blade.php">
													 Lightbox
												</a>
											</li>
											<li>
												<a href="ui-elements-progressbars.blade.php">
													 Progress Bars
												</a>
											</li>
											<li>
												<a href="ui-elements-sliders.blade.php">
													 Sliders
												</a>
											</li>
											<li>
												<a href="ui-elements-carousels.blade.php">
													 Carousels
												</a>
											</li>
											<li>
												<a href="ui-elements-accordions.blade.php">
													 Accordions
												</a>
											</li>
											<li>
												<a href="ui-elements-nestable.blade.php">
													 Nestable
												</a>
											</li>
											<li>
												<a href="ui-elements-tree-view.blade.php">
													 Tree View
												</a>
											</li>
											<li>
												<a href="ui-elements-grid-system.blade.php">
													 Grid System
												</a>
											</li>
											<li class="nav-active">
												<a href="ui-elements-charts.blade.php">
													 Charts
												</a>
											</li>
											<li>
												<a href="ui-elements-animations.blade.php">
													 Animations
												</a>
											</li>
											<li>
												<a href="ui-elements-extra.blade.php">
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
						<h2>Charts</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="../index.blade.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>UI Elements</span></li>
								<li><span>Charts</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<h2 class="mt-none">Flot Charts</h2>
						<p class="mb-lg">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>

						<div class="row">
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Basic Chart</h2>
										<p class="panel-subtitle">You don't have to do much to get an attractive plot. Create a placeholder, make sure it has dimensions (so Flot knows at what size to draw the plot), then call the plot function with your data.</p>
									</header>
									<div class="panel-body">

										<!-- Flot: Basic -->
										<div class="chart chart-md" id="flotBasic"></div>
										<script type="text/javascript">

											var flotBasicData = [{
												data: [
													[0, 170],
													[1, 169],
													[2, 173],
													[3, 188],
													[4, 147],
													[5, 113],
													[6, 128],
													[7, 169],
													[8, 173],
													[9, 128],
													[10, 128]
												],
												label: "Series 1",
												color: "#0088cc"
											}, {
												data: [
													[0, 115],
													[1, 124],
													[2, 114],
													[3, 121],
													[4, 115],
													[5, 83],
													[6, 102],
													[7, 148],
													[8, 147],
													[9, 103],
													[10, 113]
												],
												label: "Series 2",
												color: "#2baab1"
											}, {
												data: [
													[0, 70],
													[1, 69],
													[2, 73],
													[3, 88],
													[4, 47],
													[5, 13],
													[6, 28],
													[7, 69],
													[8, 73],
													[9, 28],
													[10, 28]
												],
												label: "Series 3",
												color: "#734ba9"
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Real-Time Chart</h2>
										<p class="panel-subtitle">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
									</header>
									<div class="panel-body">

										<!-- Flot: Curves -->
										<div class="chart chart-md" id="flotRealTime"></div>

									</div>
								</section>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Bars Chart</h2>
										<p class="panel-subtitle">With the categories plugin you can plot categories/textual data easily.</p>
									</header>
									<div class="panel-body">

										<!-- Flot: Bars -->
										<div class="chart chart-md" id="flotBars"></div>
										<script type="text/javascript">

											var flotBarsData = [
												["Jan", 28],
												["Feb", 42],
												["Mar", 25],
												["Apr", 23],
												["May", 37],
												["Jun", 33],
												["Jul", 18],
												["Aug", 14],
												["Sep", 18],
												["Oct", 15],
												["Nov", 4],
												["Dec", 7]
											];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Pie Chart</h2>
										<p class="panel-subtitle">Default Pie Chart</p>
									</header>
									<div class="panel-body">

										<!-- Flot: Pie -->
										<div class="chart chart-md" id="flotPie"></div>
										<script type="text/javascript">

											var flotPieData = [{
												label: "Series 1",
												data: [
													[1, 60]
												],
												color: '#0088cc'
											}, {
												label: "Series 2",
												data: [
													[1, 10]
												],
												color: '#2baab1'
											}, {
												label: "Series 3",
												data: [
													[1, 15]
												],
												color: '#734ba9'
											}, {
												label: "Series 4",
												data: [
													[1, 15]
												],
												color: '#E36159'
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
						</div>

						<h2>Morris Charts</h2>
						<p class="mb-lg">Good-looking charts shouldn't be difficult.</p>

						<div class="row">
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Line Chart</h2>
										<p class="panel-subtitle">A style of chart that is created by connecting a series of data points together with a line.</p>
									</header>
									<div class="panel-body">

										<!-- Morris: Line -->
										<div class="chart chart-md" id="morrisLine"></div>
										<script type="text/javascript">

											var morrisLineData = [{
												y: '2006',
												a: 100,
												b: 90
											}, {
												y: '2007',
												a: 75,
												b: 65
											}, {
												y: '2008',
												a: 50,
												b: 40
											}, {
												y: '2009',
												a: 75,
												b: 65
											}, {
												y: '2010',
												a: 50,
												b: 40
											}, {
												y: '2011',
												a: 75,
												b: 65
											}, {
												y: '2012',
												a: 100,
												b: 90
											}, {
												y: '2013',
												a: 75,
												b: 65
											}, {
												y: '2014',
												a: 100,
												b: 90
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Donut Chart</h2>
										<p class="panel-subtitle">Donut Chart are functionally identical to pie charts.</p>
									</header>
									<div class="panel-body">

										<!-- Morris: Donut -->
										<div class="chart chart-md" id="morrisDonut"></div>
										<script type="text/javascript">

											var morrisDonutData = [{
												label: "Porto Template",
												value: 32
											}, {
												label: "Tucson Template",
												value: 18
											}, {
												label: "Porto Admin",
												value: 20
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Bar Chart</h2>
										<p class="panel-subtitle">A bar chart is a way of summarizing a set of categorical data.</p>
									</header>
									<div class="panel-body">

										<!-- Morris: Bar -->
										<div class="chart chart-md" id="morrisBar"></div>
										<script type="text/javascript">

											var morrisBarData = [{
												y: '2004',
												a: 10,
												b: 30
											}, {
												y: '2005',
												a: 100,
												b: 25
											}, {
												y: '2006',
												a: 60,
												b: 25
											}, {
												y: '2007',
												a: 75,
												b: 35
											}, {
												y: '2008',
												a: 90,
												b: 20
											}, {
												y: '2009',
												a: 75,
												b: 15
											}, {
												y: '2010',
												a: 50,
												b: 10
											}, {
												y: '2011',
												a: 75,
												b: 25
											}, {
												y: '2012',
												a: 30,
												b: 10
											}, {
												y: '2013',
												a: 75,
												b: 5
											}, {
												y: '2014',
												a: 60,
												b: 8
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Stacked Chart</h2>
										<p class="panel-subtitle">Stacked Bar Chart.</p>
									</header>
									<div class="panel-body">

										<!-- Morris: Area -->
										<div class="chart chart-md" id="morrisStacked"></div>
										<script type="text/javascript">

											var morrisStackedData = [{
												y: '2004',
												a: 10,
												b: 30
											}, {
												y: '2005',
												a: 100,
												b: 25
											}, {
												y: '2006',
												a: 60,
												b: 25
											}, {
												y: '2007',
												a: 75,
												b: 35
											}, {
												y: '2008',
												a: 90,
												b: 20
											}, {
												y: '2009',
												a: 75,
												b: 15
											}, {
												y: '2010',
												a: 50,
												b: 10
											}, {
												y: '2011',
												a: 75,
												b: 25
											}, {
												y: '2012',
												a: 30,
												b: 10
											}, {
												y: '2013',
												a: 75,
												b: 5
											}, {
												y: '2014',
												a: 60,
												b: 8
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Area Chart</h2>
										<p class="panel-subtitle">An area chart or area graph displays graphically quantitive data.</p>
									</header>
									<div class="panel-body">

										<!-- Morris: Area -->
										<div class="chart chart-md" id="morrisArea"></div>
										<script type="text/javascript">

											var morrisAreaData = [{
												y: '2004',
												a: 10,
												b: 30
											}, {
												y: '2005',
												a: 100,
												b: 25
											}, {
												y: '2006',
												a: 60,
												b: 25
											}, {
												y: '2007',
												a: 75,
												b: 35
											}, {
												y: '2008',
												a: 90,
												b: 20
											}, {
												y: '2009',
												a: 75,
												b: 15
											}, {
												y: '2010',
												a: 50,
												b: 10
											}, {
												y: '2011',
												a: 75,
												b: 25
											}, {
												y: '2012',
												a: 30,
												b: 10
											}, {
												y: '2013',
												a: 75,
												b: 5
											}, {
												y: '2014',
												a: 60,
												b: 8
											}];

											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<h2>Circular Charts</h2>
								<p class="mb-lg">Easy pie chart is a jQuery plugin that uses the canvas element to render simple pie charts for single values.</p>

								<div class="row">
									<div class="col-md-12">
										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>

												<h2 class="panel-title">Easy Pie Chart</h2>
												<p class="panel-subtitle">Lightweight jQuery plugin to render and animate nice pie charts with the HTML5 canvas element.</p>
											</header>
											<div class="panel-body">
												<div class="row text-center">
													<div class="col-md-6">
														<div class="circular-bar">
															<div class="circular-bar-chart" data-percent="85" data-plugin-options='{ "barColor": "#0088CC", "delay": 300 }'>
																<strong>Design</strong>
																<label><span class="percent">85</span>%</label>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="circular-bar">
															<div class="circular-bar-chart" data-percent="60" data-plugin-options='{ "barColor": "#2BAAB1", "delay": 600 }'>
																<strong>HTML</strong>
																<label><span class="percent">60</span>%</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h2>Gauge Charts</h2>
								<p class="mb-lg">Animated Gauge Charts</p>

								<div class="row">
									<div class="col-md-12">
										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>

												<h2 class="panel-title">Gauge</h2>
												<p class="panel-subtitle">100% native and cool looking animated JavaScript/CoffeScript gauge.</p>
											</header>
											<div class="panel-body">
												<div class="row text-center">
													<div class="col-md-6">
														<div class="gauge-chart">
															<canvas id="gaugeBasic" width="180" height="110" data-plugin-options='{ "value": 2150, "maxValue": 3000 }'></canvas>
															<strong>Design</strong>
															<label id="gaugeBasicTextfield"></label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="gauge-chart">
															<canvas id="gaugeAlternative" width="180" height="110" data-plugin-options='{ "value": 1350, "maxValue": 3000 }'></canvas>
															<strong>HTML</strong>
															<label id="gaugeAlternativeTextfield"></label>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<h2>Liquid Charts</h2>
								<p class="mb-lg">Adds animated liquid charts.</p>

								<div class="row">
									<div class="col-md-12">
										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>

												<h2 class="panel-title">Liquid Meter</h2>
												<p class="panel-subtitle">Exclusive Plug-in by Okler Themes</p>
											</header>
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<meter min="0" max="100" value="35" id="meter"></meter>
													</div>
													<div class="col-md-6">
														<meter min="0" max="100" value="85" id="meterDark"></meter>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h2>Small Inline Charts</h2>
								<p class="mb-lg">Adds tiny charts called sparklines.</p>

								<div class="row">
									<div class="col-md-12">
										<section class="panel">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="fa fa-caret-down"></a>
													<a href="#" class="fa fa-times"></a>
												</div>

												<h2 class="panel-title">Sparklines</h2>
												<p class="panel-subtitle">This jQuery plugin generates sparklines (small inline charts).</p>
											</header>
											<div class="panel-body">
												<div class="row">
													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart" id="sparklineLine"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>1567.89</strong>
															</div>
															<script type="text/javascript">
																var sparklineLineData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
															</script>
														</div>
													</div>

													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart" id="sparklineBar"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>5000</strong>
															</div>
															<script type="text/javascript">
																var sparklineBarData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
															</script>
														</div>
													</div>

													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart" id="sparklineTristate"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>1567.89</strong>
															</div>
															<script type="text/javascript">
																var sparklineTristateData = [1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1];
															</script>
														</div>
													</div>

													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart" id="sparklineDiscrete"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>1567.89</strong>
															</div>
															<script type="text/javascript">
																var sparklineDiscreteData = [5, 6, 7, 9, 10, 5, 3, 2, 2, 4, 6, 7];
															</script>
														</div>
													</div>

													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart" id="sparklineBullet"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>1567.89</strong>
															</div>
															<script type="text/javascript">
																var sparklineBulletData = [10, 12, 12, 9, 7];
															</script>
														</div>
													</div>

													<div class="col-xs-6 col-lg-4">
														<div class="small-chart-wrapper">
															<div class="small-chart text-center" id="sparklinePie"></div>
															<div class="small-chart-info">
																<label>Average</label>
																<strong>1567.89</strong>
															</div>
															<script type="text/javascript">
																var sparklinePieData = [1, 1, 2];
															</script>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
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
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/ui-elements/examples.charts.js"></script>
	</body>
</html>