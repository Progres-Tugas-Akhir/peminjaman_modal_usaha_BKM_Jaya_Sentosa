<!DOCTYPE html>
<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	include "../k.php";
	session_start();
	$_SESSION['level'] != 'admin' || !isset ($_SESSION['username']);
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin BKM Jaya Sentosa</title>

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
							Admin BKM Jaya Sentosa
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../assets/images/avatars/admin.png" alt="Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
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

			<div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background: #8ecff5; color:#013197; border: 3px solid #f2f2f2; padding: 5px;">
					<marquee onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5">Sistem Informasi Peminjaman Modal Usaha Badan Keswadayaan Masyarakat (BKM) Jaya Sentosa</marquee>
				</div>

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php?dashboard"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text"> Dashboard </span></a>
					</li>
					<li class="">
						<a href="index.php?datasurvey"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Data Survey </span></a>
					</li>
					<li class="">
						<a href="index.php?datapengurus"><i class="menu-icon fa fa-camera"></i><span class="menu-text">Pengurus Lembaga </span></a>
					</li>
					<li class="">
						<a href="index.php?dataanggota"><i class="menu-icon fa fa-list"></i><span class="menu-text"> Data Anggota KSM </span></a>
					</li>
					<li class="">
						<a href="index.php?datakeluarmasukuang"><i class="menu-icon fa fa-file"></i><span class="menu-text">Keluar Masuk Uang </span></a>
					</li>
					<li class="">
						<a href="index.php?datapembayaranangsuran"><i class="menu-icon fa fa-file"></i><span class="menu-text">Pembayaran</span></a>
					</li>
					<li class="">
						<a href="index.php?datapencairan"><i class="menu-icon fa fa-file"></i><span class="menu-text"> Data Pencairan Uang</span></a>
					</li>
					<li class="">
						<a href="index.php?laporan"><i class="menu-icon fa fa-file"></i><span class="menu-text"> Laporan</span></a>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
				
			</div>

			<?php
			if(isset($_REQUEST['dashboard'])){
				include("dashboard.php");
			}
			else if(isset($_REQUEST['datasurvey'])){
				include("datasurvey.php");
			}
			else if(isset($_REQUEST['datapengurus'])){
				include("datapengurus.php");
			}
			else if(isset($_REQUEST['dataanggota'])){
				include("dataanggota.php");
			}
			else if(isset($_REQUEST['datakeluarmasukuang'])){
				include("datakeluarmasukuang.php");
			}
			else if(isset($_REQUEST['datapembayaranangsuran'])){
				include("datapembayaranangsuran.php");
			}
			else if(isset($_REQUEST['datapencairan'])){
				include("datapencairan.php");
			}
			else if(isset($_REQUEST['laporan'])){
				include("laporan.php");
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

