<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$("#id_kategori").change(function() {	 		
			var data = {
				id_kategori: $("#id_kategori").val()
			};
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('Select/select_sub') ?>",
				data: data,
				success: function(msg) {
					$('#div-order').html(msg);
				}
			});
		});

	});
</script>

<div class="container-fluid">
	<h1 class="h3 mb-0 text-gray-800">Create Tiket</h1>
	<p class="mb-4">Silahkan input Tiket pada form dibawah ini</p> 

	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('status')?>"></div>
	<?php echo form_error('id_ticket'); ?>
	<?php echo form_error('id_kategori'); ?>
	<?php echo form_error('id_sub_kategori'); ?>
	<?php echo form_error('tanggal')?>
	<?php echo form_error('id_kondisi'); ?>
	<?php echo form_error('id_lokasi'); ?>
	<?php echo form_error('id_rca'); ?>
	<?php echo form_error('problem_summary'); ?>
	<?php echo form_error('problem_detail'); ?>
	<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
  		<i class="fa fa-upload"></i> Import CSV
	</button>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Create Your Tiket</h6>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo site_url('List_ticket_user/submit')?>" enctype="multipart/form-data">
			
				
				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Tiket Laporan</label>
					<input class="form-control" name="id_ticket" placeholder="Input Tiket">
				</div>
				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Input Tanggal dan Waktu</label>
					<input type="datetime-local" name="tanggal" class="form-control">
				</div>

				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Kategori</label>
					<?php echo form_dropdown('id_kategori', $dd_kategori, $id_kategori, 'id="id_kategori" class="form-control"'); ?>
				</div>

				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Sub Kategori</label>
					<div id="div-order">
						<?php echo form_dropdown('id_sub_kategori', $dd_sub_kategori, $id_sub_kategori, ' class="form-control"');?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">SO</label>
					<?php echo form_dropdown('id_lokasi', $dd_lokasi, $id_lokasi, ' class="form-control"');?>
				</div>

				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">SID/INET/NOTEL</label>
					<input class="form-control" name="problem_summary" placeholder="Subject">
				</div>

				<!-- <div class="form-group">
					<label class="m-0 font-weight-bold text-primary">PENYEBAB GANGGUAN (RCA)</label>
					<?php echo form_dropdown('id_rca', $dd_rca, $id_rca, 'class="form-control"');?>
				</div> -->
				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Description</label>
					<textarea name="problem_detail" placeholder="Describe your problem" class="form-control" rows="10"></textarea>
				</div>

				<div class="form-group">
					<label class="m-0 font-weight-bold text-primary">Attachment</label> </br>
					<span class="label label-success">Max Size 2 MB. Format file: gif, jpg, png, or pdf.</span><br>
					<input type="file" name="filefoto" size="20" required>
				</div><br>

				<button type="submit" class="btn btn-primary">Submit</button>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	const flashData = $('.flash-data').data('flashdata');
	if (flashData){
		Swal.fire({
			icon: 'error',
			title: flashData,
			text: 'Something went wrong! Image file is more than 2MB or not supported format',
			footer: ''
		})
	}
	
	$('textarea').keypress(function(event) {
      if (event.which == 13) {
        event.preventDefault();
          var s = $(this).val();
          $(this).val(s+"\n");
      }
    });
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('List_ticket_user/importcsv') ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label class="m-0 font-weight-bold text-primary">Attachment</label> </br>
            <span class="label label-success">Format file : .csv</span><br>
            <input type="file" name="filecsv">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
