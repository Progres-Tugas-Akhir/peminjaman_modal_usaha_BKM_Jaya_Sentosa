<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>BKM Jaya Sentosa</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

</head>

<body>
		<!-- Header start -->
		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="index.html">
								<!-- <img src="images/logodp00.jpg" height:"200" width="200" alt=""> -->
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Telepon</p>
											<p class="info-box-subtitle">(031)09473657835</p>
											
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">Alamat</p>
											<p class="info-box-subtitle">Kelurahan Kutorejo Pandaan Jawa Timur</p>
										</div>
									</div>
								</li>
								<li><a class="btn btn-info" href="admin/index.php" target="_blank">Login</a></li>
								<!-- <a class="btn btn-info" href="login.php"> -->
								<!-- <li class="header-get-a-quote">
									<a class="btn btn-primary" href="contact.html">Get A Quote</a>
								</li> -->
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
											<li><h4><a href="index.php?home">Home</a></h4></li>
											<li><h4>|</a></h4></li>
											<li><h4><a href="index.php?persyaratan">Persyaratan Peminjaman</a></h4></li>
											<li><h4>|</a></h4></li>
											<li><h4><a href="index.php?datasurvey">Data Survey Usaha</a></h4></li>
										</li>

										<!-- <li><a href="index.php?c">Hubungi Kami</a></li> 

									</ul>
									<!--/ Nav ul end -->
								</div>
								<!--/ Collapse end -->

							</div><!-- Site Navbar inner end -->

						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
						
					</div><!-- Search end -->

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Type what you want and enter">
						<span class="search-close">&times;</span>
					</div><!-- Site search end -->
				</div>
				<!--/ Container end -->

			</nav>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->

 <?php
  if (isset ($_REQUEST['home'])) {
    include ("home.php");
  } else if (isset ($_REQUEST['datasurvey'])) {
    include ("datasurveyawal.php");
  } else if (isset ($_REQUEST['persyaratan'])) {
    include ("persyaratan.php");
  } else {
    include ("home.php");
  }

  ?>
		
						</div><!-- Col end -->

						<!-- <div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Jam Kerja</h3>
							<div class="working-hours">
								Pelayanan Kami :
								<br><br> Senin - Jumat : <span class="text-left">08.00 - 16:00 </span> -->
								<!-- <br> Saturday: <span class="text-right">12:00 - 15:00</span>
								<br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span> -->
							</div>
						</div><!-- Col end -->

						<!-- <div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Layanan</h3>
							<ul class="list-arrow">
								<li><a href="index.php?p">Peraturan</a></li>
								<li><a href="index.php?pd">Panduan</a></li>
							</ul>
						</div>Col end -->


					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end -->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="copyright-info">
								<span>Copyright © 2020 BKM JAYA SENTOSA</a></span>
							</div>
						</div>

						

					<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
						<button class="btn btn-primary" title="Back to Top">
							<i class="fa fa-angle-double-up"></i>
						</button>
					</div>

				</div><!-- Container end -->
			</div><!-- Copyright end -->

		</footer><!-- Footer end -->


		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<!-- Color box -->
		<script type="text/javascript" src="js/jquery.colorbox.js"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="js/isotope.js"></script>
		<script type="text/javascript" src="js/ini.isotope.js"></script>


    <!-- Google Map API Key-->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
		<!-- Google Map Plugin-->
		<script type="text/javascript" src="js/gmap3.js"></script>
 
	 <!-- Template custom -->
	 <script type="text/javascript" src="js/custom.js"></script>

	</div><!-- Body inner end -->
</body>

</html>