<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">List Tiket</h1>
            <a href="<?php echo site_url('Dashboard') ?>"><button class="btn btn-primary"><i class="fa fa-caret-left"></i> Back to Dashboard</button></a>
		</div>
	<!-- Datatable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-gray-800">List Tiket Datin GAUL</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>No Tiket</th> 
							<th>Priority</th>
							<th>Waktu Open</th>
							<th>Max TTR</th>
						<!--<th>Nama</th> -->
							<th>Sub Category</th>
							<th>SO</th>
							<th>SID/INET/NOTEL</th>
							<th>Last Update</th>
							<th>Teknisi</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($listticket_datin_gaul as $row){?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $row->id_ticket?></td>
								<?php if ($row->status == 0){?>
									<td style="text-align: center">Rejected</td>
								<?php }else{?>
									<?php if($row->id_kondisi == 0) {?>
										<td style="text-align: center">Not set yet</td>
									<?php } else { ?>
										<td class="font-weight-bold" style="color: <?php echo $row->warna?>; text-align: center"><?php echo $row->nama_kondisi?></td>
									<?php } ?>
								<?php }?>
								<td><?php echo $row->tanggal?></td>
								<td><?php echo $row->deadline?></td>
						<!--		<td><?php echo $row->nama?></td>  -->
								<td><?php echo $row->nama_sub_kategori?></td>
								<td><?php echo $row->lokasi?></td>
								<td><?php echo $row->problem_summary?></td>
								<td><?php echo $row->last_update?></td>
								<td style="text-align: center">
								    <?php if($row->status == 0) {
								    	echo "Rejected";
								    } else {
								    	if($row->teknisi == null){
								    		echo "Not set yet";
								    	} else {
								    		echo "$row->nama_teknisi";
								    	}
								    } ?>
								</td>
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
										<strong style="color: #023047;">Pending</strong>
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
								<td>
									<a href="<?php echo site_url('List_ticket/detail_ticket/'.$row->id_ticket)?>" class="btn btn-primary btn-circle btn-sm" title="Detail">
										<i class="fas fa-search"></i>
									</a>
								</td>
							</tr>
						<?php $no++;}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>