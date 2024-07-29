<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/compiled/css/app.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/compiled/css/app-dark.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/compiled/css/iconly.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/extension/@fontawesome/fontawesome-free/all.min.css') ?>">
</head>
<body>
    <script src="<?php echo base_url('/assets/static/js/initTheme.js') ?>"></script>
    <div id="app">
        <div id="sidebar" class="active">
            <?php $this->load->view($sidebar)?>
        </div>
        <div id="main">
            <div id="content">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <!-- <?php $this->load->view($navbar);?> -->
                <div id="main-content" class="container-fluid">
                    <?php $this->load->view($body);?>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal -->
    <div class="modal fade" id="modal-stok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php echo form_open('Login/logout'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin log out?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih tombol Log out jika iya.</div>
                <div class="modal-footer" id="ModalFooter">
                    <button class="btn btn-primary" type="submit">Log Out</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/extensions/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/static/js/components/dark.js') ?>"></script>
    <script src="<?php echo base_url('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/extensions/@fontawesome/fontawesome-free/js/all.js') ?>"></script>
    
    <script src="<?php echo base_url('assets/compiled/js/app.js') ?>"></script>
    <!-- Need: Apexcharts -->
    <script src="<?php echo base_url('assets/extensions/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/static/js/pages/dashboard.js') ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?php echo base_url('assets/extensions/datatables.net/jquery.dataTables.min.js') ?>"></script>
</body>
</html>