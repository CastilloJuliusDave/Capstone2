<?php
	include 'core/init.php';

	if (isset($_SESSION['id'])) {
		$emp_id = $_SESSION['id'];
		$u_type = $_SESSION['type'];
	}
		if (!$user->get_session()) {
		header("location:index.php");
	}

	if (isset($_GET['logout'])) {
		$user->user_logout();
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">

    <link href ="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href ="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href ="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href ="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href ="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href ="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href ="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href ="assets/css/main.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
  </head>
  <body class="menu-position-side menu-side-left full-screen">
	<div class="all-wrapper solid-bg-all">
		<div class="search-with-suggestions-w">
			<div class="search-with-suggestions-modal">
				<div class="element-search">
				  <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
					<div class="close-search-suggestions">
					<i class="os-icon os-icon-x"></i>
					</div>
				</div>
				<div class="search-suggestions-group">
				  <div class="ssg-header">
				    <div class="ssg-icon">
					 <div class="os-icon os-icon-box"></div>
				    </div>
				    <div class="ssg-name">
					 Projects
				    </div>
				    <div class="ssg-info">
					 24 Total
				    </div>
				  </div>
				  <div class="ssg-content">
				    <div class="ssg-items ssg-items-boxed">
					 <a class="ssg-item" href="users_profile_big.html">
					   <div class="item-media" style="background-image: url(img/company6.png)"></div>
					   <div class="item-name">
						Integ<span>ration</span> with API
					   </div>
					 </a><a class="ssg-item" href="users_profile_big.html">
					   <div class="item-media" style="background-image: url(img/company7.png)"></div>
					   <div class="item-name">
						Deve<span>lopm</span>ent Project
					   </div>
					 </a>
				    </div>
				  </div>
				</div>
				<div class="search-suggestions-group">
				  <div class="ssg-header">
				    <div class="ssg-icon">
					 <div class="os-icon os-icon-users"></div>
				    </div>
				    <div class="ssg-name">
					 Customers
				    </div>
				    <div class="ssg-info">
					 12 Total
				    </div>
				  </div>
				  <div class="ssg-content">
				    <div class="ssg-items ssg-items-list">
					 <a class="ssg-item" href="users_profile_big.html">
					   <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
					   <div class="item-name">
						John Ma<span>yer</span>s
					   </div>
					 </a><a class="ssg-item" href="users_profile_big.html">
					   <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
					   <div class="item-name">
						Th<span>omas</span> Mullier
					   </div>
					 </a><a class="ssg-item" href="users_profile_big.html">
					   <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
					   <div class="item-name">
						Kim C<span>olli</span>ns
					   </div>
					 </a>
				    </div>
				  </div>
				</div>
				<div class="search-suggestions-group">
				  <div class="ssg-header">
				    <div class="ssg-icon">
					 <div class="os-icon os-icon-folder"></div>
				    </div>
				    <div class="ssg-name">
					 Files
				    </div>
				    <div class="ssg-info">
					 17 Total
				    </div>
				  </div>
				  <div class="ssg-content">
				    <div class="ssg-items ssg-items-blocks">
					 <a class="ssg-item" href="#">
					   <div class="item-icon">
						<i class="os-icon os-icon-file-text"></i>
					   </div>
					   <div class="item-name">
						Work<span>Not</span>e.txt
					   </div>
					 </a><a class="ssg-item" href="#">
					   <div class="item-icon">
						<i class="os-icon os-icon-film"></i>
					   </div>
					   <div class="item-name">
						V<span>ideo</span>.avi
					   </div>
					 </a><a class="ssg-item" href="#">
					   <div class="item-icon">
						<i class="os-icon os-icon-database"></i>
					   </div>
					   <div class="item-name">
						User<span>Tabl</span>e.sql
					   </div>
					 </a><a class="ssg-item" href="#">
					   <div class="item-icon">
						<i class="os-icon os-icon-image"></i>
					   </div>
					   <div class="item-name">
						wed<span>din</span>g.jpg
					   </div>
					 </a>
				    </div>
				    <div class="ssg-nothing-found">
					 <div class="icon-w">
					   <i class="os-icon os-icon-eye-off"></i>
					 </div>
					 <span>No files were found. Try changing your query...</span>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="layout-w">
		   <!--------------------
		   START - Mobile Menu
		   -------------------->
			<div class="menu-mobile menu-activated-on-click color-scheme-dark">
				<div class="mm-logo-buttons-w">
				  <a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
				  <div class="mm-buttons">
				    <div class="content-panel-open">
					 <div class="os-icon os-icon-grid-circles"></div>
				    </div>
				    <div class="mobile-menu-trigger">
					 <div class="os-icon os-icon-hamburger-menu-1"></div>
				    </div>
				  </div>
				</div>
				<div class="menu-and-user">
				  <div class="logged-user-w">
				    <div class="avatar-w">
					 <img alt="" src="img/avatar1.jpg">
				    </div>
				    <div class="logged-user-info-w">
					 <div class="logged-user-name">
					   <?php echo $id;?>
					 </div>
					 <div class="logged-user-role">
					   <?php echo $user_type;?>
					 </div>
				    </div>
				  </div>
				  <!--------------------
				  START - Mobile Menu List
				  -------------------->
				  <ul class="main-menu">
				    <li class="has-sub-menu">
					 <a href="index.html">
					   <div class="icon-w">
						<div class="os-icon os-icon-layout"></div>
					   </div>
					   <span>Dashboard</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="index.html">Dashboard 1</a>
					   </li>
					   <li>
						<a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a>
					   </li>
					   <li>
						<a href="apps_support_dashboard.html">Dashboard 3</a>
					   </li>
					   <li>
						<a href="apps_projects.html">Dashboard 4</a>
					   </li>
					   <li>
						<a href="apps_bank.html">Dashboard 5</a>
					   </li>
					   <li>
						<a href="layouts_menu_top_image.html">Dashboard 6</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="layouts_menu_top_image.html">
					   <div class="icon-w">
						<div class="os-icon os-icon-layers"></div>
					   </div>
					   <span>Menu Styles</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="layouts_menu_side_full.html">Side Menu Light</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_full_dark.html">Side Menu Dark</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="apps_pipeline.html">Side &amp; Top Dark</a>
					   </li>
					   <li>
						<a href="apps_projects.html">Side &amp; Top</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_mini.html">Mini Side Menu</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_compact.html">Compact Side Menu</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a>
					   </li>
					   <li>
						<a href="layouts_menu_right.html">Right Menu</a>
					   </li>
					   <li>
						<a href="layouts_menu_top.html">Top Menu Light</a>
					   </li>
					   <li>
						<a href="layouts_menu_top_dark.html">Top Menu Dark</a>
					   </li>
					   <li>
						<a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a>
					   </li>
					   <li>
						<a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a>
					   </li>
					   <li>
						<a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a>
					   </li>
					   <li>
						<a href="layouts_menu_side_compact_click.html">Menu Inside Click</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="apps_bank.html">
					   <div class="icon-w">
						<div class="os-icon os-icon-package"></div>
					   </div>
					   <span>Applications</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="apps_email.html">Email Application</a>
					   </li>
					   <li>
						<a href="apps_support_dashboard.html">Support Dashboard</a>
					   </li>
					   <li>
						<a href="apps_support_index.html">Tickets Index</a>
					   </li>
					   <li>
						<a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="apps_projects.html">Projects List</a>
					   </li>
					   <li>
						<a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="apps_full_chat.html">Chat Application</a>
					   </li>
					   <li>
						<a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="misc_chat.html">Popup Chat</a>
					   </li>
					   <li>
						<a href="apps_pipeline.html">CRM Pipeline</a>
					   </li>
					   <li>
						<a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="misc_calendar.html">Calendar</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-file-text"></div>
					   </div>
					   <span>Pages</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="misc_invoice.html">Invoice</a>
					   </li>
					   <li>
						<a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="misc_charts.html">Charts</a>
					   </li>
					   <li>
						<a href="auth_login.html">Login</a>
					   </li>
					   <li>
						<a href="auth_register.html">Register</a>
					   </li>
					   <li>
						<a href="auth_lock.html">Lock Screen</a>
					   </li>
					   <li>
						<a href="misc_pricing_plans.html">Pricing Plans</a>
					   </li>
					   <li>
						<a href="misc_error_404.html">Error 404</a>
					   </li>
					   <li>
						<a href="misc_error_500.html">Error 500</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-life-buoy"></div>
					   </div>
					   <span>UI Kit</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a>
					   </li>
					   <li>
						<a href="uikit_alerts.html">Alerts</a>
					   </li>
					   <li>
						<a href="uikit_grid.html">Grid</a>
					   </li>
					   <li>
						<a href="uikit_progress.html">Progress</a>
					   </li>
					   <li>
						<a href="uikit_popovers.html">Popover</a>
					   </li>
					   <li>
						<a href="uikit_tooltips.html">Tooltips</a>
					   </li>
					   <li>
						<a href="uikit_buttons.html">Buttons</a>
					   </li>
					   <li>
						<a href="uikit_dropdowns.html">Dropdowns</a>
					   </li>
					   <li>
						<a href="uikit_typography.html">Typography</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-mail"></div>
					   </div>
					   <span>Emails</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="emails_welcome.html">Welcome Email</a>
					   </li>
					   <li>
						<a href="emails_order.html">Order Confirmation</a>
					   </li>
					   <li>
						<a href="emails_payment_due.html">Payment Due</a>
					   </li>
					   <li>
						<a href="emails_forgot.html">Forgot Password</a>
					   </li>
					   <li>
						<a href="emails_activate.html">Activate Account</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-users"></div>
					   </div>
					   <span>Users</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="users_profile_big.html">Big Profile</a>
					   </li>
					   <li>
						<a href="users_profile_small.html">Compact Profile</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-edit-32"></div>
					   </div>
					   <span>Forms</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="forms_regular.html">Regular Forms</a>
					   </li>
					   <li>
						<a href="forms_validation.html">Form Validation</a>
					   </li>
					   <li>
						<a href="forms_wizard.html">Form Wizard</a>
					   </li>
					   <li>
						<a href="forms_uploads.html">File Uploads</a>
					   </li>
					   <li>
						<a href="forms_wisiwig.html">Wisiwig Editor</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-grid"></div>
					   </div>
					   <span>Tables</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="tables_regular.html">Regular Tables</a>
					   </li>
					   <li>
						<a href="tables_datatables.html">Data Tables</a>
					   </li>
					   <li>
						<a href="tables_editable.html">Editable Tables</a>
					   </li>
					 </ul>
				    </li>
				    <li class="has-sub-menu">
					 <a href="#">
					   <div class="icon-w">
						<div class="os-icon os-icon-zap"></div>
					   </div>
					   <span>Icons</span></a>
					 <ul class="sub-menu">
					   <li>
						<a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_feather.html">Feather Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_themefy.html">Themefy Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_picons_thin.html">Picons Thin</a>
					   </li>
					   <li>
						<a href="icon_fonts_dripicons.html">Dripicons</a>
					   </li>
					   <li>
						<a href="icon_fonts_eightyshades.html">Eightyshades</a>
					   </li>
					   <li>
						<a href="icon_fonts_entypo.html">Entypo</a>
					   </li>
					   <li>
						<a href="icon_fonts_font_awesome.html">Font Awesome</a>
					   </li>
					   <li>
						<a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>
					   </li>
					   <li>
						<a href="icon_fonts_metrize_icons.html">Metrize Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_picons_social.html">Picons Social</a>
					   </li>
					   <li>
						<a href="icon_fonts_batch_icons.html">Batch Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_dashicons.html">Dashicons</a>
					   </li>
					   <li>
						<a href="icon_fonts_typicons.html">Typicons</a>
					   </li>
					   <li>
						<a href="icon_fonts_weather_icons.html">Weather Icons</a>
					   </li>
					   <li>
						<a href="icon_fonts_light_admin.html">Light Admin</a>
					   </li>
					 </ul>
				    </li>
				  </ul>
				  <!--------------------
				  END - Mobile Menu List
				  -------------------->
				  <div class="mobile-menu-magic">
				    <h4>
					 Light Admin
				    </h4>
				    <p>
					 Clean Bootstrap 4 Template
				    </p>
				    <div class="btn-w">
					 <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
				    </div>
				  </div>
				</div>
			</div>
		   <!--------------------
		   END - Mobile Menu
		   --------------------><!--------------------
		   START - Main Menu
		   -------------------->
			<div class="menu-w selected-menu-color-light menu-has-selected-link menu-activated-on-click color-scheme-dark color-style-default sub-menu-color-light menu-position-side menu-side-left menu-layout-compact sub-menu-style-inside">
				<div class="logo-w">
				  <a class="logo" href="index.html">
				    <div class="logo-element"></div>
				    <div class="logo-label">
						Pahiram.ph
				   	</div>
				  </a>
				</div>
				<div class="logged-user-w avatar-inline">
					<div class="logged-user-i">
						<div class="avatar-w">
							<img alt="" src="img/avatar1.jpg">
						</div>
						<div class="logged-user-info-w">
							<div class="logged-user-name">
								<?php
								
								$where = array("employee_id"=>$emp_id,);
								$employee = $obj->select_data("Employee_Master", $where);
								$string = $employee['middle_name'];

								if (!empty($string)) {
									$fullname = $employee['last_name'].", ".$employee['first_name']." ".$string[0].".";
								}else{
									$fullname = $employee['last_name'].", ".$employee['first_name'];
								}
								/*get employee status type*/
								$category = $employee['status_id'];
								$where = array("id"=>$category,);
								$emp_status = $obj->select_data("User_Type_Master", $where);

								?>
								<?php echo $fullname;?>
							</div>
							<div class="logged-user-role">
								<?php echo $emp_status['user_type'];?>
							</div>
						</div>
						<div class="logged-user-toggler-arrow">
							<div class="os-icon os-icon-chevron-down"></div>
						</div>
						<div class="logged-user-menu color-style-dark">
							<div class="logged-user-avatar-info">
								<div class="avatar-w">
									<img alt="" src="img/avatar1.jpg">
								</div>
								<div class="logged-user-info-w">
									<div class="logged-user-name">
										<?php echo $fullname;?>
									</div>
									<div class="logged-user-role">
										<?php echo $emp_status['user_type'];?>
									</div>
								</div>
							</div>
							<div class="bg-icon">
								<i class="os-icon os-icon-wallet-loaded"></i>
							</div>
							<ul>
								<!-- <li>
									<a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
								</li> -->
								<li>
									<a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
								</li>
								<!-- <li>
									<a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
								</li>
								<li>
									<a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
								</li> -->
								<li>
									<a href="home.php?logout=logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="menu-actions">
				  <!--------------------
				  START - Messages Link in secondary top menu
				  -------------------->
					<div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
						<i class="os-icon os-icon-mail-14"></i>
						<div class="new-messages-count">
							12
						</div>
						<div class="os-dropdown light message-list">
							<ul>
								<li>
									<a href="#">
										<div class="user-avatar-w">
											<img alt="" src="img/avatar1.jpg">
										</div>
										<div class="message-content">
											<h6 class="message-from">
											John Mayers
											</h6>
											<h6 class="message-title">
											Account Update
											</h6>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="user-avatar-w">
											<img alt="" src="img/avatar2.jpg">
										</div>
										<div class="message-content">
											<h6 class="message-from">
											Phil Jones
											</h6>
											<h6 class="message-title">
											Secutiry Updates
											</h6>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				  <!--------------------
				  END - Messages Link in secondary top menu
				  --------------------><!--------------------
				  START - Settings Link in secondary top menu
				  -------------------->

					<!--<div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
						<i class="os-icon os-icon-ui-46"></i>
						<div class="os-dropdown">
							<div class="icon-w">
								<i class="os-icon os-icon-ui-46"></i>
							</div>
							<ul>
								<li>
									<a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
								</li>
								<li>
									<a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
								</li>
								<li>
									<a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
								</li>
								<li>
									<a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
								</li>
							</ul>
						</div>
					</div> -->

				  <!--------------------
				  END - Settings Link in secondary top menu
				  --------------------><!--------------------
				  START - Messages Link in secondary top menu
				  -------------------->

				<!-- <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
					<i class="os-icon os-icon-zap"></i>
					<div class="new-messages-count">
						4
					</div>
					<div class="os-dropdown light message-list">
						<div class="icon-w">
							<i class="os-icon os-icon-zap"></i>
						</div>
						<ul>
							<li>
								<a href="#">
									<div class="user-avatar-w">
										<img alt="" src="img/avatar1.jpg">
									</div>
									<div class="message-content">
										<h6 class="message-from">
										John Mayers
										</h6>
										<h6 class="message-title">
										Account Update
										</h6>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-avatar-w">
										<img alt="" src="img/avatar2.jpg">
									</div>
									<div class="message-content">
										<h6 class="message-from">
										Phil Jones
										</h6>
										<h6 class="message-title">
										Secutiry Updates
										</h6>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div> -->

				  <!--------------------
				  END - Messages Link in secondary top menu
				  -------------------->
				</div>
				<div class="element-search autosuggest-search-activator">
				  <input placeholder="Start typing to search..." type="text">
				</div>
				<h1 class="menu-page-header">
				  Page Header
				</h1>
				<ul class="main-menu">
				  <li class="sub-header">
				    <span>Layouts</span>
				  </li>
				<li class="selected has-sub-menu">
					<a href="index.html">
					<div class="icon-w">
						<div class="os-icon os-icon-layout"></div>
					</div>
					<span>Dashboard</span></a>
					<div class="sub-menu-w">
						<div class="sub-menu-header">
							Dashboard
						</div>
						<div class="sub-menu-icon">
							<i class="os-icon os-icon-layout"></i>
						</div>
						<div class="sub-menu-i">
							<ul class="sub-menu">
								<li>
									<a href="index.html">Dashboard 1</a>
								</li>
								<li>
									<a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a>
								</li>
								<li>
									<a href="apps_support_dashboard.html">Dashboard 3</a>
								</li>
								<li>
									<a href="apps_projects.html">Dashboard 4</a>
								</li>
								<li>
									<a href="apps_bank.html">Dashboard 5</a>
								</li>
								<li>
									<a href="layouts_menu_top_image.html">Dashboard 6</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				  <li class=" has-sub-menu">
				    <a href="layouts_menu_top_image.html">
					 <div class="icon-w">
					   <div class="os-icon os-icon-layers"></div>
					 </div>
					 <span>Menu Styles</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Menu Styles
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-layers"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="layouts_menu_side_full.html">Side Menu Light</a>
						</li>
						<li>
						  <a href="layouts_menu_side_full_dark.html">Side Menu Dark</a>
						</li>
						<li>
						  <a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="apps_pipeline.html">Side &amp; Top Dark</a>
						</li>
						<li>
						  <a href="apps_projects.html">Side &amp; Top</a>
						</li>
						<li>
						  <a href="layouts_menu_side_mini.html">Mini Side Menu</a>
						</li>
						</ul>
						<ul class="sub-menu">
						<li>
						  <a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a>
						</li>
						<li>
						  <a href="layouts_menu_side_compact.html">Compact Side Menu</a>
						</li>
						<li>
						  <a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a>
						</li>
						<li>
						  <a href="layouts_menu_right.html">Right Menu</a>
						</li>
						<li>
						  <a href="layouts_menu_top.html">Top Menu Light</a>
						</li>
						<li>
						  <a href="layouts_menu_top_dark.html">Top Menu Dark</a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a>
						</li>
						<li>
						  <a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a>
						</li>
						<li>
						  <a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a>
						</li>
						<li>
						  <a href="layouts_menu_side_compact_click.html">Menu Inside Click</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class="sub-header">
				    <span>Options</span>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="apps_bank.html">
					 <div class="icon-w">
					   <div class="os-icon os-icon-package"></div>
					 </div>
					 <span>Applications</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Applications
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-package"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="apps_email.html">Email Application</a>
						</li>
						<li>
						  <a href="apps_support_dashboard.html">Support Dashboard</a>
						</li>
						<li>
						  <a href="apps_support_index.html">Tickets Index</a>
						</li>
						<li>
						  <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="apps_projects.html">Projects List</a>
						</li>
						<li>
						  <a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="apps_full_chat.html">Chat Application</a>
						</li>
						<li>
						  <a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="misc_chat.html">Popup Chat</a>
						</li>
						<li>
						  <a href="apps_pipeline.html">CRM Pipeline</a>
						</li>
						<li>
						  <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="misc_calendar.html">Calendar</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-file-text"></div>
					 </div>
					 <span>Pages</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Pages
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-file-text"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="misc_invoice.html">Invoice</a>
						</li>
						<li>
						  <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="misc_charts.html">Charts</a>
						</li>
						<li>
						  <a href="auth_login.html">Login</a>
						</li>
						<li>
						  <a href="auth_register.html">Register</a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="auth_lock.html">Lock Screen</a>
						</li>
						<li>
						  <a href="misc_pricing_plans.html">Pricing Plans</a>
						</li>
						<li>
						  <a href="misc_error_404.html">Error 404</a>
						</li>
						<li>
						  <a href="misc_error_500.html">Error 500</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-life-buoy"></div>
					 </div>
					 <span>UI Kit</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   UI Kit
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-life-buoy"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a>
						</li>
						<li>
						  <a href="uikit_alerts.html">Alerts</a>
						</li>
						<li>
						  <a href="uikit_grid.html">Grid</a>
						</li>
						<li>
						  <a href="uikit_progress.html">Progress</a>
						</li>
						<li>
						  <a href="uikit_popovers.html">Popover</a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="uikit_tooltips.html">Tooltips</a>
						</li>
						<li>
						  <a href="uikit_buttons.html">Buttons</a>
						</li>
						<li>
						  <a href="uikit_dropdowns.html">Dropdowns</a>
						</li>
						<li>
						  <a href="uikit_typography.html">Typography</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class="sub-header">
				    <span>Elements</span>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-mail"></div>
					 </div>
					 <span>Emails</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Emails
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-mail"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="emails_welcome.html">Welcome Email</a>
						</li>
						<li>
						  <a href="emails_order.html">Order Confirmation</a>
						</li>
						<li>
						  <a href="emails_payment_due.html">Payment Due</a>
						</li>
						<li>
						  <a href="emails_forgot.html">Forgot Password</a>
						</li>
						<li>
						  <a href="emails_activate.html">Activate Account</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-users"></div>
					 </div>
					 <span>Users</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Users
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-users"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="users_profile_big.html">Big Profile</a>
						</li>
						<li>
						  <a href="users_profile_small.html">Compact Profile</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-edit-32"></div>
					 </div>
					 <span>Forms</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Forms
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-edit-32"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="forms_regular.html">Regular Forms</a>
						</li>
						<li>
						  <a href="forms_validation.html">Form Validation</a>
						</li>
						<li>
						  <a href="forms_wizard.html">Form Wizard</a>
						</li>
						<li>
						  <a href="forms_uploads.html">File Uploads</a>
						</li>
						<li>
						  <a href="forms_wisiwig.html">Wisiwig Editor</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-grid"></div>
					 </div>
					 <span>Tables</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Tables
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-grid"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="tables_regular.html">Regular Tables</a>
						</li>
						<li>
						  <a href="tables_datatables.html">Data Tables</a>
						</li>
						<li>
						  <a href="tables_editable.html">Editable Tables</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				  <li class=" has-sub-menu">
				    <a href="#">
					 <div class="icon-w">
					   <div class="os-icon os-icon-zap"></div>
					 </div>
					 <span>Icons</span></a>
				    <div class="sub-menu-w">
					 <div class="sub-menu-header">
					   Icons
					 </div>
					 <div class="sub-menu-icon">
					   <i class="os-icon os-icon-zap"></i>
					 </div>
					 <div class="sub-menu-i">
					   <ul class="sub-menu">
						<li>
						  <a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>
						</li>
						<li>
						  <a href="icon_fonts_feather.html">Feather Icons</a>
						</li>
						<li>
						  <a href="icon_fonts_themefy.html">Themefy Icons</a>
						</li>
						<li>
						  <a href="icon_fonts_picons_thin.html">Picons Thin</a>
						</li>
						<li>
						  <a href="icon_fonts_dripicons.html">Dripicons</a>
						</li>
						<li>
						  <a href="icon_fonts_eightyshades.html">Eightyshades</a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="icon_fonts_entypo.html">Entypo</a>
						</li>
						<li>
						  <a href="icon_fonts_font_awesome.html">Font Awesome</a>
						</li>
						<li>
						  <a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>
						</li>
						<li>
						  <a href="icon_fonts_metrize_icons.html">Metrize Icons</a>
						</li>
						<li>
						  <a href="icon_fonts_picons_social.html">Picons Social</a>
						</li>
						<li>
						  <a href="icon_fonts_batch_icons.html">Batch Icons</a>
						</li>
						</ul><ul class="sub-menu">
						<li>
						  <a href="icon_fonts_dashicons.html">Dashicons</a>
						</li>
						<li>
						  <a href="icon_fonts_typicons.html">Typicons</a>
						</li>
						<li>
						  <a href="icon_fonts_weather_icons.html">Weather Icons</a>
						</li>
						<li>
						  <a href="icon_fonts_light_admin.html">Light Admin</a>
						</li>
					   </ul>
					 </div>
				    </div>
				  </li>
				</ul>
			</div>
		<!--------------------
		END - Main Menu
		-------------------->
			<div class="content-w">
				<!--------------------
				START - Top Bar
				-------------------->
				<div class="top-bar color-scheme-dark">
					 <!--------------------
					 START - Breadcrumbs
					 -------------------->
					 <ul class="breadcrumb">
					   <li class="breadcrumb-item">
						<a href="home.php" class="text-white inactiveLink">Home</a>
					   </li>
					 </ul>
					 <!--------------------
					 END - Breadcrumbs
					 -------------------->
				</div>
			<!--------------------
			END - Top Bar
			-------------------->
			<div class="content-i">
				<div class="content-box">
					<div class="element-wrapper">
					<h6 class="element-header">
					   Home
					</h6>
					<div class="element-box">
						<div class="form-content">
							<h5 class="form-header">
								My Schedule
							</h5>
							<div class="container">
								<div class="row">
						               <div class="col-md-10">
										<nav>
							                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
												<a class="nav-item nav-link" id="nav-past-tab" data-toggle="tab" href="#nav-past" role="tab" aria-controls="nav-past" aria-selected="true"><h5 class="text-center text-white">Past</h5></a>
												<a class="nav-item nav-link active" id="nav-present-tab" data-toggle="tab" href="#nav-present" role="tab" aria-controls="nav-present" aria-selected="false"><h5 class="text-center text-white">Present</h5></a>
												<a class="nav-item nav-link" id="nav-future-tab" data-toggle="tab" href="#nav-future" role="tab" aria-controls="nav-future" aria-selected="false"><h5 class="text-center text-white">Future</h5></a>
												<a class="nav-item nav-link" id="nav-leave-tab" data-toggle="tab" href="#nav-leave" role="tab" aria-controls="nav-leave" aria-selected="false"><h5 class="text-center text-white">Others</h5></a>
							                    </div>
										</nav>
										<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
											<div class="tab-pane fade" id="nav-past" role="tabpanel" aria-labelledby="nav-past-tab">
												
												<div class="form-content">
													<form id="signupForm" action="" method="post" name="login">
														<div class="col-md-5 ">
															<div class="form-group">
												          		<label for="">Select Date Range</label>
												          		<input class="multi-daterange form-control" type="text" value="03/31/2017 - <?php echo date('Y-m-d', strtotime('-7 days'))?>">
													          </div>
														</div>
													</form>
													<div class="table-responsive">
														<table id ="past_list" width="100%" class="table table-striped table-lightfont table-compact">
														    <thead>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th>Status</th>
															   </tr>
														    </thead>
														    <tbody>

															<?php
															$row = $obj->fetch_data("Employee_Master");
															
																/*$row = $obj->fetch_data("Employee_Master");*/
																foreach ($row as $employee) {
																	/*concatinate full name with or without middle name*/
																	$string = $employee['middle_name'];
																	if (!empty($string)) {
																		$fullname = $employee['last_name'].", ".$employee['first_name']." ".$string[0].".";
																	}else{
																		$fullname = $employee['last_name'].", ".$employee['first_name'];
																	}

																	/*get employee login type*/
																	$category = $employee['employee_id'];
																	$where = array("employee_id"=>$category,);
																	$emp_info_table = $obj->select_data("Employee_Login_Master", $where);

																		$category = $emp_info_table['user_type_id'];
																		$where = array("id"=>$category,);
																		$user_type = $obj->select_data("User_Type_Master", $where);

																	/*get employee status type*/
																		$category = $employee['status_id'];
																		$where = array("id"=>$category,);
																		$emp_status = $obj->select_data("Employee_Status_Master", $where);
																		
																	?>

																	<tr>
																		<td><?php echo $employee['employee_id'];?></td>
																		<td><?php echo $fullname;?></td>
																		<td><?php echo $emp_status['status'];?></td>
																   </tr>

																<?php } ?>
															   
														    </tbody>
														    <tfoot>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th>Status</th>
															   </tr>
														    </tfoot>
														</table>
													</div>
												</div>

							                    </div>
							                    <div class="tab-pane fade show active" id="nav-present" role="tabpanel" aria-labelledby="nav-present-tab">
												
												<div class="form-content">
													<div class="table-responsive">
														<table id ="present_list" width="100%" class="table table-striped table-lightfont table-compact">
														    <thead>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th>Status</th>
															   </tr>
														    </thead>
														    <tbody>

															<?php
															$row = $obj->fetch_data("Employee_Master");
															
																/*$row = $obj->fetch_data("Employee_Master");*/
																foreach ($row as $employee) {
																	/*concatinate full name with or without middle name*/
																	$string = $employee['middle_name'];
																	if (!empty($string)) {
																		$fullname = $employee['last_name'].", ".$employee['first_name']." ".$string[0].".";
																	}else{
																		$fullname = $employee['last_name'].", ".$employee['first_name'];
																	}

																	/*get employee login type*/
																	$category = $employee['employee_id'];
																	$where = array("employee_id"=>$category,);
																	$emp_info_table = $obj->select_data("Employee_Login_Master", $where);

																		$category = $emp_info_table['user_type_id'];
																		$where = array("id"=>$category,);
																		$user_type = $obj->select_data("User_Type_Master", $where);

																	/*get employee status type*/
																		$category = $employee['status_id'];
																		$where = array("id"=>$category,);
																		$emp_status = $obj->select_data("Employee_Status_Master", $where);
																		
																	?>

																	<tr>
																		<td><?php echo $employee['employee_id'];?></td>
																		<td><?php echo $fullname;?></td>
																		<td><?php echo $emp_status['status'];?></td>
																   </tr>

																<?php } ?>
															   
														    </tbody>
														    <tfoot>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th>Status</th>
															   </tr>
														    </tfoot>
														</table>
													</div>
												</div><br>

												<div class="row">
													<div class="col-md-7"></div>
													<div class="col-md-5">
														<input class="btn btn-primary" name="time_in" type="submit" value="Time IN">
														<input class="btn btn-warning" name="break" type="submit" value="Break">
														<input class="btn btn-success" name="lunch" type="submit" value="Lunch">
														<input class="btn btn-danger" name="time_out" type="submit" value="Time OUT">
													</div>
												</div>


							                    </div>

							                    <div class="tab-pane fade" id="nav-future" role="tabpanel" aria-labelledby="nav-future-tab">
												
												<div class="form-content">
													<form id="signupForm" action="" method="post" name="login">
														<div class="col-md-5 ">
															<div class="form-group">
												          		<label for="">Select Date Range</label>
												          		<input class="multi-daterange form-control" type="text" value="03/31/2017 - <?php echo date('Y-m-d', strtotime('-7 days'))?>">
													          </div>
														</div>
													</form>
													<div class="table-responsive">
														<table id ="future_list" width="100%" class="table table-striped table-lightfont table-compact">
														    <thead>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th></th>
																	<th>Date</th>
																	<th>Time</th>
															   </tr>
														    </thead>
														    <tbody>

															<?php
															$row = $obj->fetch_data("Employee_Master");
															
																/*$row = $obj->fetch_data("Employee_Master");*/
																foreach ($row as $employee) {
																	/*concatinate full name with or without middle name*/
																	$string = $employee['middle_name'];
																	if (!empty($string)) {
																		$fullname = $employee['last_name'].", ".$employee['first_name']." ".$string[0].".";
																	}else{
																		$fullname = $employee['last_name'].", ".$employee['first_name'];
																	}

																	/*get employee login type*/
																	$category = $employee['employee_id'];
																	$where = array("employee_id"=>$category,);
																	$emp_info_table = $obj->select_data("Employee_Login_Master", $where);

																		$category = $emp_info_table['user_type_id'];
																		$where = array("id"=>$category,);
																		$user_type = $obj->select_data("User_Type_Master", $where);

																	/*get employee status type*/
																		$category = $employee['status_id'];
																		$where = array("id"=>$category,);
																		$emp_status = $obj->select_data("Employee_Status_Master", $where);
																		
																	?>

																	<tr>
																		<td><?php echo $employee['employee_id'];?></td>
																		<td><?php echo $emp_status['status'];?></td>
																		<td></td>
																		<td><?php echo $employee['employee_id'];?></td>
																		<td><?php echo $emp_status['status'];?></td>
																   </tr>

																<?php } ?>
															   
														    </tbody>
														    <tfoot>
															   <tr>
																	<th>Date</th>
																	<th>Time</th>
																	<th></th>
																	<th>Date</th>
																	<th>Time</th>
															   </tr>
														    </tfoot>
														</table>
													</div>
												</div>							                    
											</div>
							                    <div class="tab-pane fade" id="nav-leave" role="tabpanel" aria-labelledby="nav-leave-tab">
												4											
											</div>
										</div>
									</div>
					              </div>
					        </div>


								<div class="w-100"></div><hr>
								<div class="col-md-1"></div>
								<div class="col-md-8 p-1">

								</div>
							</div>
						</div>
					</div>
				    </div>
				</div>
			</div>
		</div>
	<div class="display-type"></div>
 </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

    <script>	

		$(document).ready(function() {
			$('#registered_list').DataTable( {
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"order": [[ 0, "desc" ]]
			} );
		} );

		$(document).ready(function() {
			$('#past_list').DataTable( {
				"lengthMenu": [[7, 14, 21, -1], [7, 14, 21, "All"]],
				"order": [[ 0, "desc" ]]
			} );
		} );

		$(document).ready(function() {
			$('#present_list').DataTable( {
				"lengthMenu": [[7, 14, -1], [7, 14, "All"]],
				"order": [[ 0,1, "desc" ]]
			} );
		} );

		$(document).ready(function() {
			$('#future_list').DataTable( {
				"lengthMenu": [[7, 14, -1], [7, 14, "All"]],
				"order": [[ 0, "asc" ]]
			} );
		} );


	
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	 
	 ga('create', 'UA-XXXXXXX-9', 'auto');
	 ga('send', 'pageview');


	$(document).ready(function() {
	    $('#registered_list').DataTable();
	} );

</script>

  </body>
</html>

