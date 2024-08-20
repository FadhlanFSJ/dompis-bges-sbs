<?php if ($this->session->userdata('level') == "Admin") { ?>
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
		</div>

		<div class="row">
			<!--Semua Tiket
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">All Tiket</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_ticket ?></div>
							</div>
							<div class="col-auto">
								<i class="fas fa-ticket-alt fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			
			<!--Tiket sub kategori Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL DATIN</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_datin ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_datin, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>
								<a href="<?php echo site_url('Dashboard/detail_datin') ?>"><button class="btn btn-primary-datin	">More Info <i class="fa fa-caret-right"></i></button></a>	
							</div>
							<div class="col-auto">
								<i class="fas fa-star fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Tiket sub kategori VOICE-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL POTS</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_voice ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_voice, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_voice, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul_voice') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_voice') ?>"><button class="btn btn-primary-pots">More Info <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-tty fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
 
			<!--Tiket sub kategori HSI-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL HSI</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_hsi ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_hsi, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_hsi, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul_hsi') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_hsi') ?>"><button class="btn btn-primary-hsi">More Info <i class="fa fa-caret-right"></i></button></a>
								</div>
							<div class="col-auto">
								<i class="fas fa-wifi fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--TOTAL TIKET BULAN INI-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-warning text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">Total All Tiket Bulan ini</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $total_records?></div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Datin</td> <td>:</td> <td></td> <td><?php echo $total_datin ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket HSI</td> <td>:</td> <td></td> <td><?php echo $total_hsi ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket VOICE</td> <td>:</td> <td></td> <td><?php echo $total_voice ?></td></div></tr>
								<!--<tr><div class="small font-weight-bold text-uppercase mb-1"><td>jmlh GAUL</td> <td>:</td> <td></td> <td><?php echo $jml_gaul ?></td></div></tr>-->
								</table>
								
							</div>
							<div class="col-auto">
								<i class="fas fa-newspaper fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-xl-12 col-lg-7">
				<!-- Bar Chart -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">List Tiket Hari ini (<?php echo $jlmticket ?>)</h6>
					<!-- <hr>All ticket can be found in the <code>Ticket -> List Ticket</code>. -->
					</div>
					<div class="card-body" style="overflow-x: scroll; height: 390px;">
						<div class="table-responsive-sm">
						<table class="table table-striped" id="table1" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>No Tiket</th>
							<th>Priority</th>
						<!--<th>Waktu Open</th>-->
							<th>Max TTR</th>
						<!--<th>Close</th>-->
							<th>Teknisi</th>
							<th>Teknisi2</th>
							<th>Sub Category</th>
							<th>SO</th>
							<th>SID/INET/NOTEL</th>
							<th>Progress</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($ticket as $row){?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $row->id_ticket?></td>
								<td class="font-weight-bold" style="color: <?php echo $row->warna?>; text-align: center"><?php echo $row->nama_kondisi?></td>
							<!--<td><?php echo $row->tanggal?></td>-->
								<td><?php echo $row->deadline?></td>
							<!--<td>
								    <?php if($row->tanggal_solved == "0000-00-00 00:00:00"){
								        echo "Not solve yet";
								    }else{
								        echo "$row->tanggal_solved";
								    } ?>
								</td>-->
								<td><?php echo $row->nama_teknisi?></td>
								<td><?php echo $row->nama_sub_kategori?></td>
								<td><?php echo $row->lokasi?></td>
								<td><?php echo $row->problem_summary?></td>
								<td>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuenow="<?php echo $row->progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row->progress;?>%">
									<span><?php echo $row->progress;?> % </span>
								</td>
											<?php if($row->id_kondisi == 0){?>
												<td>Not set yet</td>
											
												
											<?php }?> 
											<?php if ($row->status == 0) {?>
												<td>
													<strong style="color: #F36F13;">Ticket Rejected</strong>
												</td>
											<?php } else if ($row->status == 1) {?>
												<td>
													<strong style="color: #946038;">Ticket Submited</strong>
												</td>
											<?php } else if ($row->status == 2) {?>
												<td>
													<strong style="color: #FFB701;">Category Changed</strong>
												</td>
											<?php } else if ($row->status == 3) {?>
												<td>
													<strong style="color: #A2B969;">Assigned to Technician</strong>
												</td>
											<?php } else if ($row->status == 4) {?>
												<td>
													<strong style="color: #0D95BC;">On Progress</strong>
												</td>
											<?php } else if ($row->status == 5) {?>
												<td>
													<strong style="color: #FFCF81;">Pending</strong>
												</td>
											<?php } else if ($row->status == 6) {?>
												<td>
													<strong style="color: #13eb23;">Comply</strong>
												</td>
											<?php } else if ($row->status == 7) {?>
												<td>
													<strong style="color: #ff0808;">Not Comply</strong>
												</td>
											<?php } ?>
										</tr>
									<?php $no++;}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Produktivitas Harian Teknisi</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 390px;">
						<ul>
							<?php $no = 0;
							foreach ($teknisi as $row) : $no++; ?>
									<i class="fas fa-fw fa-user text-black-100"></i>
									<B class="chat-img pull-left">
										<?php echo $row->nama; ?>
									</B>	
									<div class="chat-body clearfix">
										<?php if ($row->total == null) {
											echo "Jumlah WO : 0";
										} else {
											echo "Jumlah WO : $row->total";
										}?>
										<p></p>
									</div><hr>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>				
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Produktivitas Harian HD</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 390px;">
						<ul>
							<?php $no = 0;
							foreach ($helpdesk as $row) : $no++; ?>
									<i class="fas fa-fw fa-user text-black-100"></i>
									<B class="chat-img pull-left">
										<?php echo $row->nama; ?>
									</B>	
									<div class="chat-body clearfix">
										<?php if ($row->total == null) {
											echo "Create Tiket : 0";
										} else {
											echo "Create Tiket : $row->total";
										}?>
										<p></p>
									</div><hr>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>				
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Produktivitas Harian TL</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 390px;">
						<ul>
							<?php $no = 0;
							foreach ($teamleader as $row) : $no++; ?>
									<i class="fas fa-fw fa-user text-black-100"></i>
									<B class="chat-img pull-left">
										<?php echo $row->nama; ?>
									</B>	
									<div class="chat-body clearfix">
										<?php if ($row->total == null) {
											echo "Assign Technician : 0";
										} else {
											echo "Assign Technician : $row->total";
										}?>
										<p></p>
									</div><hr>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>				
			</div>
	</div>
		
		<div class="row">
			<div class="col-lg-6 mb-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">Tiket 
							(<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>)
						</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<div id="line"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mb-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">Tiket By Priority
							(<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>)
						</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<canvas id="myPieChart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 mb-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">Tiket By Sub Category
							(<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>)
						</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<canvas id="bar"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mb-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">Tiket By Status
							(<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>)
						</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<canvas id="myPieChart2"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php
	}else if ($this->session->userdata('level') == "Technician") { ?>
			<?php if($absensi == 'belum_absen') { ?>
				<script type="text/javascript">
					$(document).ready(function(){
						Swal.fire({
						title: 'Absensi Diperlukan',
						text: 'Silahkan melakukan absensi!',
						icon: 'warning',
						// showCancelButton: false,
						confirmButtonText: 'Absen Sekarang'
					}).then((result) => {
						if (result.isConfirmed) {
							// Redirect ke halaman absensi atau lakukan aksi absensi lainnya
							window.location.href = '<?= site_url('Dashboard/Kehadiran') ?>';
						}
					});
					})
				</script>
			<?php } else if ($absensi == 'sudah_absen') { ?>
				<script>
					$(document).ready(function(){
						Toast.fire({
							icon: 'success',
							title: 'Anda telah melakukan Absensi, Selamat Kerja!'
						});
					})
					
				</script>
			<?php } ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
			</div>
			<div class="row">

				<!--Tiket sub kategori Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL DATIN</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_datin ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_datin, 2,',','') ?>%</span></td></h4></tr>
								</table>
					
								<a href="<?php echo site_url('Dashboard/detail_datin') ?>"><button class="btn btn-primary-datin	">More Info <i class="fa fa-caret-right"></i></button></a>	
							</div>
							<div class="col-auto">
								<i class="bi bi-star fs-2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Tiket sub kategori VOICE-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL POTS</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_voice ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_voice, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_voice, 2,',','') ?>%</span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_voice') ?>"><button class="btn btn-primary-pots">More Info <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-tty fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
 
			<!--Tiket sub kategori HSI-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL HSI</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_hsi ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_hsi, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_gaul_hsi, 2,',','') ?>%</span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_hsi') ?>"><button class="btn btn-primary-hsi">More Info <i class="fa fa-caret-right"></i></button></a>
								</div>
							<div class="col-auto">
								<i class="fas fa-wifi fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

				<!--Need Approve-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-danger text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Assigned Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $tekassign ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-ticket-alt fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Pending-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-warning text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">New Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $tekapprove ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-clipboard-list fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Proses-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-info text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">On Process</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $tekkerja ?></div>
									<h4 class="small font-weight-bold">On Hold: <span><?php echo $tekpending ?></span></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-circle-notch fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Done-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-primary text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Done</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $tekselesai ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-check-circle fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-xl-8 col-lg-7">
				<!-- Bar Chart -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">My Assignment (<?php echo $jlmtugas ?>)</h6>
					</div>
					<div class="card-body" style="overflow-x: scroll; height: 390px;">
						<div class="table-responsive-sm">
							<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Tiket</th>
										<th>Prioritas</th>
										<th>Waktu Open</th>
										<th>Max TTR</th>
										<th>Nama</th>
										<th>Sub Category</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($datatickettek as $row){?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $row->id_ticket ?></td>
											<?php if($row->id_kondisi == 0){?>
												<td>Not set yet</td>
											<?php }else{?>
												<td style="color: <?php echo $row->warna?>"><?php echo $row->nama_kondisi ?></td>
											<?php }?> 
											<td><?php echo $row->tanggal ?></td>
											<td><?php echo $row->deadline ?></td>
											<td><?php echo $row->nama ?></td>
											<td><?php echo $row->nama_sub_kategori ?></td>
											<?php if ($row->status == 3) {?>
												<td>
													<strong style="color: #A2B969;">Assigned to You</strong>
												</td>
											<?php } else if ($row->status == 4) {?>
												<td>
													<strong style="color: #0D95BC;">On Progress</strong>
												</td>
											<?php } else if ($row->status == 5) {?>
												<td>
													<strong style="color: #FFCF81;">Pending</strong>
												</td>
											<?php } else if ($row->status == 6) {?>
												<td>
													<strong style="color: #2E6095;">Comply</strong>
												</td>
											<?php } ?>
										</tr>
									<?php $no++;}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Information</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 450px;">
						<ul>
							<?php $no = 0;
							foreach ($datainformasi as $row) : $no++; ?>
								<li class="left clearfix">
									<span class="chat-img pull-left">
										<?php echo $row->nama; ?> (<small><?php echo $row->tanggal; ?></small>)
									</span>
									<div class="chat-body clearfix">
										<b><?php echo $row->subject; ?></b>
										<h4 class="small font-weight-bold"><?php echo $row->pesan; ?>.</h4>
										<p></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		</div>

		

		<!--Menu Untuk User-->
		<?php
	}else if ($this->session->userdata('level') == "User") { ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
			</div>
			<div class="row">
				<!--All ticket-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-danger text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Your Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $userticket ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-ticket-alt fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Approved-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-warning text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">New Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $userapprove ?></div>
									<h4 class="small font-weight-bold">Reject: <span><?php echo $userreject ?></span></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-clipboard-list fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<!--On Process-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-info text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">On Progress</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $userprocess ?></div>
									<h4 class="small font-weight-bold">Pending: <span><?php echo $userpending ?></span></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-circle-notch fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Done-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-primary text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Done</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $userdone ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-check-circle fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Tiket sub kategori Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL DATIN</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_datin ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_datin, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>
					
								<a href="<?php echo site_url('Dashboard/detail_datin') ?>"><button class="btn btn-primary-datin	">More Info <i class="fa fa-caret-right"></i></button></a>	
							</div>
							<div class="col-auto">
								<i class="bi bi-star fs-2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Tiket sub kategori VOICE-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL POTS</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_voice ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_voice, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_voice, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul_voice') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_voice') ?>"><button class="btn btn-primary-pots">More Info <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-tty fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
 
			<!--Tiket sub kategori HSI-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">TOTAL HSI</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_info_hsi ?></div>
								<table>
									<tr><h4 class="small font-weight-bold"><td>Q GGN</td> <td>:</td> <td></td> <td> <span><?php echo number_format($precent_ticket_solved_hsi, 2,',','') ?>%</span></td></h4></tr>
									<tr><h4 class="small font-weight-bold"><td>GAUL</td><td>:</td> <td></td> <td><span><?php echo number_format($precent_ticket_gaul_hsi, 2,',','') ?>% <a href="<?php echo site_url('Dashboard/detail_gaul_hsi') ?>"><i class="fas fa-eye"></i></a></span></td></h4></tr>
								</table>

								<a href="<?php echo site_url('Dashboard/detail_hsi') ?>"><button class="btn btn-primary-hsi">More Info <i class="fa fa-caret-right"></i></button></a>
								</div>
							<div class="col-auto">
								<i class="fas fa-wifi fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--TOTAL TIKET BULAN INI-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-warning text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">Total All Tiket Bulan ini</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $total_records?></div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Datin</td> <td>:</td> <td></td> <td><?php echo $total_datin ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket HSI</td> <td>:</td> <td></td> <td><?php echo $total_hsi ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket VOICE</td> <td>:</td> <td></td> <td><?php echo $total_voice ?></td></div></tr>
								<!--<tr><div class="small font-weight-bold text-uppercase mb-1"><td>jmlh GAUL</td> <td>:</td> <td></td> <td><?php echo $jml_gaul ?></td></div></tr>-->
								</table>
								
							</div>
							<div class="col-auto">
								<i class="fas fa-newspaper fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
			<div class="row">
			<div class="col-xl-8 col-lg-7">
				<!-- Bar Chart -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">My Tiket Summary</h6>
						<hr>Detail for the ticket can be found in the <code>My Tiket</code>.
					</div>
					<div class="card-body" style="overflow-x: scroll; height: 390px;">
						<div class="table-responsive-sm">
							<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Tiket</th>
										<th>Waktu Open</th>
										<th>Nama</th>
										<th>Sub Category</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($dataticketuser as $row){?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $row->id_ticket ?></td>
											<td><?php echo $row->tanggal ?></td>
											<td><?php echo $row->nama ?></td>
											<td><?php echo $row->nama_sub_kategori ?></td>
											<?php if ($row->status == 0) {?>
												<td>
													<strong style="color: #F36F13;">Ticket Rejected</strong>
												</td>
											<?php } else if ($row->status == 1) {?>
												<td>
													<strong style="color: #946038;">Ticket Submited</strong>
												</td>
											<?php } else if ($row->status == 2) {?>
												<td>
													<strong style="color: #FFB701;">Category Changed</strong>
												</td>
											<?php } else if ($row->status == 3) {?>
												<td>
													<strong style="color: #A2B969;">Assigned to Technician</strong>
												</td>
											<?php } else if ($row->status == 4) {?>
												<td>
													<strong style="color: #0D95BC;">On Progress</strong>
												</td>
											<?php } else if ($row->status == 5) {?>
												<td>
													<strong style="color: #FFCF81;">Pending</strong>
												</td>
											<?php } else if ($row->status == 6) {?>
												<td>
													<strong style="color: #13eb23;">Comply</strong>
												</td>
											<?php } else if ($row->status == 7) {?>
												<td>
													<strong style="color: #ff0808;">Not Comply</strong>
												</td>
											<?php } ?>
										</tr>
									<?php $no++;}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Information</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 450px;">
						<ul>
							<?php $no = 0;
							foreach ($datainformasi as $row) : $no++; ?>
								<li class="left clearfix">
									<span class="chat-img pull-left">
										<?php echo $row->nama; ?> (<small><?php echo $row->tanggal; ?></small>)
									</span>
									<div class="chat-body clearfix">
										<b><?php echo $row->subject; ?></b>
										<h4 class="small font-weight-bold"><?php echo $row->pesan; ?>.</h4>
										<p></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	}else if ($this->session->userdata('level') == "Helpdesk") { ?>
	<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			</div>
			<div class="row">
				<!--All ticket-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-danger text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Your Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $userticket ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-ticket-alt fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Approved-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-warning text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">New Tiket</div>
									<div class="h5 mb-0 font-weight-bold"><?php  echo $userapprove ?></div>
									<h4 class="small font-weight-bold">Reject: <span><?php echo $userreject ?></span></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-clipboard-list fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--On Process-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-info text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">On Progress</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $userprocess ?></div>
									<h4 class="small font-weight-bold">Pending: <span><?php echo $userpending ?></span></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-circle-notch fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Done-->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card bg-primary text-white shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-uppercase mb-1">Done</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $userdone ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-check-circle fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-xl-8 col-lg-7">
				<!-- Bar Chart -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">My Tiket Summary</h6>
						<hr>Detail for the ticket can be found in the <code>My Tiket</code>.
					</div>
					<div class="card-body" style="overflow-x: scroll; height: 390px;">
						<div class="table-responsive-sm">
							<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Tiket</th>
										<th>Waktu Open</th>
										<th>Nama</th>
										<th>Sub Category</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($dataticketuser as $row){?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $row->id_ticket ?></td>
											<td><?php echo $row->tanggal ?></td>
											<td><?php echo $row->nama ?></td>
											<td><?php echo $row->nama_sub_kategori ?></td>
											<?php if ($row->status == 0) {?>
												<td>
													<strong style="color: #F36F13;">Ticket Rejected</strong>
												</td>
											<?php } else if ($row->status == 1) {?>
												<td>
													<strong style="color: #946038;">Ticket Submited</strong>
												</td>
											<?php } else if ($row->status == 2) {?>
												<td>
													<strong style="color: #FFB701;">Category Changed</strong>
												</td>
											<?php } else if ($row->status == 3) {?>
												<td>
													<strong style="color: #A2B969;">Assigned to Technician</strong>
												</td>
											<?php } else if ($row->status == 4) {?>
												<td>
													<strong style="color: #0D95BC;">On Progress</strong>
												</td>
											<?php } else if ($row->status == 5) {?>
												<td>
													<strong style="color: #FFCF81;">Pending</strong>
												</td>
											<?php } else if ($row->status == 6) {?>
												<td>
													<strong style="color: #13eb23;">Comply</strong>
												</td>
											<?php } else if ($row->status == 7) {?>
												<td>
													<strong style="color: #ff0808;">Not Comply</strong>
												</td>
											<?php } ?>
										</tr>
									<?php $no++;}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-gray-800">Information</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body" style="overflow: scroll; height: 450px;">
						<ul>
							<?php $no = 0;
							foreach ($datainformasi as $row) : $no++; ?>
								<li class="left clearfix">
									<span class="chat-img pull-left">
										<?php echo $row->nama; ?> (<small><?php echo $row->tanggal; ?></small>)
									</span>
									<div class="chat-body clearfix">
										<b><?php echo $row->subject; ?></b>
										<h4 class="small font-weight-bold"><?php echo $row->pesan; ?>.</h4>
										<p></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
} 
?>

<?php
    //Inisialisasi nilai variabel awal
    $subkat 	= "";
    $jumlah		=null;

    $kondisi 	= "";
    $BGkondisi 	= "";
    $jkondisi 	=null;

    $bulan 		= "";
    $Jbulan		=null;

    $Tstat     = "";
    $BGstat   = "";
    $Jstat    = null;

    foreach ($lbl_subkat as $data)
    {
        $sub=$data->nama_sub_kategori;
        $subkat .= "'$sub'". ", ";
        $jum=$data->total;
        $jumlah .= "$jum". ", ";
    }

    foreach ($lbl_kondisi as $data)
    {
    	$id=$data->id_kondisi;
    	if($id == 0){
    		$knds= "Not set yet";
    	}else{
    		$knds=$data->nama_kondisi;
    	}
        $kondisi .= "'$knds'". ", ";
        $bg=$data->warna;
        $BGkondisi .= "'$bg'". ", ";
        $jumk=$data->jumkondisi;
        $jkondisi .= "$jumk". ", ";
    }

    foreach ($lbl_perbulan as $data)
    {
        $bul=$data->bulan;
        $bulan .= "'$bul'". ", ";
        $Jumb=$data->jumbulan;
        $Jbulan .= "$Jumb". ", ";
    }

    foreach ($lbl_status as $data)
    {
        if ($data->status == 0) {
            $stat = "Ticket Rejected";
            $bg = "#F36F13";
        } else if ($data->status == 1) {
            $stat = "Ticket Submited";
            $bg = "#946038";
        } else if ($data->status == 2) {
            $stat = "Category Changed";
            $bg = "#FFB701";
        } else if ($data->status == 3) {
            $stat = "Assigned to Technician";
            $bg = "#A2B969";
        } else if ($data->status == 4) {
            $stat = "On Process";
            $bg = "#0D95BC";
        } else if ($data->status == 5) {
            $stat = "Pending";
            $bg = "#FFCF81";
        } else if ($data->status == 6) {
            $stat = "Comply";
            $bg = "#13eb23";
        } else if ($data->status == 7) {
            $stat = "Not Comply";
            $bg = "#ff0808";
        }
        $Tstat  .= "'$stat'". ", ";
        $BGstat .= "'$bg'". ", ";
        $jstat   =$data->jumstat;
        $Jstat  .= "$jstat". ", ";
    }
?>

<script type="text/javascript">
	window.onload = function() {
		var Bar = document.getElementById("bar");
		var chart = new Chart(Bar, {
			type: 'horizontalBar',
			data: {
				labels: [<?php echo $subkat; ?>],
				datasets : [{
					label: 'Total Ticket',
					backgroundColor: "#FC8500",
					hoverBackgroundColor: "#FC8500",
					borderColor: "#4e73df",
					data: [<?php echo $jumlah; ?>]
				}]
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					displayColors : false
				},
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						ticks: {
							beginAtZero:true,
						}
					}],
					yAxes: [{
						gridLines: {
							display: false,
							drawBorder: false
						},
						maxBarThickness: 25,
					}]
				},
				legend: {
					display: false
				}
			}
		});

		var Line = document.getElementById("line");
		var myLineChart = new Chart(Line, {
			type: 'line',
			data: {
				labels: [<?php echo $bulan; ?>],
				datasets: [{
					label: 'Total Ticket',
					lineTension: 0.3,
					backgroundColor: "transparent",
					borderColor: "#209EEB",
					pointRadius: 3,
					pointBackgroundColor: "#209EEB",
					pointBorderColor: "#209EEB",
					pointHoverRadius: 3,
					pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
					pointHoverBorderColor: "rgba(78, 115, 223, 1)",
					pointHitRadius: 10,
					pointBorderWidth: 2,
					data: [<?php echo $Jbulan; ?>]
				}],
			},
			options:{
				maintainAspectRatio: false,
				tooltips: {
					displayColors : false
				},
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						gridLines: {
							display: false,
							drawBorder: false,
						},
						maxBarThickness: 25,
					}],
					yAxes: [{
						ticks: {
							beginAtZero:true,
						}
					}]
				},
				legend: {
					display: false
				}
			}
		});

		var Pie = document.getElementById("myPieChart");
		var myPieChart = new Chart(Pie, {
			type :'doughnut',
			data: {
				labels: [<?php echo $kondisi; ?>],
				datasets: [{
					data: [<?php echo $jkondisi; ?>],
					backgroundColor: [<?php echo $BGkondisi; ?>],
					hoverBackgroundColor: [<?php echo $BGkondisi; ?>],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					position: 'right'
				},
				tooltips: {
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					caretPadding: 10,
				},
			},
		});

		var Pie = document.getElementById("myPieChart2");
		var myPieChart = new Chart(Pie, {
			type :'doughnut',
			data: {
				labels: [<?php echo $Tstat?>],
				datasets: [{
					data: [<?php echo $Jstat; ?>],
					backgroundColor: [<?php echo $BGstat; ?>],
					hoverBackgroundColor: [<?php echo $BGstat; ?>],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					position: 'right'
				},
				tooltips: {
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					caretPadding: 10,
				},
			},
		});
	}
</script>