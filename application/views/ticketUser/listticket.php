<div class="container-fluid">
	<h1 class="h3 mb-0 text-gray-800">My Tiket</h1>
	<p class="mb-4">List of all tiket that you already submit.</p>

	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('status')?>"></div>
	<div class="row mb-4">
        <div class="col-md-12">
            <form method="get" action="<?php echo site_url('List_ticket_user/filtertanggal'); ?>" class="form-inline">
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control mx-3" value="<?php echo $this->input->get('start_date'); ?>">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control mx-3" value="<?php echo $this->input->get('end_date'); ?>">
                </div>
                <button type="submit" class="btn btn-primary mx-sm-3">
					<i class="fas fa-filter mr-1"></i>Filter
				</button>
				<a href="<?php echo site_url('List_ticket_user'); ?>" class="btn btn-secondary">
					<i class="fas fa-undo mr-1"></i>Reset
				</a>
            </form>
        </div>
    </div>

	<!-- Datatable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Tiket</h6>
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
							<th>Sub Kategori</th>
							<th>SO</th>
							<th>SID/INET/NOTEL</th>
							<th>Last Update</th>
							<th>Teknisi</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($ticket as $row){?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $row->id_ticket?></td>
								<?php if ($row->status == 0){?>
									<td style="text-align: center">Rejected</td>
								<?php }else{?>
									<?php if($row->id_kondisi == 0) {?>
										<td style="text-align: center">Will be determined</td>
									<?php } else { ?>
										<td class="font-weight-bold" style="color: <?php echo $row->warna?>; text-align: center"><?php echo $row->nama_kondisi?></td>
									<?php } ?>
								<?php }?>
								<td><?php echo $row->tanggal?></td>
								<td><?php echo $row->nama_sub_kategori?></td>
								<td><?php echo $row->lokasi?></td>
								<td><?php echo $row->problem_summary?></td>
								<td><?php echo $row->last_update?></td>
								<td style="text-align: center">
								    <?php if($row->status == 0) {
								    	echo "Rejected";
								    } else {
								    	if($row->teknisi == null){
								    		echo "Will be determined";
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
									<a href="<?php echo site_url('List_ticket_user/detail/'.$row->id_ticket)?>" class="btn btn-primary btn-circle btn-sm" title="Detail">
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

<script type="text/javascript">
	const flashData = $('.flash-data').data('flashdata');
	if (flashData){
		Swal.fire(
			'Success!',
			'Ticket Has Been ' + flashData + ' Successfully',
			'success'
			)
	}
</script>