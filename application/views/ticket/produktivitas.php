
<div class="container-fluid">
	<h1 class="h3 mb-0 text-gray-800">List Produktivitas </h1><hr>

	<!-- Datatable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-gray-800">Produktivitas Teknisi</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped" id="table1" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Jumlah WO</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($teknisi_pro as $row){?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $row->nik?></td>
								<td><?php echo $row->nama?></td>
								<td><?php echo $row->total?></td>
								<td>
									<a href="<?php echo site_url('List_ticket/index_tugas/'. $row->nik)?>" class="btn btn-primary btn-circle btn-sm" title="Detail">
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