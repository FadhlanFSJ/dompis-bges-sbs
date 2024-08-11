<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller
{
	public function __construct()
	{ 
		parent::__construct();
        //Meload model_app
		$this->load->model('model_app');
        //Jika session tidak ditemukan
		if (!$this->session->userdata('id_user')) {
            //Kembali ke halaman Login
            $this->session->set_flashdata("msg", "<div class='alert alert-info'>
       		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       	    <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> 
       	    Please Login First.</div>");
            redirect('login');
        }
	}

	public function index()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "dashboard/dashboard";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        //Papan Pengumuman
        $data['datainformasi'] = $this->model_app->informasi()->result();

        //Mengambil data jumlah total DATIN dari tabel informasi
        $jml_info_datin = $this->db->query("SELECT pesan AS jml_info_datin FROM informasi WHERE id_informasi IN (4)")->row();
        $data['jml_info_datin']           = $jml_info_datin->jml_info_datin;

        //Mengambil data jumlah total HSI dari tabel informasi
        $jml_info_hsi = $this->db->query("SELECT pesan AS jml_info_hsi FROM informasi WHERE id_informasi IN (5)")->row();
        $data['jml_info_hsi']           = $jml_info_hsi->jml_info_hsi;

        //Mengambil data jumlah total VOICE dari tabel informasi
        $jml_info_voice = $this->db->query("SELECT pesan AS jml_info_voice FROM informasi WHERE id_informasi IN (6)")->row();
        $data['jml_info_voice']           = $jml_info_voice->jml_info_voice;

        //Mengambil data jumlah total UNSPEC K1 dari tabel informasi
        $jml_info_unspeck1 = $this->db->query("SELECT pesan AS jml_info_unspeck1 FROM informasi WHERE id_informasi IN (7)")->row();
        $data['jml_info_unspeck1']           = $jml_info_unspeck1->jml_info_unspeck1;

        //Mengambil data jumlah total UNSPEC K2 dari tabel informasi
        $jml_info_unspeck2 = $this->db->query("SELECT pesan AS jml_info_unspeck2 FROM informasi WHERE id_informasi IN (8)")->row();
        $data['jml_info_unspeck2']           = $jml_info_unspeck2->jml_info_unspeck2;

        //Mengambil data jumlah total UNSPEC K3 dari tabel informasi
        $jml_info_unspeck3 = $this->db->query("SELECT pesan AS jml_info_unspeck3 FROM informasi WHERE id_informasi IN (9)")->row();
        $data['jml_info_unspeck3']           = $jml_info_unspeck3->jml_info_unspeck3;

        //Mengambil data jumlah total VALDAT VALID dari tabel informasi
        $jml_info_valid = $this->db->query("SELECT pesan AS jml_info_valid FROM informasi WHERE id_informasi IN (10)")->row();
        $data['jml_info_valid']           = $jml_info_valid->jml_info_valid;

        //Mengambil data jumlah total VALDAT NOT VALID dari tabel informasi
        $jml_info_notvalid = $this->db->query("SELECT pesan AS jml_info_notvalid FROM informasi WHERE id_informasi IN (11)")->row();
        $data['jml_info_notvalid']           = $jml_info_notvalid->jml_info_notvalid;

        ///////////////////////////////////////////////////////////////Dashboard Admin///////////////////////////////////////////////////////////////

        //Jumlah Tiket
        $data['jml_ticket']         = $this->model_app->getTicket()->num_rows();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket bulan ini
        $data['total_records'] = $this->model_app->get_total_records_bulan_ini();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan SID DATIN bulan ini
        $data['jml_gaul'] = $this->model_app->get_total_records_gaul();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan INET HSI bulan ini
        $data['jml_gaul_hsi'] = $this->model_app->get_total_records_gaul_hsi();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan NOTEL VOICE bulan ini
        $data['jml_gaul_voice'] = $this->model_app->get_total_records_gaul_voice();
        

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI bulan ini
        $data['total_hsi'] = $this->model_app->get_total_hsi_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_hsi_comply'] = $this->model_app->get_total_hsi_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_hsi_notcomply'] = $this->model_app->get_total_hsi_notcomply_bulan_ini();


        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN bulan ini
        $data['total_datin'] = $this->model_app->get_total_datin_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang COMPLY bulan ini
        $data['total_datin_comply'] = $this->model_app->get_total_datin_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang NOT COMPLY bulan ini
        $data['total_datin_notcomply'] = $this->model_app->get_total_datin_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 bulan ini
        $data['total_datin_k1'] = $this->model_app->get_total_datin_k1_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang COMPLY bulan ini
        $data['total_datin_k1_comply'] = $this->model_app->get_total_datin_k1_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang NOT COMPLY bulan ini
        $data['total_datin_k1_notcomply'] = $this->model_app->get_total_datin_k1_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 bulan ini
        $data['total_datin_k2'] = $this->model_app->get_total_datin_k2_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang COMPLY bulan ini
        $data['total_datin_k2_comply'] = $this->model_app->get_total_datin_k2_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang NOT COMPLY bulan ini
        $data['total_datin_k2_notcomply'] = $this->model_app->get_total_datin_k2_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 bulan ini
        $data['total_datin_k3'] = $this->model_app->get_total_datin_k3_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang COMPLY bulan ini
        $data['total_datin_k3_comply'] = $this->model_app->get_total_datin_k3_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang NOT COMPLY bulan ini
        $data['total_datin_k3_notcomply'] = $this->model_app->get_total_datin_k3_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket VOICE bulan ini
        $data['total_voice'] = $this->model_app->get_total_voice_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_voice_comply'] = $this->model_app->get_total_voice_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_voice_notcomply'] = $this->model_app->get_total_voice_notcomply_bulan_ini();

        //Jumlah Tiket sub kategori Datin
        $tiket_datin = $this->db->query("SELECT COUNT(id_ticket) AS tiket_datin FROM ticket WHERE id_sub_kategori IN (3)")->row();
        $data['tiket_datin']           = $tiket_datin->tiket_datin;
        //Jumlah Tiket sub kategori HSI
        $tiket_hsi = $this->db->query("SELECT COUNT(id_ticket) AS tiket_hsi FROM ticket WHERE id_sub_kategori IN (5)")->row();
        $data['tiket_hsi']           = $tiket_hsi->tiket_hsi;
        //Jumlah Tiket sub kategori VOICE
        $tiket_voice = $this->db->query("SELECT COUNT(id_ticket) AS tiket_voice FROM ticket WHERE id_sub_kategori IN (11)")->row();
        $data['tiket_voice']           = $tiket_voice->tiket_voice;
        //Jumlah tiket yang ditolak Admin
        $data['jml_reject']         = $this->model_app->getStatusTicket(0)->num_rows();
        //Jumlah tiket yang butuh persetujuan Admin
        $jlmnew = $this->db->query("SELECT COUNT(id_ticket) AS jlm_new FROM ticket WHERE status IN (1,2)")->row();
        $data['jlm_new']           = $jlmnew->jlm_new;
        //Jumlah tiket yang belum memilih teknisi
        $data['jml_choose']         = $this->model_app->getStatusTicket(1)->num_rows();
        //Jumlah tiket yang butuh persetujuan teknisi
        $data['jml_approve_tek']    = $this->model_app->getStatusTicket(3)->num_rows();
        //Jumlah tiket yang sedang dikerjakan
        $data['jml_process']        = $this->model_app->getStatusTicket(4)->num_rows();
        //Jumlah tiket yang sedang dipending
        $data['jml_pending']        = $this->model_app->getStatusTicket(5)->num_rows();
        //Jumlah tiket selesai
        $jlmdone = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done FROM ticket WHERE status IN (6,7)")->row();
        $data['jml_done']           = $jlmdone->jlm_done;
      
        /*              TIKET DATIN            
        //Jumlah tiket datin yang close
        $jlmdone_datin = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done_datin FROM ticket WHERE status IN (6,7) AND id_sub_kategori IN (1,2,3,4)")->row();
        $data['jml_done_datin']           = $jlmdone_datin->jlm_done_datin;
        //Jumlah tiket Datin COMPLY
        $jml_comply_datin = $this->db->query("SELECT COUNT(id_ticket) AS jml_comply_datin FROM ticket WHERE status IN (6) AND id_sub_kategori IN (1,2,3,4)")->row();
        $data['jml_comply_datin']           = $jml_comply_datin->jml_comply_datin;
        //Jumlah tiket Datin NOT COMPLY
        $jml_notcomply_datin = $this->db->query("SELECT COUNT(id_ticket) AS jml_notcomply_datin FROM ticket WHERE status IN (7) AND id_sub_kategori IN (1,2,3,4)")->row();
        $data['jml_notcomply_datin']           = $jml_notcomply_datin->jml_notcomply_datin; */ 

        /*              TIKET VOICE            
        //Jumlah tiket VOICE yang close
        $jlmdone_voice = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done_voice FROM ticket WHERE status IN (6,7) AND id_sub_kategori IN (11,12,13,14,15,16)")->row();
        $data['jml_done_voice']           = $jlmdone_voice->jlm_done_voice;
        //Jumlah tiket VOICE COMPLY
        $jml_comply_voice = $this->db->query("SELECT COUNT(id_ticket) AS jml_comply_voice FROM ticket WHERE status IN (6) AND id_sub_kategori IN (11,12,13,14,15,16)")->row();
        $data['jml_comply_voice']           = $jml_comply_voice->jml_comply_voice;
        //Jumlah tiket VOICE NOT COMPLY
        $jml_notcomply_voice = $this->db->query("SELECT COUNT(id_ticket) AS jml_notcomply_voice FROM ticket WHERE status IN (7) AND id_sub_kategori IN (11,12,13,14,15,16)")->row();
        $data['jml_notcomply_voice']           = $jml_notcomply_voice->jml_notcomply_voice;  */

        /*              TIKET HSI             
        //Jumlah tiket HSI yang close
        $jlmdone_hsi = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done_hsi FROM ticket WHERE status IN (6,7) AND id_sub_kategori IN (5,6,7,8,9,10)")->row();
        $data['jml_done_hsi']           = $jlmdone_hsi->jlm_done_hsi;
        //Jumlah tiket HSI COMPLY
        $jml_comply_hsi = $this->db->query("SELECT COUNT(id_ticket) AS jml_comply_hsi FROM ticket WHERE status IN (6) AND id_sub_kategori IN (5,6,7,8,9,10)")->row();
        $data['jml_comply_hsi']           = $jml_comply_hsi->jml_comply_hsi;
        //Jumlah tiket HSI NOT COMPLY
        $jml_notcomply_hsi = $this->db->query("SELECT COUNT(id_ticket) AS jml_notcomply_hsi FROM ticket WHERE status IN (7) AND id_sub_kategori IN (5,6,7,8,9,10)")->row();
        $data['jml_notcomply_hsi']           = $jml_notcomply_hsi->jml_notcomply_hsi; */

//////////////////////////////////////DATIN///////////////////////////////////////////
        //Jumlah Presentase Q GGN DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total tiket DATIN dikali (x) 100
        $data['precent_ticket_solved'] = $data['total_datin'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved'];

        //Jumlah Presentase GAUL DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total pelanggan DATIN dikali (x) 100
        $data['precent_ticket_gaul_datin'] = $data['jml_gaul'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_datin'];

//////////////////////////////////////HSI///////////////////////////////////////////        
        //Jumlah Presentase Q GGN HSI jumlah tiket close HSI(done) dibagi (:) jumlah total tiket HSI dikali (x) 100
        $data['precent_ticket_solved_hsi'] = $data['total_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_hsi'];

        //Jumlah Presentase GAUL HSI jumlah tiket close HSI(done) dibagi (:) jumlah total pelanggan HSI dikali (x) 100
        $data['precent_ticket_gaul_hsi'] = $data['jml_gaul_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_hsi'];

//////////////////////////////////////VOICE///////////////////////////////////////////     

        //Jumlah Presentase Q GGN VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total tiket VOICE dikali (x) 100
        $data['precent_ticket_solved_voice'] = $data['total_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_voice'];

        //Jumlah Presentase GAUL VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total pelanggan VOICE dikali (x) 100
        $data['precent_ticket_gaul_voice'] = $data['jml_gaul_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_voice'];


        //Resume ticket
        $data['ticket']        = $this->model_app->all_ticket_harian()->result();
        $data['jlmticket']     = $this->model_app->all_ticket_harian()->num_rows();

        //Papan Teknisi
        $data['teknisi']            = $this->model_app->getTek()->result();

        $data['helpdesk']            = $this->model_app->getHd()->result();

        $data['teamleader']            = $this->model_app->getTl()->result();

        $data['lbl_subkat']         = $this->model_app->Bar_Ticket()->result();

        $data['lbl_kondisi']        = $this->model_app->pie_kondisi()->result();

        $data['lbl_perbulan']       = $this->model_app->line_bulan()->result();

        $data['lbl_status']       = $this->model_app->pie_status()->result();

        ///////////////////////////////////////////////////////////////Dashboard Teknisi///////////////////////////////////////////////////////////////

        //Jumlah tiket setiap teknisi
        $tek_assign = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekassign FROM ticket 
                                         WHERE teknisi = '$id_user'")->row();
        $data['tekassign'] = $tek_assign->jlm_tekassign;
        //Jumlah tiket yang perlu di approve tiap teknisi
        $tek_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekapprove FROM ticket
                                         WHERE status = 3 AND teknisi = '$id_user'")->row();
        $data['tekapprove'] = $tek_approve->jlm_tekapprove;
        //Jumlah tiket yang dikerjakan tiap teknisi
        $tek_kerja   = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekkerja FROM ticket
                                         WHERE status = 4 AND teknisi = '$id_user'")->row();
        $data['tekkerja'] = $tek_kerja->jlm_tekkerja;
        //Jumlah tiket yang dipending tiap teknisi
        $tek_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekpending FROM ticket
                                         WHERE status = 5 AND teknisi = '$id_user'")->row();
        $data['tekpending'] = $tek_pending->jlm_tekpending;
        //Jumlah tiket yang selesai dikerjakan tiap teknisi
        $tek_selesai = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekselesai FROM ticket 
                                         WHERE status IN (6,7) AND teknisi = '$id_user'")->row();
        $data['tekselesai'] = $tek_selesai->jlm_tekselesai;

        //Resume ticket
        $data['datatickettek']  = $this->model_app->allassignment($id_user)->result();
        $data['jlmtugas']       = $this->model_app->allassignment($id_user)->num_rows();

        ///////////////////////////////////////////////////////////////Dashboard Pegawai///////////////////////////////////////////////////////////////
        
        //Jumlah semua ticket
        $user_ticket = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userticket FROM ticket
                                         WHERE reported = '$id_user'")->row();
        $data['userticket'] = $user_ticket->jlm_userticket;
        //Jumlah ticket yang sudah diapprove
        $user_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userapprove FROM ticket
                                         WHERE reported = '$id_user' AND status = 1")->row();
        $data['userapprove'] = $user_approve->jlm_userapprove;
        //Jumlah ticket yang di reject
        $user_reject = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userreject FROM ticket
                                         WHERE reported = '$id_user' AND status = 0")->row();
        $data['userreject'] = $user_reject->jlm_userreject;
        //Jumlah ticket yang sedang proses
        $user_process = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userprocess FROM ticket
                                         WHERE reported = '$id_user' AND status = 4")->row();
        $data['userprocess'] = $user_process->jlm_userprocess;
        //Jumlah ticket yang sedang di pending
        $user_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userpending FROM ticket
                                         WHERE reported = '$id_user' AND status = 5")->row();
        $data['userpending'] = $user_pending->jlm_userpending;
        //Jumlah ticket yang selesai
        $user_done = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userdone FROM ticket
                                         WHERE reported = '$id_user' AND status = 6")->row();
        $data['userdone'] = $user_done->jlm_userdone;

        //Resume ticket
        $data['dataticketuser']         = $this->model_app->myticket($id_user)->result();

        $data['absensi']                = null;
        $rekapAbsen                     = $this->model_app->getRekapAbsensiById($id_user)->result();
        if(empty($rekapAbsen)){
                $data['absensi'] = 'belum_absen';
        } else {
                $data['absensi'] = 'sudah_absen';
        }

        $this->load->view('template', $data);
	}

        public function detail_gaul()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "ticket/ticket_datin_gaul";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');
        
        $data['listticket_datin_gaul'] = $this->model_app->all_ticket_datin_gaul()->result();
        
        $this->load->view('template', $data);
	}

        public function detail_gaul_hsi()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "ticket/ticket_hsi_gaul";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');
        
        $data['listticket_hsi_gaul'] = $this->model_app->all_ticket_hsi_gaul()->result();
        
        $this->load->view('template', $data);
	}

        public function detail_gaul_voice()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "ticket/ticket_voice_gaul";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');
        
        $data['listticket_voice_gaul'] = $this->model_app->all_ticket_voice_gaul()->result();
        
        $this->load->view('template', $data);
	}

        public function detail_datin()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "dashboard/dashboard_datin";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        //Papan Pengumuman
        $data['datainformasi'] = $this->model_app->informasi()->result();
        
        ////Mengambil data jumlah total unspec DATIN K1 dari tabel informasi
        $jml_unspec_k1 = $this->db->query("SELECT pesan AS jml_unspec_k1 FROM informasi WHERE id_informasi IN (7)")->row();
        $data['jml_unspec_k1']           = $jml_unspec_k1->jml_unspec_k1;

        ////Mengambil data jumlah total unspec DATIN K1 dari tabel informasi
        $jml_unspec_k2 = $this->db->query("SELECT pesan AS jml_unspec_k2 FROM informasi WHERE id_informasi IN (8)")->row();
        $data['jml_unspec_k2']           = $jml_unspec_k2->jml_unspec_k2;

        ////Mengambil data jumlah total unspec DATIN K1 dari tabel informasi
        $jml_unspec_k3 = $this->db->query("SELECT pesan AS jml_unspec_k3 FROM informasi WHERE id_informasi IN (9)")->row();
        $data['jml_unspec_k3']           = $jml_unspec_k3->jml_unspec_k3;

        //Mengambil data jumlah total DATIN dari tabel informasi
        $jml_info_datin = $this->db->query("SELECT pesan AS jml_info_datin FROM informasi WHERE id_informasi IN (4)")->row();
        $data['jml_info_datin']           = $jml_info_datin->jml_info_datin;

        //Mengambil data jumlah total HSI dari tabel informasi
        $jml_info_hsi = $this->db->query("SELECT pesan AS jml_info_hsi FROM informasi WHERE id_informasi IN (5)")->row();
        $data['jml_info_hsi']           = $jml_info_hsi->jml_info_hsi;

        //Mengambil data jumlah total VOICE dari tabel informasi
        $jml_info_voice = $this->db->query("SELECT pesan AS jml_info_voice FROM informasi WHERE id_informasi IN (6)")->row();
        $data['jml_info_voice']           = $jml_info_voice->jml_info_voice;

         //Mengambil data jumlah total UNSPEC K1 dari tabel informasi
         $jml_info_unspeck1 = $this->db->query("SELECT pesan AS jml_info_unspeck1 FROM informasi WHERE id_informasi IN (7)")->row();
         $data['jml_info_unspeck1']           = $jml_info_unspeck1->jml_info_unspeck1;
 
         //Mengambil data jumlah total UNSPEC K2 dari tabel informasi
         $jml_info_unspeck2 = $this->db->query("SELECT pesan AS jml_info_unspeck2 FROM informasi WHERE id_informasi IN (8)")->row();
         $data['jml_info_unspeck2']           = $jml_info_unspeck2->jml_info_unspeck2;
 
         //Mengambil data jumlah total UNSPEC K3 dari tabel informasi
         $jml_info_unspeck3 = $this->db->query("SELECT pesan AS jml_info_unspeck3 FROM informasi WHERE id_informasi IN (9)")->row();
         $data['jml_info_unspeck3']           = $jml_info_unspeck3->jml_info_unspeck3;
 
         //Mengambil data jumlah total VALDAT VALID dari tabel informasi
         $jml_info_valid = $this->db->query("SELECT pesan AS jml_info_valid FROM informasi WHERE id_informasi IN (10)")->row();
         $data['jml_info_valid']           = $jml_info_valid->jml_info_valid;
 
         //Mengambil data jumlah total VALDAT NOT VALID dari tabel informasi
         $jml_info_notvalid = $this->db->query("SELECT pesan AS jml_info_notvalid FROM informasi WHERE id_informasi IN (11)")->row();
         $data['jml_info_notvalid']           = $jml_info_notvalid->jml_info_notvalid;

        ///////////////////////////////////////////////////////////////Dashboard Admin///////////////////////////////////////////////////////////////

        //Jumlah Tiket
        $data['jml_ticket']         = $this->model_app->getTicket()->num_rows();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket bulan ini
        $data['total_records'] = $this->model_app->get_total_records_bulan_ini();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan SID DATIN bulan ini
        $data['jml_gaul'] = $this->model_app->get_total_records_gaul();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan INET HSI bulan ini
        $data['jml_gaul_hsi'] = $this->model_app->get_total_records_gaul_hsi();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan NOTEL VOICE bulan ini
        $data['jml_gaul_voice'] = $this->model_app->get_total_records_gaul_voice();
        
        $data['listticket_datin_gaul'] = $this->model_app->all_ticket_datin_gaul()->result();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI bulan ini
        $data['total_hsi'] = $this->model_app->get_total_hsi_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_hsi_comply'] = $this->model_app->get_total_hsi_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_hsi_notcomply'] = $this->model_app->get_total_hsi_notcomply_bulan_ini();


        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN bulan ini
        $data['total_datin'] = $this->model_app->get_total_datin_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang COMPLY bulan ini
        $data['total_datin_comply'] = $this->model_app->get_total_datin_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang NOT COMPLY bulan ini
        $data['total_datin_notcomply'] = $this->model_app->get_total_datin_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 bulan ini
        $data['total_datin_k1'] = $this->model_app->get_total_datin_k1_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang COMPLY bulan ini
        $data['total_datin_k1_comply'] = $this->model_app->get_total_datin_k1_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang NOT COMPLY bulan ini
        $data['total_datin_k1_notcomply'] = $this->model_app->get_total_datin_k1_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 bulan ini
        $data['total_datin_k2'] = $this->model_app->get_total_datin_k2_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang COMPLY bulan ini
        $data['total_datin_k2_comply'] = $this->model_app->get_total_datin_k2_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang NOT COMPLY bulan ini
        $data['total_datin_k2_notcomply'] = $this->model_app->get_total_datin_k2_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 bulan ini
        $data['total_datin_k3'] = $this->model_app->get_total_datin_k3_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang COMPLY bulan ini
        $data['total_datin_k3_comply'] = $this->model_app->get_total_datin_k3_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang NOT COMPLY bulan ini
        $data['total_datin_k3_notcomply'] = $this->model_app->get_total_datin_k3_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket VOICE bulan ini
        $data['total_voice'] = $this->model_app->get_total_voice_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_voice_comply'] = $this->model_app->get_total_voice_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_voice_notcomply'] = $this->model_app->get_total_voice_notcomply_bulan_ini();

        //Jumlah Tiket sub kategori Datin
        $tiket_datin = $this->db->query("SELECT COUNT(id_ticket) AS tiket_datin FROM ticket WHERE id_sub_kategori IN (3)")->row();
        $data['tiket_datin']           = $tiket_datin->tiket_datin;
        //Jumlah Tiket sub kategori HSI
        $tiket_hsi = $this->db->query("SELECT COUNT(id_ticket) AS tiket_hsi FROM ticket WHERE id_sub_kategori IN (5)")->row();
        $data['tiket_hsi']           = $tiket_hsi->tiket_hsi;
        //Jumlah Tiket sub kategori VOICE
        $tiket_voice = $this->db->query("SELECT COUNT(id_ticket) AS tiket_voice FROM ticket WHERE id_sub_kategori IN (11)")->row();
        $data['tiket_voice']           = $tiket_voice->tiket_voice;
        //Jumlah tiket yang ditolak Admin
        $data['jml_reject']         = $this->model_app->getStatusTicket(0)->num_rows();
        //Jumlah tiket yang butuh persetujuan Admin
        $jlmnew = $this->db->query("SELECT COUNT(id_ticket) AS jlm_new FROM ticket WHERE status IN (1,2)")->row();
        $data['jlm_new']           = $jlmnew->jlm_new;
        //Jumlah tiket yang belum memilih teknisi
        $data['jml_choose']         = $this->model_app->getStatusTicket(1)->num_rows();
        //Jumlah tiket yang butuh persetujuan teknisi
        $data['jml_approve_tek']    = $this->model_app->getStatusTicket(3)->num_rows();
        //Jumlah tiket yang sedang dikerjakan
        $data['jml_process']        = $this->model_app->getStatusTicket(4)->num_rows();
        //Jumlah tiket yang sedang dipending
        $data['jml_pending']        = $this->model_app->getStatusTicket(5)->num_rows();
        //Jumlah tiket selesai
        $jlmdone = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done FROM ticket WHERE status IN (6,7)")->row();
        $data['jml_done']           = $jlmdone->jlm_done;

//////////////////////////////////////DATIN///////////////////////////////////////////
        //Jumlah Presentase Q GGN DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total tiket DATIN dikali (x) 100
        $data['precent_ticket_solved'] = $data['total_datin'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved'];

        //Jumlah Presentase GAUL DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total pelanggan DATIN dikali (x) 100
        $data['precent_ticket_gaul_datin'] = $data['jml_gaul'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_datin'];

//////////////////////////////////////HSI///////////////////////////////////////////        
        //Jumlah Presentase Q GGN HSI jumlah tiket close HSI(done) dibagi (:) jumlah total tiket HSI dikali (x) 100
        $data['precent_ticket_solved_hsi'] = $data['total_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_hsi'];

        //Jumlah Presentase GAUL HSI jumlah tiket close HSI(done) dibagi (:) jumlah total pelanggan HSI dikali (x) 100
        $data['precent_ticket_gaul_hsi'] = $data['jml_gaul_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_hsi'];

//////////////////////////////////////VOICE///////////////////////////////////////////     

        //Jumlah Presentase Q GGN VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total tiket VOICE dikali (x) 100
        $data['precent_ticket_solved_voice'] = $data['total_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_voice'];

        //Jumlah Presentase GAUL VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total pelanggan VOICE dikali (x) 100
        $data['precent_ticket_gaul_voice'] = $data['jml_gaul_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_voice'];


        //Resume ticket
        $data['ticket']        = $this->model_app->all_ticket()->result();
        $data['jlmticket']     = $this->model_app->all_ticket()->num_rows();

        //Papan Teknisi
        $data['teknisi']            = $this->model_app->getTek()->result();

        $data['lbl_subkat']         = $this->model_app->Bar_Ticket()->result();

        $data['lbl_kondisi']        = $this->model_app->pie_kondisi()->result();

        $data['lbl_perbulan']       = $this->model_app->line_bulan()->result();

        $data['lbl_status']       = $this->model_app->pie_status()->result();

        ///////////////////////////////////////////////////////////////Dashboard Teknisi///////////////////////////////////////////////////////////////

        //Jumlah tiket setiap teknisi
        $tek_assign = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekassign FROM ticket 
                                         WHERE teknisi = '$id_user'")->row();
        $data['tekassign'] = $tek_assign->jlm_tekassign;
        //Jumlah tiket yang perlu di approve tiap teknisi
        $tek_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekapprove FROM ticket
                                         WHERE status = 3 AND teknisi = '$id_user'")->row();
        $data['tekapprove'] = $tek_approve->jlm_tekapprove;
        //Jumlah tiket yang dikerjakan tiap teknisi
        $tek_kerja   = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekkerja FROM ticket
                                         WHERE status = 4 AND teknisi = '$id_user'")->row();
        $data['tekkerja'] = $tek_kerja->jlm_tekkerja;
        //Jumlah tiket yang dipending tiap teknisi
        $tek_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekpending FROM ticket
                                         WHERE status = 5 AND teknisi = '$id_user'")->row();
        $data['tekpending'] = $tek_pending->jlm_tekpending;
        //Jumlah tiket yang selesai dikerjakan tiap teknisi
        $tek_selesai = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekselesai FROM ticket 
                                         WHERE status IN (6,7) AND teknisi = '$id_user'")->row();
        $data['tekselesai'] = $tek_selesai->jlm_tekselesai;

        //Resume ticket
        $data['datatickettek']  = $this->model_app->allassignment($id_user)->result();
        $data['jlmtugas']       = $this->model_app->allassignment($id_user)->num_rows();

        ///////////////////////////////////////////////////////////////Dashboard Pegawai///////////////////////////////////////////////////////////////
        
        //Jumlah semua ticket
        $user_ticket = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userticket FROM ticket
                                         WHERE reported = '$id_user'")->row();
        $data['userticket'] = $user_ticket->jlm_userticket;
        //Jumlah ticket yang sudah diapprove
        $user_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userapprove FROM ticket
                                         WHERE reported = '$id_user' AND status = 1")->row();
        $data['userapprove'] = $user_approve->jlm_userapprove;
        //Jumlah ticket yang di reject
        $user_reject = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userreject FROM ticket
                                         WHERE reported = '$id_user' AND status = 0")->row();
        $data['userreject'] = $user_reject->jlm_userreject;
        //Jumlah ticket yang sedang proses
        $user_process = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userprocess FROM ticket
                                         WHERE reported = '$id_user' AND status = 4")->row();
        $data['userprocess'] = $user_process->jlm_userprocess;
        //Jumlah ticket yang sedang di pending
        $user_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userpending FROM ticket
                                         WHERE reported = '$id_user' AND status = 5")->row();
        $data['userpending'] = $user_pending->jlm_userpending;
        //Jumlah ticket yang selesai
        $user_done = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userdone FROM ticket
                                         WHERE reported = '$id_user' AND status = 6")->row();
        $data['userdone'] = $user_done->jlm_userdone;

        //Resume ticket
        $data['dataticketuser']         = $this->model_app->myticket($id_user)->result();
        

        $this->load->view('template', $data);
	}


        public function detail_voice()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "dashboard/dashboard_voice";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        //Papan Pengumuman
        $data['datainformasi'] = $this->model_app->informasi()->result();

        //Mengambil data jumlah total DATIN dari tabel informasi
        $jml_info_datin = $this->db->query("SELECT pesan AS jml_info_datin FROM informasi WHERE id_informasi IN (4)")->row();
        $data['jml_info_datin']           = $jml_info_datin->jml_info_datin;

        //Mengambil data jumlah total HSI dari tabel informasi
        $jml_info_hsi = $this->db->query("SELECT pesan AS jml_info_hsi FROM informasi WHERE id_informasi IN (5)")->row();
        $data['jml_info_hsi']           = $jml_info_hsi->jml_info_hsi;

        //Mengambil data jumlah total VOICE dari tabel informasi
        $jml_info_voice = $this->db->query("SELECT pesan AS jml_info_voice FROM informasi WHERE id_informasi IN (6)")->row();
        $data['jml_info_voice']           = $jml_info_voice->jml_info_voice;

        ///////////////////////////////////////////////////////////////Dashboard Admin///////////////////////////////////////////////////////////////

        //Jumlah Tiket
        $data['jml_ticket']         = $this->model_app->getTicket()->num_rows();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket bulan ini
        $data['total_records'] = $this->model_app->get_total_records_bulan_ini();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan SID DATIN bulan ini
        $data['jml_gaul'] = $this->model_app->get_total_records_gaul();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan INET HSI bulan ini
        $data['jml_gaul_hsi'] = $this->model_app->get_total_records_gaul_hsi();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan NOTEL VOICE bulan ini
        $data['jml_gaul_voice'] = $this->model_app->get_total_records_gaul_voice();
        

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI bulan ini
        $data['total_hsi'] = $this->model_app->get_total_hsi_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_hsi_comply'] = $this->model_app->get_total_hsi_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_hsi_notcomply'] = $this->model_app->get_total_hsi_notcomply_bulan_ini();


        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN bulan ini
        $data['total_datin'] = $this->model_app->get_total_datin_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang COMPLY bulan ini
        $data['total_datin_comply'] = $this->model_app->get_total_datin_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang NOT COMPLY bulan ini
        $data['total_datin_notcomply'] = $this->model_app->get_total_datin_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 bulan ini
        $data['total_datin_k1'] = $this->model_app->get_total_datin_k1_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang COMPLY bulan ini
        $data['total_datin_k1_comply'] = $this->model_app->get_total_datin_k1_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang NOT COMPLY bulan ini
        $data['total_datin_k1_notcomply'] = $this->model_app->get_total_datin_k1_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 bulan ini
        $data['total_datin_k2'] = $this->model_app->get_total_datin_k2_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang COMPLY bulan ini
        $data['total_datin_k2_comply'] = $this->model_app->get_total_datin_k2_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang NOT COMPLY bulan ini
        $data['total_datin_k2_notcomply'] = $this->model_app->get_total_datin_k2_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 bulan ini
        $data['total_datin_k3'] = $this->model_app->get_total_datin_k3_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang COMPLY bulan ini
        $data['total_datin_k3_comply'] = $this->model_app->get_total_datin_k3_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang NOT COMPLY bulan ini
        $data['total_datin_k3_notcomply'] = $this->model_app->get_total_datin_k3_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket VOICE bulan ini
        $data['total_voice'] = $this->model_app->get_total_voice_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_voice_comply'] = $this->model_app->get_total_voice_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_voice_notcomply'] = $this->model_app->get_total_voice_notcomply_bulan_ini();

        //Jumlah Tiket sub kategori Datin
        $tiket_datin = $this->db->query("SELECT COUNT(id_ticket) AS tiket_datin FROM ticket WHERE id_sub_kategori IN (3)")->row();
        $data['tiket_datin']           = $tiket_datin->tiket_datin;
        //Jumlah Tiket sub kategori HSI
        $tiket_hsi = $this->db->query("SELECT COUNT(id_ticket) AS tiket_hsi FROM ticket WHERE id_sub_kategori IN (5)")->row();
        $data['tiket_hsi']           = $tiket_hsi->tiket_hsi;
        //Jumlah Tiket sub kategori VOICE
        $tiket_voice = $this->db->query("SELECT COUNT(id_ticket) AS tiket_voice FROM ticket WHERE id_sub_kategori IN (11)")->row();
        $data['tiket_voice']           = $tiket_voice->tiket_voice;
        //Jumlah tiket yang ditolak Admin
        $data['jml_reject']         = $this->model_app->getStatusTicket(0)->num_rows();
        //Jumlah tiket yang butuh persetujuan Admin
        $jlmnew = $this->db->query("SELECT COUNT(id_ticket) AS jlm_new FROM ticket WHERE status IN (1,2)")->row();
        $data['jlm_new']           = $jlmnew->jlm_new;
        //Jumlah tiket yang belum memilih teknisi
        $data['jml_choose']         = $this->model_app->getStatusTicket(1)->num_rows();
        //Jumlah tiket yang butuh persetujuan teknisi
        $data['jml_approve_tek']    = $this->model_app->getStatusTicket(3)->num_rows();
        //Jumlah tiket yang sedang dikerjakan
        $data['jml_process']        = $this->model_app->getStatusTicket(4)->num_rows();
        //Jumlah tiket yang sedang dipending
        $data['jml_pending']        = $this->model_app->getStatusTicket(5)->num_rows();
        //Jumlah tiket selesai
        $jlmdone = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done FROM ticket WHERE status IN (6,7)")->row();
        $data['jml_done']           = $jlmdone->jlm_done;

//////////////////////////////////////DATIN///////////////////////////////////////////
        //Jumlah Presentase Q GGN DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total tiket DATIN dikali (x) 100
        $data['precent_ticket_solved'] = $data['total_datin'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved'];

        //Jumlah Presentase GAUL DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total pelanggan DATIN dikali (x) 100
        $data['precent_ticket_gaul_datin'] = $data['jml_gaul'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_datin'];

//////////////////////////////////////HSI///////////////////////////////////////////        
        //Jumlah Presentase Q GGN HSI jumlah tiket close HSI(done) dibagi (:) jumlah total tiket HSI dikali (x) 100
        $data['precent_ticket_solved_hsi'] = $data['total_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_hsi'];

        //Jumlah Presentase GAUL HSI jumlah tiket close HSI(done) dibagi (:) jumlah total pelanggan HSI dikali (x) 100
        $data['precent_ticket_gaul_hsi'] = $data['jml_gaul_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_hsi'];

//////////////////////////////////////VOICE///////////////////////////////////////////     

        //Jumlah Presentase Q GGN VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total tiket VOICE dikali (x) 100
        $data['precent_ticket_solved_voice'] = $data['total_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_voice'];

        //Jumlah Presentase GAUL VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total pelanggan VOICE dikali (x) 100
        $data['precent_ticket_gaul_voice'] = $data['jml_gaul_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_voice'];


        //Resume ticket
        $data['ticket']        = $this->model_app->all_ticket()->result();
        $data['jlmticket']     = $this->model_app->all_ticket()->num_rows();

        //Papan Teknisi
        $data['teknisi']            = $this->model_app->getTek()->result();

        $data['lbl_subkat']         = $this->model_app->Bar_Ticket()->result();

        $data['lbl_kondisi']        = $this->model_app->pie_kondisi()->result();

        $data['lbl_perbulan']       = $this->model_app->line_bulan()->result();

        $data['lbl_status']       = $this->model_app->pie_status()->result();

        ///////////////////////////////////////////////////////////////Dashboard Teknisi///////////////////////////////////////////////////////////////

        //Jumlah tiket setiap teknisi
        $tek_assign = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekassign FROM ticket 
                                         WHERE teknisi = '$id_user'")->row();
        $data['tekassign'] = $tek_assign->jlm_tekassign;
        //Jumlah tiket yang perlu di approve tiap teknisi
        $tek_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekapprove FROM ticket
                                         WHERE status = 3 AND teknisi = '$id_user'")->row();
        $data['tekapprove'] = $tek_approve->jlm_tekapprove;
        //Jumlah tiket yang dikerjakan tiap teknisi
        $tek_kerja   = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekkerja FROM ticket
                                         WHERE status = 4 AND teknisi = '$id_user'")->row();
        $data['tekkerja'] = $tek_kerja->jlm_tekkerja;
        //Jumlah tiket yang dipending tiap teknisi
        $tek_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekpending FROM ticket
                                         WHERE status = 5 AND teknisi = '$id_user'")->row();
        $data['tekpending'] = $tek_pending->jlm_tekpending;
        //Jumlah tiket yang selesai dikerjakan tiap teknisi
        $tek_selesai = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekselesai FROM ticket 
                                         WHERE status IN (6,7) AND teknisi = '$id_user'")->row();
        $data['tekselesai'] = $tek_selesai->jlm_tekselesai;

        //Resume ticket
        $data['datatickettek']  = $this->model_app->allassignment($id_user)->result();
        $data['jlmtugas']       = $this->model_app->allassignment($id_user)->num_rows();

        ///////////////////////////////////////////////////////////////Dashboard Pegawai///////////////////////////////////////////////////////////////
        
        //Jumlah semua ticket
        $user_ticket = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userticket FROM ticket
                                         WHERE reported = '$id_user'")->row();
        $data['userticket'] = $user_ticket->jlm_userticket;
        //Jumlah ticket yang sudah diapprove
        $user_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userapprove FROM ticket
                                         WHERE reported = '$id_user' AND status = 1")->row();
        $data['userapprove'] = $user_approve->jlm_userapprove;
        //Jumlah ticket yang di reject
        $user_reject = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userreject FROM ticket
                                         WHERE reported = '$id_user' AND status = 0")->row();
        $data['userreject'] = $user_reject->jlm_userreject;
        //Jumlah ticket yang sedang proses
        $user_process = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userprocess FROM ticket
                                         WHERE reported = '$id_user' AND status = 4")->row();
        $data['userprocess'] = $user_process->jlm_userprocess;
        //Jumlah ticket yang sedang di pending
        $user_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userpending FROM ticket
                                         WHERE reported = '$id_user' AND status = 5")->row();
        $data['userpending'] = $user_pending->jlm_userpending;
        //Jumlah ticket yang selesai
        $user_done = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userdone FROM ticket
                                         WHERE reported = '$id_user' AND status = 6")->row();
        $data['userdone'] = $user_done->jlm_userdone;

        //Resume ticket
        $data['dataticketuser']         = $this->model_app->myticket($id_user)->result();

        $this->load->view('template', $data);
	}

        public function detail_hsi()
	{
		//Menyusul template dashboard
	$data['title'] 		= "Dashboard";
        $data['navbar']         = "navbar";
        $data['sidebar']	= "sidebar";
        $data['body'] 		= "dashboard/dashboard_hsi";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        //Papan Pengumuman
        $data['datainformasi'] = $this->model_app->informasi()->result();

        //Mengambil data jumlah total DATIN dari tabel informasi
        $jml_info_datin = $this->db->query("SELECT pesan AS jml_info_datin FROM informasi WHERE id_informasi IN (4)")->row();
        $data['jml_info_datin']           = $jml_info_datin->jml_info_datin;

        //Mengambil data jumlah total HSI dari tabel informasi
        $jml_info_hsi = $this->db->query("SELECT pesan AS jml_info_hsi FROM informasi WHERE id_informasi IN (5)")->row();
        $data['jml_info_hsi']           = $jml_info_hsi->jml_info_hsi;

        //Mengambil data jumlah total VOICE dari tabel informasi
        $jml_info_voice = $this->db->query("SELECT pesan AS jml_info_voice FROM informasi WHERE id_informasi IN (6)")->row();
        $data['jml_info_voice']           = $jml_info_voice->jml_info_voice;

        ///////////////////////////////////////////////////////////////Dashboard Admin///////////////////////////////////////////////////////////////

        //Jumlah Tiket
        $data['jml_ticket']         = $this->model_app->getTicket()->num_rows();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket bulan ini
        $data['total_records'] = $this->model_app->get_total_records_bulan_ini();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan SID DATIN bulan ini
        $data['jml_gaul'] = $this->model_app->get_total_records_gaul();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan INET HSI bulan ini
        $data['jml_gaul_hsi'] = $this->model_app->get_total_records_gaul_hsi();

        // Memanggil metode dari model_app untuk menampilkan jumlah data yang sama berdasarkan NOTEL VOICE bulan ini
        $data['jml_gaul_voice'] = $this->model_app->get_total_records_gaul_voice();
        

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI bulan ini
        $data['total_hsi'] = $this->model_app->get_total_hsi_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_hsi_comply'] = $this->model_app->get_total_hsi_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_hsi_notcomply'] = $this->model_app->get_total_hsi_notcomply_bulan_ini();


        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN bulan ini
        $data['total_datin'] = $this->model_app->get_total_datin_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang COMPLY bulan ini
        $data['total_datin_comply'] = $this->model_app->get_total_datin_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN yang NOT COMPLY bulan ini
        $data['total_datin_notcomply'] = $this->model_app->get_total_datin_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 bulan ini
        $data['total_datin_k1'] = $this->model_app->get_total_datin_k1_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang COMPLY bulan ini
        $data['total_datin_k1_comply'] = $this->model_app->get_total_datin_k1_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K1 yang NOT COMPLY bulan ini
        $data['total_datin_k1_notcomply'] = $this->model_app->get_total_datin_k1_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 bulan ini
        $data['total_datin_k2'] = $this->model_app->get_total_datin_k2_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang COMPLY bulan ini
        $data['total_datin_k2_comply'] = $this->model_app->get_total_datin_k2_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K2 yang NOT COMPLY bulan ini
        $data['total_datin_k2_notcomply'] = $this->model_app->get_total_datin_k2_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 bulan ini
        $data['total_datin_k3'] = $this->model_app->get_total_datin_k3_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang COMPLY bulan ini
        $data['total_datin_k3_comply'] = $this->model_app->get_total_datin_k3_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket DATIN K3 yang NOT COMPLY bulan ini
        $data['total_datin_k3_notcomply'] = $this->model_app->get_total_datin_k3_notcomply_bulan_ini();

        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket VOICE bulan ini
        $data['total_voice'] = $this->model_app->get_total_voice_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang COMPLY bulan ini
        $data['total_voice_comply'] = $this->model_app->get_total_voice_comply_bulan_ini();
        // Memanggil metode dari model_app untuk mendapatkan/menampilkan jumlah data tiket HSI yang NOT COMPLY bulan ini
        $data['total_voice_notcomply'] = $this->model_app->get_total_voice_notcomply_bulan_ini();

        //Jumlah Tiket sub kategori Datin
        $tiket_datin = $this->db->query("SELECT COUNT(id_ticket) AS tiket_datin FROM ticket WHERE id_sub_kategori IN (3)")->row();
        $data['tiket_datin']           = $tiket_datin->tiket_datin;
        //Jumlah Tiket sub kategori HSI
        $tiket_hsi = $this->db->query("SELECT COUNT(id_ticket) AS tiket_hsi FROM ticket WHERE id_sub_kategori IN (5)")->row();
        $data['tiket_hsi']           = $tiket_hsi->tiket_hsi;
        //Jumlah Tiket sub kategori VOICE
        $tiket_voice = $this->db->query("SELECT COUNT(id_ticket) AS tiket_voice FROM ticket WHERE id_sub_kategori IN (11)")->row();
        $data['tiket_voice']           = $tiket_voice->tiket_voice;
        //Jumlah tiket yang ditolak Admin
        $data['jml_reject']         = $this->model_app->getStatusTicket(0)->num_rows();
        //Jumlah tiket yang butuh persetujuan Admin
        $jlmnew = $this->db->query("SELECT COUNT(id_ticket) AS jlm_new FROM ticket WHERE status IN (1,2)")->row();
        $data['jlm_new']           = $jlmnew->jlm_new;
        //Jumlah tiket yang belum memilih teknisi
        $data['jml_choose']         = $this->model_app->getStatusTicket(1)->num_rows();
        //Jumlah tiket yang butuh persetujuan teknisi
        $data['jml_approve_tek']    = $this->model_app->getStatusTicket(3)->num_rows();
        //Jumlah tiket yang sedang dikerjakan
        $data['jml_process']        = $this->model_app->getStatusTicket(4)->num_rows();
        //Jumlah tiket yang sedang dipending
        $data['jml_pending']        = $this->model_app->getStatusTicket(5)->num_rows();
        //Jumlah tiket selesai
        $jlmdone = $this->db->query("SELECT COUNT(id_ticket) AS jlm_done FROM ticket WHERE status IN (6,7)")->row();
        $data['jml_done']           = $jlmdone->jlm_done;

//////////////////////////////////////DATIN///////////////////////////////////////////
        //Jumlah Presentase Q GGN DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total tiket DATIN dikali (x) 100
        $data['precent_ticket_solved'] = $data['total_datin'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved'];

        //Jumlah Presentase GAUL DATIN jumlah tiket close DATIN(done) dibagi (:) jumlah total pelanggan DATIN dikali (x) 100
        $data['precent_ticket_gaul_datin'] = $data['jml_gaul'] / $data['jml_info_datin'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_datin'];

//////////////////////////////////////HSI///////////////////////////////////////////        
        //Jumlah Presentase Q GGN HSI jumlah tiket close HSI(done) dibagi (:) jumlah total tiket HSI dikali (x) 100
        $data['precent_ticket_solved_hsi'] = $data['total_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_hsi'];

        //Jumlah Presentase GAUL HSI jumlah tiket close HSI(done) dibagi (:) jumlah total pelanggan HSI dikali (x) 100
        $data['precent_ticket_gaul_hsi'] = $data['jml_gaul_hsi'] / $data['jml_info_hsi'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_hsi'];

//////////////////////////////////////VOICE///////////////////////////////////////////     

        //Jumlah Presentase Q GGN VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total tiket VOICE dikali (x) 100
        $data['precent_ticket_solved_voice'] = $data['total_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_solved_voice'];

        //Jumlah Presentase GAUL VOICE jumlah tiket close VOICE(done) dibagi (:) jumlah total pelanggan VOICE dikali (x) 100
        $data['precent_ticket_gaul_voice'] = $data['jml_gaul_voice'] / $data['jml_info_voice'] * 100;

        $data['jlm_done'] = $data['precent_ticket_gaul_voice'];


        //Resume ticket
        $data['ticket']        = $this->model_app->all_ticket()->result();
        $data['jlmticket']     = $this->model_app->all_ticket()->num_rows();

        //Papan Teknisi
        $data['teknisi']            = $this->model_app->getTek()->result();

        $data['lbl_subkat']         = $this->model_app->Bar_Ticket()->result();

        $data['lbl_kondisi']        = $this->model_app->pie_kondisi()->result();

        $data['lbl_perbulan']       = $this->model_app->line_bulan()->result();

        $data['lbl_status']       = $this->model_app->pie_status()->result();

        ///////////////////////////////////////////////////////////////Dashboard Teknisi///////////////////////////////////////////////////////////////

        //Jumlah tiket setiap teknisi
        $tek_assign = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekassign FROM ticket 
                                         WHERE teknisi = '$id_user'")->row();
        $data['tekassign'] = $tek_assign->jlm_tekassign;
        //Jumlah tiket yang perlu di approve tiap teknisi
        $tek_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekapprove FROM ticket
                                         WHERE status = 3 AND teknisi = '$id_user'")->row();
        $data['tekapprove'] = $tek_approve->jlm_tekapprove;
        //Jumlah tiket yang dikerjakan tiap teknisi
        $tek_kerja   = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekkerja FROM ticket
                                         WHERE status = 4 AND teknisi = '$id_user'")->row();
        $data['tekkerja'] = $tek_kerja->jlm_tekkerja;
        //Jumlah tiket yang dipending tiap teknisi
        $tek_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekpending FROM ticket
                                         WHERE status = 5 AND teknisi = '$id_user'")->row();
        $data['tekpending'] = $tek_pending->jlm_tekpending;
        //Jumlah tiket yang selesai dikerjakan tiap teknisi
        $tek_selesai = $this->db->query("SELECT COUNT(id_ticket) AS jlm_tekselesai FROM ticket 
                                         WHERE status IN (6,7) AND teknisi = '$id_user'")->row();
        $data['tekselesai'] = $tek_selesai->jlm_tekselesai;

        //Resume ticket
        $data['datatickettek']  = $this->model_app->allassignment($id_user)->result();
        $data['jlmtugas']       = $this->model_app->allassignment($id_user)->num_rows();

        ///////////////////////////////////////////////////////////////Dashboard Pegawai///////////////////////////////////////////////////////////////
        
        //Jumlah semua ticket
        $user_ticket = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userticket FROM ticket
                                         WHERE reported = '$id_user'")->row();
        $data['userticket'] = $user_ticket->jlm_userticket;
        //Jumlah ticket yang sudah diapprove
        $user_approve = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userapprove FROM ticket
                                         WHERE reported = '$id_user' AND status = 1")->row();
        $data['userapprove'] = $user_approve->jlm_userapprove;
        //Jumlah ticket yang di reject
        $user_reject = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userreject FROM ticket
                                         WHERE reported = '$id_user' AND status = 0")->row();
        $data['userreject'] = $user_reject->jlm_userreject;
        //Jumlah ticket yang sedang proses
        $user_process = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userprocess FROM ticket
                                         WHERE reported = '$id_user' AND status = 4")->row();
        $data['userprocess'] = $user_process->jlm_userprocess;
        //Jumlah ticket yang sedang di pending
        $user_pending = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userpending FROM ticket
                                         WHERE reported = '$id_user' AND status = 5")->row();
        $data['userpending'] = $user_pending->jlm_userpending;
        //Jumlah ticket yang selesai
        $user_done = $this->db->query("SELECT COUNT(id_ticket) AS jlm_userdone FROM ticket
                                         WHERE reported = '$id_user' AND status = 6")->row();
        $data['userdone'] = $user_done->jlm_userdone;

        //Resume ticket
        $data['dataticketuser']         = $this->model_app->myticket($id_user)->result();

        $this->load->view('template', $data);
	}

        public function Kehadiran(){
        
        $id_user        = $this->session->userdata('id_user');
        $tanggal        = date('Y-m-d');
        $jam_masuk      = date('H:i:s');

        $data = array(
        'nik'           => $id_user,
        'tanggal'       => $tanggal,
        'jam_masuk'     => $jam_masuk
        );

        $this->model_app->insertAbsensi($data);
        $this->session->set_flashdata('absensi', 'sudah_absen');
        redirect('Dashboard');
        }
        
}