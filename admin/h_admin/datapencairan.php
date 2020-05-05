<?php

include "../k.php";

if (isset($_POST['tambah'])) {

  $id_pencairan		      	 = $_POST['id_pencairan'];
  $id_anggota    			 = $_POST['id_anggota'];
  $jumlah_pinjaman     		 = $_POST['jumlah_pinjaman'];
  $tanggal_pencairan		 = $_POST['tanggal_pencairan'];
  $tanggal_jatuh_tempo		 = $_POST['tanggal_jatuh_tempo'];
  $keterangan				 = $_POST['keterangan'];

  $query3 = "INSERT INTO tb_pencairan (id_pencairan, id_anggota, jumlah_pinjaman, tanggal_pencairan, tanggal_jatuh_tempo, keterangan )
							 VALUES ('$id_pencairan','$id_anggota','$jumlah_pinjaman','$tanggal_pencairan', '$tanggal_jatuh_tempo', '$keterangan')"; 

  if (mysqli_query($connect, $query3)){
  ?>
	  <script type="text/javascript">
		  alert("Sukses Tambah Data Pencairan");
	  </script>
	  <?php
	  echo"<script>document.location='index.php?datapencairan'</script>";
  }
  else{ 
  ?>
	  <script type="text/javascript">
		  alert("GAGAL");
	  </script>
	  <?php
	  echo"<script>document.location='index.php?datapencairan'</script>";
  }		
}

if(isset($_POST['update'])){
	$id_pencairan      = $_POST['id_pencairan'];
	$id_anggota    			 = $_POST['id_anggota'];
	$jumlah_pinjaman     			 = $_POST['jumlah_pinjaman'];
	$tanggal_pencairan		 = $_POST['tanggal_pencairan'];
	$tanggal_jatuh_tempo		 = $_POST['tanggal_jatuh_tempo'];
	$keterangan				 = $_POST['keterangan'];

		$query3 = "UPDATE tb_pencairan set id_anggota='$id_anggota', jumlah_pinjaman ='$jumlah_pinjaman', tanggal_pencairan ='$tanggal_pencairan', tanggal_jatuh_tempo ='$tanggal_jatuh_tempo', keterangan ='$keterangan' WHERE id_pencairan='$id_pencairan'"; 

		if (mysqli_query($connect, $query3)){
		?>
			<script type="text/javascript">
				alert("Sukses Update Data Pencairan");
			</script>
			<?php
			echo"<script>document.location='index.php?datapencairan'</script>";
        }
        else{ 
		?>
			<script type="text/javascript">
				alert("GAGAL");
			</script>
			<?php
			echo"<script>document.location='index.php?datapencairan'</script>";
        }		
	}

	if(isset($_POST['delete'])){
		$id_pencairan      = $_POST['id_pencairan'];

		$query3 = "DELETE FROM tb_pencairan WHERE id_pencairan='$id_pencairan'"; 

		if (mysqli_query($connect, $query3)){
		?>
			<script type="text/javascript">
				alert("Sukses Delete Data Pencairan");
			</script>
			<?php
			echo"<script>document.location='index.php?datapencairan'</script>";
        }
        else{ 
		?>
			<script type="text/javascript">
				alert("GAGAL");
			</script>
			<?php
			echo"<script>document.location='index.php?datapencairan'</script>";
        }		
	}
	
?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Data Pencairan</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<a href="#modal-insert" role="button" class="btn btn-info" data-toggle="modal">
										<i class="ace-icon fa fa-plus align-middle bigger-120"></i>
										Tambah Data Pencairan
									</a>

									<div id="modal-insert" class="modal fade" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header no-padding">
													<div class="table-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
															<span class="white">&times;</span>
														</button>
														Form Tambah Data Pencairan
													</div>
												</div>
												<div class="modal-body">
												<form name="form1" class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
													<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama Anggota KSM </label>
															<div class="col-xs-12 col-sm-6">
															<select class="chosen-select form-control" id="form-field-select-3" name="id_anggota" data-placeholder="Pilih Kode">
														<option value="">  </option>
														<?php
														$queryj = "SELECT * FROM tb_anggota ORDER BY id_anggota ASC";
														$sqlj = mysqli_query($connect, $queryj);
														while ($dataj = mysqli_fetch_array($sqlj)) { 
														?>
															<option value="<?php echo $dataj['id_anggota'] ?>"><?php echo $dataj['nama_KSM']; ?></option>
														<?php
														}
														?>
														</select>
															</div>
															</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah Pinjaman</label>
															<div class="col-xs-12 col-sm-6">
																<input type="text" name="jumlah_pinjaman" class="col-xs-12 col-sm-12" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pencairan</label>
															<div class="col-xs-12 col-sm-6">
																<input type="date" name="tanggal_pencairan" class="col-xs-12 col-sm-12" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Jatuh Tempo</label>
															<div class="col-xs-12 col-sm-6">
																<input type="date" name="tanggal_jatuh_tempo" class="col-xs-12 col-sm-12" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan</label>
															<div class="col-xs-12 col-sm-6">
																<input type="text" name="keterangan" class="col-xs-12 col-sm-12" />
															</div>
														</div>
														<div class="modal-footer center">
															<input type="submit" name="tambah" class="btn btn-success" value="Tambah Data Pencairan">
														</div>	
													</form>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
										</div><!-- /.page-header -->
						<!-- <div class="row">
							<div class="col-xs-12"> -->
								<!-- PAGE CONTENT BEGINS -->
								
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-xs-12">
									

									<div class="row">
									<div class="col-xs-12">
									

										<div class="clearfix">
											
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											List Data
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div style="overflow: auto;">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th style="text-align: center;">No</th>
														<th style="text-align: center;">Nama KSM</th>
														<th style="text-align: center;">Jumlah Pinjaman</th>
														<th style="text-align: center;">Pembayaran Pokok</th>
														<th style="text-align: center;">Pembayaran Jasa</th>
														<th style="text-align: center;">Tanggal Pencairan</th>
														<th style="text-align: center;">Tanggal Jatuh Tempo</th>
														<th style="text-align: center;">Total Pembayaran</th>
														<th style="text-align: center;" class="hidden-480">Keterangan</th>

														<th style="text-align: center;"><i class="ace-icon fa fa-gear bigger-110 hidden-480"></i> Action</th>
													</tr>
												</thead>

												<tbody>
													<?php
													$querym = "SELECT * FROM tb_pencairan p INNER JOIN tb_anggota a ON p.id_anggota = a.id_anggota";
													$sqlm = mysqli_query($connect, $querym);
													$no = 1;
													$angsuran_pokok=10;
													$angsuran_jasa=0.15;
													
													while ($datam = mysqli_fetch_array($sqlm)) { ?>
														<tr>
															<td class="center"><?php echo $no; ?></td>
															<td><?php echo $datam['nama_KSM']; ?></td>
															<td><?php echo "Rp ".number_format($datam['jumlah_pinjaman'] ,2,',','.')?></td>
															<td><?php echo "Rp ".number_format($datam['jumlah_pinjaman'] / 10 ,2,',','.')?></td>
															<td><?php echo "Rp ".number_format($datam['jumlah_pinjaman'] / 10 * 0.15 ,2,',','.')?></td>
															<td><?php echo $datam['tanggal_pencairan']; ?>
															<td><?php echo $datam['tanggal_jatuh_tempo']; ?></td>
															<td><?php echo "Rp ".number_format($datam['jumlah_pinjaman'] / 10 + $datam['jumlah_pinjaman'] / 10 * 0.15,2,',','.')?></td>
															<td><?php echo $datam['keterangan']; ?></td>

															<td style="text-align: center;">
																<div class="hidden-sm hidden-xs action-buttons">
																	<a href="#modal-edit<?php echo $datam['id_pencairan']; ?>" role="button" class="green" data-toggle="modal">
																		<i class="ace-icon fa fa-pencil bigger-130"></i>
																	</a>

																	<a class="red" href="#modal-delete<?php echo $datam['id_pencairan']; ?>" role="button" data-toggle="modal">
																		<i class="ace-icon fa fa-trash-o bigger-130"></i>
																	</a>
																</div>

																<div class="hidden-md hidden-lg">
																	<div class="inline pos-rel">
																		<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																			<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																			<li>
																				<a href="#modal-edit<?php echo $datam['id_prncairan']; ?>" role="button" class="" data-toggle="modal" title="Edit">
																					<span class="green">
																						<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																					</span>
																				</a>
																			</li>

																			<li>
																				<a href="#modal-delete<?php echo $datam['id_pencairan']; ?>" role="button" class="" data-toggle="modal" title="Delete">
																					<span class="red">
																						<i class="ace-icon fa fa-trash-o bigger-120"></i>
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</td>

															<!-- Edit modal -->
												<div id="modal-edit<?php echo $datam['id_pencairan']; ?>" class="modal fade" tabindex="-1">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header no-padding">
																<div class="table-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																		<span class="white">&times;</span>
																	</button>
																	Form Edit Data Pencairan
																</div>
															</div>
															<form class="form-horizontal" role="form" form action="" method="post" enctype="multipart/form-data">
															<div class="modal-body">
															<input type="hidden" name="id_pencairan" value="<?php echo $datam['id_pencairan']; ?>" />
																			<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama KSM </label>
																			<div class="col-xs-12 col-sm-9">
																			<select class="col-xs-12 col-sm-12" name="id_anggota" >
																					<?php
																					$querys2 = "SELECT * FROM tb_anggota ORDER BY nama_KSM";
																					$sqls2 = mysqli_query($connect, $querys2);
																					while ($datas2 = mysqli_fetch_array($sqls2)) { 
																					?>
																						<option value="<?php echo $datas2['id_anggota'] ?>" <?php if($datas2['id_anggota']==$data['id_anggota']){echo "selected='selected'";} ?>><?php echo $datas2['nama_KSM']; ?></option>
																					<?php
																					}
																					?>
																				</select>
																			</div>
																			</div>
																			<br>
																	<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div><div class="space-4"></div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jumlah Pinjaman </label>
																		<div class="col-xs-12 col-sm-9">
																			<input type="text" name="jumlah_pinjaman" class="col-xs-12 col-sm-12" value="<?php echo $datam['jumlah_pinjaman']; ?>" required="" />
																		</div>
																	</div>
																	<br>
																	<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div><div class="space-4"></div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pencairan</label>
																		<div class="col-xs-12 col-sm-9">
																			<input type="date" name="tanggal_pencairan" class="col-xs-12 col-sm-12"  value="<?php echo $datam['tanggal_pencairan']; ?>" required="" />
																		</div>
																	</div>
																	<br>
																	<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div><div class="space-4"></div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Jatuh Tempo</label>
																		<div class="col-xs-12 col-sm-9">
																			<input type="date" name="tanggal_jatuh_tempo" class="col-xs-12 col-sm-12"  value="<?php echo $datam['tanggal_jatuh_tempo']; ?>" required="" />
																		</div>
																	</div>
																	<br>
																	<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div><div class="space-4"></div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
																		<div class="col-xs-12 col-sm-9">
																			<input type="text" name="keterangan" class="col-xs-12 col-sm-12"  value="<?php echo $datam['keterangan']; ?>" required="" />
																		</div>
																	</div>
																	<br>
																	<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div><div class="space-6"></div>
															</div>
															<div class="modal-footer center">
																<input type="submit" name="update" class="btn btn-success" value="Edit Data Pencairan">
															</div>	
															</form>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>

												<!-- delete modal -->
												<div id="modal-delete<?php echo $datam['id_pencairan']; ?>" class="modal fade" tabindex="-1">
													<div class="modal-dialog" >
														<div class="modal-content">
															<div class="modal-header no-padding red">
																<div class="table-header" style="background-color: red;">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																		<span class="white">&times;</span>
																	</button>
																	Delete Data Pencairan
																</div>
															</div>
															<form class="form-horizontal" role="form" form action="" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<label class="col-sm-12 control-label " style="color: red;">Apakah Anda yakin akan menghapus data pencairan ? "<?php echo $datam['id_pencairan']; ?> - <?php echo $datam['nama_KSM']; ?>"</label>
																<input type="hidden" name="id_pencairan" value="<?php echo $datam['id_pencairan']; ?>" />	
																<div class="space-6"></div><div class="space-6"></div><div class="space-6"></div>
															</div>
															 <div class="modal-footer">
											                    <input name="delete" type="submit" class="btn btn-danger" Value="Yes">
											                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
											                </div>
															</form>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
														</tr>
														<?php $no++; 
													} ?>	
														
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<script src="../assets/js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../assets/js/dataTables.buttons.min.js"></script>
		<script src="../assets/js/buttons.flash.min.js"></script>
		<script src="../assets/js/buttons.html5.min.js"></script>
		<script src="../assets/js/buttons.print.min.js"></script>
		<script src="../assets/js/buttons.colVis.min.js"></script>
		<script src="../assets/js/dataTables.select.min.js"></script>
		<script src="../assets/js/chosen.jquery.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null, null, null, null
					  { "bSortable": false }
					],
					"aaSorting": [],
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			})
		</script>
	</body>
</html>
