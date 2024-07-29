<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_ticket_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Meload model_app
		$this->load->model('model_app');
		//Jika session tidak ditemukan
		if (!$this->session->userdata('id_user')) {
			//Kembali ke halaman Login
			$this->session->set_flashdata('status1', 'expired');
			redirect('login');
		}
	}

	/////////////////////////////////////////////////////////////////////////////Create Ticket/////////////////////////////////////////////////////////////////////////////

	public function buat()
	{
		//User harus User, tidak boleh role user lain
		if($this->session->userdata('level') == "User"){
			//Menyusun template Create ticket
			$data['title'] 	  = "Create Tiket";
			$data['navbar']   = "navbar";
			$data['sidebar']  = "sidebar";
			$data['body']     = "ticketUser/buatticket";

	        //Session
			$id_dept 	= $this->session->userdata('id_dept');
			$id_user 	= $this->session->userdata('id_user');

			//Input Tiket manual  
			$data['ticket'] = $this->input->post('id_ticket');

			//Mengambil semua data profile user yang sedang login menggunakan model_app (profile)
			$data['profile'] = $this->model_app->profile($id_user)->row_array();

			//Dropdown pilih kategori, menggunakan model_app (dropdown_kategori), nama kategori ditampung pada 'dd_kategori', data yang akan di simpan adalah id_kategori dan akan ditampung pada 'id_kategori'
			$data['dd_kategori'] = $this->model_app->dropdown_kategori();
			$data['id_kategori'] = "";

			//Dropdown pilih sub kategori, menggunakan model_app (dropdown_sub_kategori), nama kategori ditampung pada 'dd_sub_kategori', data yang akan di simpan adalah id_sub_kategori dan akan ditampung pada 'id_sub_kategori'
			$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori('');
			$data['id_sub_kategori'] = "";

			//Dropdown pilih lokasi, menggunakan model_app (dropdown_lokasi), nama kondisi ditampung pada 'dd_lokasi', data yang akan di simpan adalah id_lokasi dan akan ditampung pada 'id_lokasi'
			$data['dd_lokasi'] = $this->model_app->dropdown_lokasi();
			$data['id_lokasi'] = "";
			
			//Dropdown pilih Penyebab Gangguan, menggunakan model_app (dropdown_rca), nama RCA ditampung pada dd_rca
			$data['dd_rca'] = $this->model_app->dropdown_rca();
			$data['id_rca'] = "";

			//Load template
			$this->load->view('template', $data);
		} else {
			//Bagian ini jika role yang mengakses tidak sama dengan User
			//Akan dibawa ke Controller Errorpage
			redirect('Errorpage');
		}
	}

	public function submit()
	{
		//Form validasi untuk deskripsi dengan nama id ticket = id ticket
		$this->form_validation->set_rules('id_ticket', 'Id_ticket', 'required|is_unique[ticket.id_ticket]',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Gagal!</strong> Silahkan input Tiket.
								</div>',
				'is_unique' => '<div class="alert alert-danger alert-dismissable">
									<strong>Gagal!</strong> ID Tiket sudah ada.
							   </div>'
			)
		);

		//Form validasi untuk ketgori dengan nama validasi = id_kategori
		$this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Failed!</strong> Silahkan Pilih Kategori.
							   </div>'
			)
		);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
				<strong>Failed!</strong> Silahkan Atur Tanggal dan Waktu!</div>'
			)
		);

		//Form validasi untuk sub kategori dengan nama validasi = id_sub_kategori
		$this->form_validation->set_rules('id_sub_kategori', 'id_sub_kategori', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Failed!</strong> Silahkan Pilih Sub Kategori.
							   </div>'
			)
		);

		//Form validasi untuk lokasi dengan nama validasi = lokasi
		$this->form_validation->set_rules('id_lokasi', 'Id_lokasi', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Failed!</strong> Silahkan Pilih SO.
							   </div>'
			)
		);

		//Form validasi untuk subject dengan nama validasi = problem_summary
		$this->form_validation->set_rules('problem_summary', 'Problem_summary', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Failed!</strong> Silahkan Masukkan SID/INET/NOTEL.
							   </div>'
			)
		);
		// $this->form_validation->set_rules('id_rca', 'Id_rca', 'required', array(
		// 	'required' => '<div class="alert alert-danger alert-dismissable">
		// 						<strong>Failed!</strong> Silahkan Masukkan RCA!
		// 					</div>'
		// ));

		//Form validasi untuk deskripsi dengan nama validasi = problem_detail
		$this->form_validation->set_rules('problem_detail', 'Problem_detail', 'required',
			array(
				'required' => '<div class="alert alert-danger alert-dismissable">
									<strong>Failed!</strong> Silahkan Masukkan Deskripsi.
							   </div>'
			)
		);

		//Kondisi jika proses buat tiket tidak memenuhi syarat validasi akan dikembalikan ke form buat tiket
		if($this->form_validation->run() == FALSE){
			//User harus User, tidak boleh role user lain
			if($this->session->userdata('level') == "User"){
				//Menyusun template Create ticket
				$data['title'] 	  = "Create Tiket";
				$data['navbar']   = "navbar";
				$data['sidebar']  = "sidebar";
				$data['body']     = "ticketUser/buatticket";

	        	//Session
				$id_dept 	= $this->session->userdata('id_dept');
				$id_user 	= $this->session->userdata('id_user');

				//input tiket manual
				$data['ticket'] = $this->input->post('id_ticket');

				//Mengambil semua data profile user yang sedang login menggunakan model_app (profile)
				$data['profile'] = $this->model_app->profile($id_user)->row_array();

				//Dropdown pilih kategori, menggunakan model_app (dropdown_kategori), nama kategori ditampung pada 'dd_kategori', data yang akan di simpan adalah id_kategori dan akan ditampung pada 'id_kategori'
				$data['dd_kategori'] = $this->model_app->dropdown_kategori();
				$data['id_kategori'] = "";

				//Dropdown pilih sub kategori, menggunakan model_app (dropdown_sub_kategori), nama kategori ditampung pada 'dd_sub_kategori', data yang akan di simpan adalah id_sub_kategori dan akan ditampung pada 'id_sub_kategori'
				$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori('');
				$data['id_sub_kategori'] = "";

				//Dropdown pilih lokasi, menggunakan model_app (dropdown_lokasi), nama kondisi ditampung pada 'dd_lokasi', data yang akan di simpan adalah id_lokasi dan akan ditampung pada 'id_lokasi'
				$data['dd_lokasi'] = $this->model_app->dropdown_lokasi();
				$data['id_lokasi'] = "";

				//Load template
				$this->load->view('template', $data);
			} else {
				//Bagian ini jika role yang mengakses tidak sama dengan User
				//Akan dibawa ke Controller Errorpage
				redirect('Errorpage');
			}
		} else {
			//Bagian ini jika validasi dipenuhi untuk membuat ticket
			//Session
			$id_user 	= $this->session->userdata('id_user');
			
			//Get kode ticket yang akan digunakan sebagai id_ticket menggunakan model_app(getkodeticket)
			$ticket 	= $this->input->post('id_ticket');
			$date       = $this->input->post('tanggal');
			// $date		= date('Y-m-d H:i:s');

			$formated_date_time = date('Y-m-d H:i:s', strtotime($date));

			//Konfigurasi Upload Gambar
			$config['upload_path'] 		= './uploads/';		//Folder untuk menyimpan gambar
			$config['allowed_types'] 	= 'gif|jpg|jpeg|png|pdf';	//Tipe file yang diizinkan
			$config['max_size'] 		= '2048';			//Ukuran maksimum file gambar yang diizinkan
			$config['max_width']        = '0';				//Ukuran lebar maks. 0 menandakan ga ada batas
            $config['max_height']       = '0';				//Ukuran tinggi maks. 0 menandakan ga ada batas

			//Memanggil library upload pada codeigniter dan menyimpan konfirguasi
			$this->load->library('upload', $config);
			//Jika upload gambar tidak sesuai dengan konfigurasi di atas, maka upload gambar gagal, dan kembali ke halaman Create ticket
			if (!$this->upload->do_upload('filefoto')) {
				$this->session->set_flashdata('status', 'Error');
				redirect('List_ticket_user/buat');
			} else {
				//Bagian ini jika file gambar sesuai dengan konfirgurasi di atas
				//Menampung file gambar ke variable 'gambar'
				$gambar = $this->upload->data();
				//Data ticket ditampung dalam bentuk array
				$data = array(
					'id_ticket'			=> $ticket,
					'tanggal'			=> $formated_date_time,
					'last_update'		=> date("Y-m-d  H:i:s"),
					'reported'			=> $id_user,
					'id_sub_kategori' 	=> $this->input->post('id_sub_kategori'),
					'problem_summary'	=> ucfirst($this->input->post('problem_summary')),
					'problem_detail'	=> ucfirst($this->input->post('problem_detail')),
					'status'    		=> 1,
					'progress'			=> 0,
					'filefoto'			=> $gambar['file_name'],
					'id_lokasi'			=> $this->input->post('id_lokasi')
				);


	        	//Data tracking ditampung dalam bentuk array
				$datatracking = array(
					'id_ticket'  => $ticket,
					'tanggal'    => date("Y-m-d  H:i:s"),
					'status'     => "Ticket Submited. Category: ".$row->nama_kategori."(".$key->nama_sub_kategori.")",
					'deskripsi'  => ucfirst($this->input->post('problem_detail')),
					'id_user'    => $id_user
				);

				//Query insert data ticket yang ditampung ke dalam database. tersimpan ditabel ticket
				$this->db->insert('ticket', $data);
				//Query insert data tarcking yang ditampung ke dalam database. tersimpan ditabel tracking
				$this->db->insert('tracking', $datatracking);

				//Memanggil fungsi kirim email dari user ke admin
				$this->model_app->emailbuatticket($ticket);

				//Set pemberitahuan bahwa data tiket berhasil dibuat
				$this->session->set_flashdata('status', 'Submited');
				//Dialihkan ke halaman my ticket
				redirect('List_ticket_user/index');
			}
		}
	}

/////////////////////////////////////////////////////////////////////////////My Ticket/////////////////////////////////////////////////////////////////////////////

	public function index()
	{
		//User harus User, tidak boleh role user lain
		if($this->session->userdata('level') == "User"){
			//Menyusun template My Ticket
			$data['title'] 	  = "List Your Ticket";
			$data['navbar']   = "navbar";
			$data['sidebar']  = "sidebar";
			$data['body']     = "ticketUser/listticket";

	        //Session
			$id_dept 	= $this->session->userdata('id_dept');
			$id_user 	= $this->session->userdata('id_user');

			//Daftar semua ticket user, get dari model_app (myticket) berdasarkan id_user masing-masing, data akan ditampung dalam parameter 'ticket'
			$data['ticket'] = $this->model_app->myticket($id_user)->result();

			//Load template
			$this->load->view('template', $data);
		} else {
			//Bagian ini jika role yang mengakses tidak sama dengan User
			//Akan dibawa ke Controller Errorpage
			redirect('Errorpage');
		}
	}

	public function detail($id)
	{
		//User harus User, tidak boleh role user lain
		if($this->session->userdata('level') == "User"){
			//Menyusun template Detail Ticket
			$data['title'] 	  = "Detail Your Ticket";
			$data['navbar']   = "navbar";
			$data['sidebar']  = "sidebar";
			$data['body']     = "ticketUser/detail";

	        //Session
			$id_dept 	= $this->session->userdata('id_dept');
			$id_user 	= $this->session->userdata('id_user');

			//Detail setiap tiket, get dari model_app (detail_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'detail'
			$data['detail'] = $this->model_app->detail_ticket($id)->row_array();

	        //Tracking setiap tiket, get dari model_app (tracking_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'tracking'
			$data['tracking'] = $this->model_app->tracking_ticket($id)->result();

			//Load template
			$this->load->view('template', $data);
		} else {
			//Bagian ini jika role yang mengakses tidak sama dengan User
			//Akan dibawa ke Controller Errorpage
			redirect('Errorpage');
		}
	}
	
	public function importcsv(){
		$id_dept  = $this->session->userdata('id_dept');
		$id_user  = $this->session->userdata('id_user');
	
		$config['upload_path']    = './uploads/';    // Folder untuk menyimpan gambar
		$config['allowed_types']  = 'csv';           // Tipe file yang diizinkan
		$config['max_size']       = '2048';          // Ukuran maksimum file gambar yang diizinkan
	
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('filecsv')) {
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('status', $error);
			redirect('List_ticket_user/buat');
		} else {
			$filedata = $this->upload->data();
			$file_path = $filedata['full_path'];
			$csv_data = [];
			if (($handle = fopen($file_path, "r")) !== FALSE) {
				$header = fgetcsv($handle, 1000, ";");  // Membaca header
				while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
					$csv_data[] = array_combine($header, $data);  // Menggabungkan header dengan data
				}
				fclose($handle);
			}
			// echo "<pre>";
			// print_r($csv_data);
			// echo "</pre>";
			
			foreach($csv_data as $row){
				// Mapping data CSV ke field database
				$data = array(
					'id_ticket'        => $row['INCIDENT'],
					'tanggal'          => $row['REPORTED DATE'],
					'last_update'      => $row['REPORTED DATE'],
					'reported'         => $id_user,
					'id_sub_kategori'  => $row['SERVICE TYPE'],
					'problem_summary'  => $row['SERVICE NO'],
					'problem_detail'   => $row['SYMPTOM'],
					'status'           => 1,
					'progress'         => 0,
					'id_lokasi'        => $row['WORKZONE']
				);
				$datatracking = array(
					'id_ticket'  => $row['INCIDENT'],
					'tanggal'    => $row['REPORTED DATE'],
					'status'     => "Ticket Submited. Category: ".$row['SERVICE TYPE'],
					'deskripsi'  => $row['DESCRIPTION ASSIGMENT'],
					'id_user'    => $id_user
				);
				// Debug output
				// echo "<pre>";
				// print_r($data);
				// print_r($datatracking);
				// echo "</pre>";
				// $this->db->insert('ticket', $data);
				// $this->db->insert('tracking', $datatracking);

				if (!$this->db->insert('ticket', $data)) {
					log_message('error', 'Failed to insert into ticket: ' . $this->db->last_query());
					$this->session->set_flashdata('status', 'Failed to insert ticket data.');
					redirect('List_ticket_user/buat');
					return;
				}
	
				if (!$this->db->insert('tracking', $datatracking)) {
					log_message('error', 'Failed to insert into tracking: ' . $this->db->last_query());
					$this->session->set_flashdata('status', 'Failed to insert tracking data.');
					redirect('List_ticket_user/buat');
					return;
				}
				// Uncomment to insert data into database
				
				// $this->model_app->emailbuatticket($row['INCIDENT']);
			}
			$this->session->set_flashdata('status', 'Submited');
			// Dialihkan ke halaman my ticket
			redirect('List_ticket_user/index');
		}
	}
	public function filtertanggal(){
		$data['title']    = "List My Tiket";
        $data['navbar']   = "navbar";
        $data['sidebar']  = "sidebar";
        $data['body']     = "ticketUser/listticket";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        $start_date     = $this->input->get('start_date');
        $end_date       = $this->input->get('end_date');

        $data['ticket'] = $this->model_app->getMyTicketFilter($id_user,$start_date, $end_date)->result();
        $this->load->view('template', $data);
	}
}