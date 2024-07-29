<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">List Absensi Teknisi</h1>
    <hr>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('status')?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-gray-800">Data Teknisi</h6>
            <hr>
            <div class="">
                <a href="<?php echo site_url('Absensi/reset'); ?>" title="Reset" class="btn btn-danger">
                    <i class="fa fa-undo"></i> Reset
                </a>
                <button id="updateButton" title="Update" class="btn btn-success">
                    <i class="fa fa-sync"></i> Update
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <form id="absensiForm" method="post" action="<?php echo site_url('Absensi/update');?>">
                    <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($karyawan as $row){?>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $row->nik?></td>
                                    <td><?php echo $row->nama?></td>
                                    <td><?php echo ($row->status_absensi == 0) ? 'Tidak Hadir' : 'Hadir'; ?></td>
                                    <td>
                                        <input type="hidden" name="status_absensi[<?php echo $row->nik; ?>]" value="0">
                                        <input class="form-check-input" type="checkbox" name="status_absensi[<?php echo $row->nik; ?>]" value="1" <?php echo ($row->status_absensi == 1) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('updateButton').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah form submission langsung
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data akan diperbarui!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, perbarui!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('absensiForm').submit(); // Submit form jika dikonfirmasi
            }
        });
    });

    document.querySelector('.btn-danger').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah redirect langsung
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Semua data akan direset!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, reset!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = this.href; // Redirect ke URL reset jika dikonfirmasi
            }
        });
    });
</script>
