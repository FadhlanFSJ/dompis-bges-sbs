<div class="container-fluid">
	<h1 class="h3 mb-0 text-gray-800">List Tiket</h1><hr>

	<!-- Date Filter Form -->
    <div class="row mb-4">
        <div class="col-md-12">
            <form method="get" action="<?php echo site_url('List_ticket/filtertanggal'); ?>" class="form-inline">
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control mx-3" value="<?php echo $this->input->get('start_date'); ?>">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control mx-3" value="<?php echo $this->input->get('end_date'); ?>">
                </div>
                <button type="submit" class="btn btn-primary mx-3">
					<i class="fas fa-filter"></i>Filter
				</button>
				<a href="<?php echo site_url('List_ticket'); ?>" class="btn btn-secondary">
					<i class="fas fa-undo"></i>Reset
				</a>
			<div class="btn-group dropdown ">
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split mx-3"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only"><i class="bi bi-cloud-download-fill"></i></i> export </span>
                                </button>
				<div class="dropdown-menu">
                                    <a class="dropdown-item active" href="<?php echo site_url('List_ticket/checkDataExport?start_date=' . $this->input->get('start_date') . '&end_date=' . $this->input->get('end_date')); ?>">EXCEL</a>
                </div>
             </div>
            </form>
			<div class="dropdown">
                <button class="btn btn-warning dropdown-toggle me-1" type="button"
						id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						Export
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
						<a class="dropdown-item" href="<?php echo site_url('List_ticket/checkDateExport?start_date=' . $this->input->get('start_date') . '&end_date=' . $this->input->get('end_date')); ?>">Excel</a>
                    </div>
				</div>
        </div>
    </div>

	<!-- Datatable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-gray-800">List All Tiket</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped" id="table1" width="100%" cellspacing="0">
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
							<th>Durasi</th>
							<th>Teknisi</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($listticket as $row){?>
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
								<td><?php echo gmdate("H:i:s", $row->durasi_waktu)?></td>
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