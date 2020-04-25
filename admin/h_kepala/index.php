<!DOCTYPE html>
<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	include "../k.php";
	session_start();
	$_SESSION['level'] != 'kepala' || !isset ($_SESSION['username']);
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Kepala Kelurahan</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	

		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/chosen.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css" />
		<link rel="stylesheet" href="../assets/css/custom.css" />

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							BKM JAYA SENTOSA
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../assets/images/avatars/admin.png" alt="Admin" />
								<span class="user-info">
									<small> Login Sebagai,</small>
									Kepala
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li class="divider"></li>
								<li>
									<a href="../index.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
								<li class="divider"></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php if(isset($_REQUEST['dashboard'])){echo"active";} ?>">
						<a href="index.php?dashboard"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text"> Dashboard </span></a>
					</li>
					<li class="<?php if(isset($_REQUEST['pass'])){echo"active";} ?>">
						<a href="index.php?pass"><i class="menu-icon fa fa-folder-open-o"></i><span class="menu-text"> Ubah Password </span></a>
					</li>
					<li class="<?php if(isset($_REQUEST['dokumen'])){echo"active";} ?>">
						<a href="index.php?dokumen"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Dokumen </span></a>
					</li>


				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
				<div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background: #8ecff5; color: #000; border: 3px solid #f2f2f2; padding: 5px;">
					<marquee onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5">SELAMAT DATANG DI APLIKASI E-DOC ARSIP DOKUMEN PT PAL INDONESIA (Persero)</marquee>
				</div>
			</div>

			<?php
			if(isset($_REQUEST['dashboard'])){
				include("dashboard.php");
			}
			else if(isset($_REQUEST['pass'])){
				include("pass.php");
			}
			else if(isset($_REQUEST['dokumen'])){
				include("dokumen.php");
			}
			else if(isset($_REQUEST['dokumen_detail'])){
				include("dokumen_detail.php");
			}
			else{
				include("dashboard.php"); 
			} ?>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Develop by BKM Jaya Sentosa</span>
							&copy; 2020
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
	</body>
</html>

