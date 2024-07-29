<?php if ($this->session->userdata('level') == "Admin") { ?>
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">DASHBOARD DATIN</h1>
            <a href="<?php echo site_url('Dashboard') ?>"><button class="btn btn-primary"><i class="fa fa-caret-left"></i> Back to Dashboard</button></a>
		</div>

		<div class="row">
				<!--Status Tiket Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-status text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Total Tiket Datin Bulan ini</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_notcomply ?></td></div></tr>
								</table>
							</div>
							<div class="col-auto">
								<i class="fas fa-exclamation-circle fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K1-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K1</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k1') ?>"><button class="btn btn-primary-kat">Detail Tiket <i class="fa fa-caret-right"></i></button></a>	
							</div>
							<div class="col-auto">
								<i class="fas fa-burn fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K2-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k2 text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K2</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k2') ?>"><button class="btn btn-primary-kat2">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-bell fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K3-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k3 text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K3</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k3') ?>"><button class="btn btn-primary-kat3">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-sync fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Valdat Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Valdat Datin</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Valid</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Not Valid</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Prosentase</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_notcomply ?></td></div></tr>
								</table>
							</div>
							<div class="col-auto">
								<i class="fas fa-database fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Unspec Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi-sts text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">UNSPEC DATIN</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K1</td> <td>:</td> <td></td> <td><?php echo $jml_unspec_k1 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K2</td> <td>:</td> <td></td> <td><?php echo $jml_unspec_k2 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K3</td> <td>:</td> <td></td> <td><?php echo $jml_unspec_k3 ?></td></div></tr>
								</table>
								<!--<a href="<?php echo site_url('List_ticket/tiket_datin_k3') ?>"><button class="btn btn-primary-pots1">Detail Tiket <i class="fa fa-caret-right"></i></button></a>-->
							</div>
							<div class="col-auto">
								<i class="fas fa-crosshairs fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Status Preventive Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">PREVENTIVE DATIN</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K1</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K2</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K3</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k3') ?>"><button class="btn btn-primary-pots">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fa fa-cogs fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Process-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-primary text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket Datin On Progress</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_process ?></div>
								<h4 class="small font-weight-bold">Tiket Pending:  <span><?php echo $jml_pending ?></span></h4>
							</div>
							<div class="col-auto">
								<i class="fas fa-spinner fa-2x"></i>
							</div>
						</div>
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
							<canvas id="myAreaChart"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mb-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-gray-800">Tiket By Prioritas
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
							<canvas id="myBarChart"></canvas>
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
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
			</div>
			<div class="row">
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
				<h1 class="h3 mb-0 text-gray-800">DASHBOARD DATIN</h1>
				<a href="<?php echo site_url('Dashboard') ?>"><button class="btn btn-primary"><i class="fa fa-caret-left"></i> Back to Dashboard</button></a>
			</div>
			<div class="row">

				<!--Status Tiket Datin-->
				<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-status text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Total Tiket Datin Bulan ini</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_notcomply ?></td></div></tr>
								</table>
							</div>
							<div class="col-auto">
								<i class="fas fa-exclamation-circle fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K1-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K1</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k1_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k1') ?>"><button class="btn btn-primary-kat">Detail Tiket <i class="fa fa-caret-right"></i></button></a>	
							</div>
							<div class="col-auto">
								<i class="fas fa-burn fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K2-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k2 text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K2</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k2_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k2') ?>"><button class="btn btn-primary-kat2">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-bell fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Tiket Datin K3-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-datin-k3 text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket K3</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Close</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Tiket Not Comply</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/tiket_datin_k3') ?>"><button class="btn btn-primary-kat3">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fas fa-sync fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Valdat Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-hsi text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">Valdat Datin</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Valid</td> <td>:</td> <td></td> <td><?php echo $jml_info_valid ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Not Valid</td> <td>:</td> <td></td> <td><?php echo $jml_info_notvalid ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>Prosentase</td> <td>:</td> <td></td> <td><?php echo $jml_info_notvalid ?></td></div></tr>
								</table>
							</div>
							<div class="col-auto">
								<i class="fas fa-database fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Status Unspec Datin-->
			<div class="col-xl-3 col-md-6 mb-4"> 
				<div class="card bg-hsi-sts text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">UNSPEC DATIN</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K1</td> <td>:</td> <td></td> <td><?php echo $jml_info_unspeck1 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K2</td> <td>:</td> <td></td> <td><?php echo $jml_info_unspeck1 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K3</td> <td>:</td> <td></td> <td><?php echo $jml_info_unspeck3 ?></td></div></tr>
								</table>
								<!--<a href="<?php echo site_url('List_ticket/tiket_datin_k3') ?>"><button class="btn btn-primary-pots1">Detail Tiket <i class="fa fa-caret-right"></i></button></a>-->
							</div>
							<div class="col-auto">
								<i class="fas fa-crosshairs fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Status Preventive Datin-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-danger text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1">PREVENTIVE DATIN</div>
								<table>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K1</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3 ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K2</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_comply ?></td></div></tr>
									<tr><div class="small font-weight-bold text-uppercase mb-1"><td>K3</td> <td>:</td> <td></td> <td><?php echo $total_datin_k3_notcomply ?></td></div></tr>
								</table>
								<a href="<?php echo site_url('List_ticket/preventive_datin') ?>"><button class="btn btn-primary-pots">Detail Tiket <i class="fa fa-caret-right"></i></button></a>
							</div>
							<div class="col-auto">
								<i class="fa fa-cogs fa-2x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Process-->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card bg-primary text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-uppercase mb-1">Tiket Datin On Progress</div>
								<div class="h5 mb-0 font-weight-bold"><?php echo $jml_process ?></div>
								<h4 class="small font-weight-bold">Tiket Pending:  <span><?php echo $jml_pending ?></span></h4>
							</div>
							<div class="col-auto">
								<i class="fas fa-spinner fa-2x"></i>
							</div>
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
		var Bar = document.getElementById("myBarChart");
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

		var Line = document.getElementById("myAreaChart");
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