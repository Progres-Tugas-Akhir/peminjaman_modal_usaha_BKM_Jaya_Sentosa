<?php

$queryp = "SELECT * FROM tb_survey s INNER JOIN tb_status u ON s.id_status = u.id_status";
$sqlp = mysqli_query($connect, $queryp);
$datap = mysqli_fetch_assoc($sqlp);

$queryp = "SELECT * FROM tb_survey";
// $sqlp = mysqli_query($connect, $queryp);
// $datap = mysqli_fetch_assoc($sqlp);


$no = 1;
$nama_usaha=$_POST['nama_usaha'];
$alamat_usaha=$_POST['alamat_usaha'];
$nama_anggota = $_POST['nama_anggota'];
$tanggal_survey = $_POST['tanggal_survey'];
$id_status= $_POST['id_status'];
?>

    <div id="banner-area" class="banner-area" style="background-image:url(images/peminjaman9.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">DATA SURVEY USAHA</h1>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
         <div class="col-md-15">
         <h4 class="column-title">Data Survey Usaha BKM Jaya Sentosa</h4>
         <table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><center>No</center></th>
        <th><center>Nama Usaha</center></th>
        <th><center>Alamat Usaha</center></th>
        <th><center>Nama Anggota</center></th>
        <th><center>Tanggal Survey</center></th>
        <th><center>Status</center></th>
				</tr>
		</thead>
		<tbody>
			<tr>
				<center><td class="center"><?php echo $no; ?></center>
			  <td><center><?php echo $datap['nama_usaha']; ?></center></td>
			  <td><center><?php echo $datap['alamat_usaha']; ?></center></td>
        <td><center><?php echo $datap['nama_anggota']; ?></center></td>
        <td><center><?php echo $datap['tanggal_survey']; ?></center></td>
        <td><center><?php echo $datap['status']; ?></center></td>
		</tbody>
	</table>
      <br>
         </div><!-- Main row end -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
	

 

	

  