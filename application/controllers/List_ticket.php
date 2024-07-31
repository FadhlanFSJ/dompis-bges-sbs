<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_ticket extends CI_Controller
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

    //////////////////////////////////////////////////////////////Bagian List Ticket//////////////////////////////////////////////////////////////
    public function index()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User" ){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/allticket";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            $data['listticket'] = $this->model_app->all_ticket()->result();
            $durasi = $this->model_app->get_durasi();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_datin()
    {
        
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/allticket_datin";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_datin'] = $this->model_app->all_ticket_datin()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_datin_k1()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/ticket_datin_k1";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_datin_k1'] = $this->model_app->all_ticket_datin_k1()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_datin_k2()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/ticket_datin_k2";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_datin_k2'] = $this->model_app->all_ticket_datin_k2()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_datin_k3()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/ticket_datin_k3";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_datin_k3'] = $this->model_app->all_ticket_datin_k3()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_prev_datin()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/preventive_datin";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_prev_datin'] = $this->model_app->all_ticket_prev_datin()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_hsi()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/allticket_hsi";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_hsi'] = $this->model_app->all_ticket_hsi()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tiket_voice()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List All Tiket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/allticket_voice";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            $data['listticket_voice'] = $this->model_app->all_ticket_voice()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function index_tugas()
	{
		//User harus Teknisi, tidak boleh role user lain
		if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
			//Menyusun template List Assignment
			$data['title'] 	  = "List Assignment";
			$data['navbar']   = "navbar";
			$data['sidebar']  = "sidebar";
			$data['body']     = "ticket/listwo"; 

        	//Session
			$id_dept 	= $this->session->userdata('id_dept');
			$id_user 	= $this->session->userdata('id_user');

        	//Daftar semua ticket yang ditugaskan kepada teknisi, get dari model_app (daftar_tugas) berdasarkan id_user teknisi, data akan ditampung dalam parameter 'tugas'
			$data['wo'] = $this->model_app->daftar_wo($id_user)->result();

			//Load template
			$this->load->view('template', $data);
		} else {
			//Bagian ini jika role yang mengakses tidak sama dengan Teknisi
			//Akan dibawa ke Controller Errorpage
			redirect('Errorpage');
		}
	}

    public function produktiv()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List Produktivitas";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/produktivitas";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            //$data['list_produktiv'] = $this->model_app->produktiv()->result();
           // $data['total_produktiv'] = $this->model_app->get_produktiv();
            $data['teknisi_pro']     = $this->model_app->getTeknisi_pro()->result();
            $data['hd_pro']     = $this->model_app->getHd_pro()->result();

            //Daftar semua ticket yang ditugaskan kepada teknisi, get dari model_app (daftar_tugas) berdasarkan id_user teknisi, data akan ditampung dalam parameter 'tugas'
			$data['tugas'] = $this->model_app->daftar_tugas($id_user)->result();
            

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function produktiv_hd()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List Produktivitas";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/produktivitas_hd";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            //$data['list_produktiv'] = $this->model_app->produktiv()->result();
           // $data['total_produktiv'] = $this->model_app->get_produktiv();
            $data['hd_pro']     = $this->model_app->getHd_pro()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function produktiv_tl()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin" OR $this->session->userdata('level') == "User"){
            //Menyusun template List Ticket
            $data['title']    = "List Produktivitas";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/produktivitas_tl";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket, get dari model_app (all_ticket), data akan ditampung dalam parameter 'listticket'
            //$data['listticket'] = $this->model_app->all_ticket()->result();
            //$data['list_produktiv'] = $this->model_app->produktiv()->result();
           // $data['total_produktiv'] = $this->model_app->get_produktiv();
            $data['tl_pro']     = $this->model_app->getTl_pro()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function detail_ticket($id)
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Detail Ticket
            $data['title']    = "Detail Ticket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/detail";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Detail setiap tiket, get dari model_app (detail_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'detail'
            $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

            //Tracking setiap tiket, get dari model_app (tracking_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'tracking'
            $data['tracking'] = $this->model_app->tracking_ticket($id)->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    //////////////////////////////////////////////////////////////Bagian Ticket Recieved//////////////////////////////////////////////////////////////
    public function list_approve()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template List Approval Ticket
            $data['title']    = "Ticket Received";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/listapprove";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket yang dalam approval, get dari model_app (approve_ticket) dengan parameter id_user, karena hanya id_user dengan level admin yang dapat melihat daftar ini, data akan ditampung dalam parameter 'approve'
            $data['approve'] = $this->model_app->approve_ticket($id_user)->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function detail_approve($id)
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Detail Ticket yang belum di-approve
            $data['title']    = "Detail Ticket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/detailapprove";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Detail setiap tiket yang belum di-approve, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
            $data['detail'] = $this->model_app->detail_ticket($id)->row_array();
            
            //Tracking setiap tiket, get dari model_app (tracking_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'tracking'
            $data['tracking'] = $this->model_app->tracking_ticket($id)->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function setPriority($id)
    {
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Detail Ticket yang belum di-approve
            $data['title']    = "Set Priority and Technician";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/setPriority";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            $nama   = $this->input->post('nama');
            $email  = $this->input->post('email');

            //Detail setiap tiket yang belum di-approve, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
            $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

            $row = $this->model_app->detail_ticket($id)->row();
            //Dropdown pilih kondisi, menggunakan model_app (dropdown_kondisi), nama kondisi ditampung pada 'dd_kondisi', data yang akan di simpan adalah id_kondisi dan akan ditampung pada 'id_kondisi'
            $data['dd_kondisi'] = $this->model_app->dropdown_kondisi();
            $data['id_kondisi'] = "";

            //Dropdown pilih Teknisi, menggunakan model_app (dropdown_teknisi), nama teknisi ditampung pada 'dd_teknisi', dan data yang akan di simpan adalah id_user dengan level teknisi, data akan ditampung pada 'id_teknisi'
            $data['dd_teknisi'] = $this->model_app->dropdown_teknisi();
            $data['id_teknisi'] = "";

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function approve($id)
    {
        //Form validasi untuk kondisi dengan nama validasi = id_kondisi
        $this->form_validation->set_rules('id_kondisi', 'Id_kondisi', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Gagal!</strong> Silahkan pilih Priority.
                               </div>'
            )
        );

        $this->form_validation->set_rules('id_teknisi1', 'Id_teknisi1', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Gagal!</strong> Silahkan pilih Teknisi.
                               </div>'
            )
        );
        $this->form_validation->set_rules('id_teknisi2', 'Id_teknisi2', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Gagal!</strong> Silahkan pilih Teknisi.
                               </div>'
            )
        );

        if($this->form_validation->run() == FALSE){
            if($this->session->userdata('level') == "Admin"){
                //Menyusun template Detail Ticket yang belum di-approve
                $data['title']    = "Set Priority and Technician";
                $data['navbar']   = "navbar";
                $data['sidebar']  = "sidebar";
                $data['body']     = "ticket/setPriority";

                //Session
                $id_dept = $this->session->userdata('id_dept');
                $id_user = $this->session->userdata('id_user');

                $nama   = $this->input->post('nama');
                $email  = $this->input->post('email');

                //Detail setiap tiket yang belum di-approve, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
                $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

                $row = $this->model_app->detail_ticket($id)->row();
                //Dropdown pilih kondisi, menggunakan model_app (dropdown_kondisi), nama kondisi ditampung pada 'dd_kondisi', data yang akan di simpan adalah id_kondisi dan akan ditampung pada 'id_kondisi'
                $data['dd_kondisi'] = $this->model_app->dropdown_kondisi();
                $data['id_kondisi'] = "";

                //Dropdown pilih Teknisi, menggunakan model_app (dropdown_teknisi), nama teknisi ditampung pada 'dd_teknisi', dan data yang akan di simpan adalah id_user dengan level teknisi, data akan ditampung pada 'id_teknisi'
                $data['dd_teknisi'] = $this->model_app->dropdown_teknisi();
                $data['id_teknisi'] = "";

                //Load template
                $this->load->view('template', $data);
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        } else {
                //User harus admin, tidak boleh role user lain
            if($this->session->userdata('level') == "Admin"){
                //Proses me-approve ticket, menggunakan model_app (approve) dengan parameter id_ticket yang akan di-approve
                $this->model_app->approve($id);
                //Memanggil fungsi kirim email dari admin ke user
                $this->model_app->emailapprove($id);
                //Memanggil fungsi kirim email dari admin ke teknisi
                $this->model_app->emailtugas($id);
                //Set pemberitahuan bahwa tiket berhasil ditugaskan ke teknisi
                $this->session->set_flashdata('status', 'Assigned');
                //Kembali ke halaman List approvel ticket (list_approve)
                redirect('List_ticket/list_approve');
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        }
    }

    public function detail_reject($id)
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Detail Ticket yang akan di-reject
            $data['title']    = "Reject Ticket";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/detailreject";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Detail setiap tiket yang akan di-reject, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
            $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function reject($id)
    {
        //Form validasi untuk message yang akan di kirim ke email user
        $this->form_validation->set_rules('message', 'Message', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Failed!</strong> Please Fill the Meesage.
                               </div>'
            )
        );

        if($this->form_validation->run() == FALSE){
            //User harus admin, tidak boleh role user lain
            if($this->session->userdata('level') == "Admin"){
                //Menyusun template Detail Ticket yang akan di-reject
                $data['title']    = "Reject Ticket";
                $data['navbar']   = "navbar";
                $data['sidebar']  = "sidebar";
                $data['body']     = "ticket/detailreject";

                //Session
                $id_dept = $this->session->userdata('id_dept');
                $id_user = $this->session->userdata('id_user');

                //Detail setiap tiket yang akan di-reject, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
                $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

                //Load template
                $this->load->view('template', $data);
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        } else {
            //User harus admin, tidak boleh role user lain
            if($this->session->userdata('level') == "Admin"){
                //Proses me-reject ticket, menggunakan model_app (reject) dengan parameter id_ticket yang akan di-reject
                $this->model_app->reject($id);
                //Memanggil fungsi kirim email dari admin ke user
                $this->model_app->emailreject($id);
                //Set pemberitahuan bahwa ticket berhasil di-reject
                $this->session->set_flashdata('status', 'Rejected');
                //Kembali ke halaman List approvel ticket (list_approve)
                redirect('List_ticket/list_approve');   
            } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        }
    }

    public function detail_pilih_teknisi($id)
    {
        $nama   = $this->input->post('nama');
        $email  = $this->input->post('email');

        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Detail Ticket yang akan ditugaskan ke teknisi
            $data['title']    = "Assign Technician";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/detailpilihteknisi";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Detail setiap tiket yang akan ditugaskan ke teknisi, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
            $data['detail'] = $this->model_app->detail_ticket($id)->row_array();
            
            //Tracking setiap tiket, get dari model_app (tracking_ticket) berdasarkan id_ticket, data akan ditampung dalam parameter 'tracking'
            $data['tracking'] = $this->model_app->tracking_ticket($id)->result();

            //Dropdown pilih Teknisi, menggunakan model_app (dropdown_teknisi), nama teknisi ditampung pada 'dd_teknisi', dan data yang akan di simpan adalah id_user dengan level teknisi, data akan ditampung pada 'id_teknisi'
            $data['dd_teknisi'] = $this->model_app->dropdown_teknisi();
            $data['id_teknisi'] = "";

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }

    public function tugas($id)
    {
        //Form validasi untuk id_user dengan level teknisi dengan nama validasi = id_teknisi
        $this->form_validation->set_rules('id_teknisi', 'Id_teknisi', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Failed!</strong> Please choose the technician.
                               </div>'
            )
        );

        //Kondisi jika saat proses penugasan tidak memenuhi syarat validasi akan dikembalikan ke halaman detail ticket yang akan ditugaskan
        if($this->form_validation->run() == FALSE){
            //User harus admin, tidak boleh role user lain
            if($this->session->userdata('level') == "Admin"){
                //Menyusun template Detail Ticket yang akan ditugaskan ke teknisi
                $data['title']    = "Assign Technician";
                $data['navbar']   = "navbar";
                $data['sidebar']  = "sidebar";
                $data['body']     = "ticket/detailpilihteknisi";

                //Session
                $id_dept = $this->session->userdata('id_dept');
                $id_user = $this->session->userdata('id_user');

                //Detail setiap tiket yang akan ditugaskan ke teknisi, get dari model_app (detailticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
                $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

                //Dropdown pilih Teknisi, menggunakan model_app (dropdown_teknisi), nama teknisi ditampung pada 'dd_teknisi', dan data yang akan di simpan adalah id_user dengan level teknisi, data akan ditampung pada 'id_teknisi'
                $data['dd_teknisi'] = $this->model_app->dropdown_teknisi();
                $data['id_teknisi'] = "";
                
                //Load template
                $this->load->view('template', $data);
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        } else {
            //Bagian ini jika validasi terpenuhi
            //User harus admin, tidak boleh role user lain
            if($this->session->userdata('level') == "Admin"){
                //Proses menugaskan ticket ke teknisi, menggunakan model_app (input_tugas) dengan parameter id_ticket yang akan di-tugaskan
                $this->model_app->input_tugas($id);
                
                $this->model_app->emailtugas($id);
                //Set pemberitahuan bahwa tiket berhasil ditugaskan ke teknisi
                $this->session->set_flashdata('status', 'Assigned');
                //Kembali ke halaman Assign Ticket (indexpilih)
                redirect('List_ticket/list_approve');
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        }
    }
    public function filtertanggal(){
        $data['title']    = "List All Tiket";
        $data['navbar']   = "navbar";
        $data['sidebar']  = "sidebar";
        $data['body']     = "ticket/allticket";

        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');

        $start_date     = $this->input->get('start_date');
        $end_date       = $this->input->get('end_date');

        $data['listticket'] = $this->model_app->getTicketFilter($start_date, $end_date);
        $this->load->view('template', $data);
    }
    public function checkDataExport(){
        
        $start_date     = $this->input->get('start_date');
        $end_date       = $this->input->get('end_date');

    if($start_date && $end_date){
        $data['allticket'] = $this->model_app->getTicketFilter($start_date, $end_date);
    }else{
        $data['allticket'] = $this->model_app->all_ticket()->result();
    }
    $this->exportexcel($data['allticket']);
    }
    
    public function exportexcel($allticket){

        require(APPPATH. 'PHPExcel-v7.4-master/PHPExcel.php');
        require(APPPATH. 'PHPExcel-v7.4-master/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("CCAN");
        $object->getProperties()->setLastModifiedBy("CCAN");

        $object->getProperties()->setTitle("laporan Ticket");

        $object->setActiveSheetIndex(0);
        
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NO TIKET');
        $object->getActiveSheet()->setCellValue('C1', 'PRORITY');
        $object->getActiveSheet()->setCellValue('D1', 'WAKTU OPEN');
        $object->getActiveSheet()->setCellValue('E1', 'MAX TTR');
        $object->getActiveSheet()->setCellValue('F1', 'SUB CATEGORY');
        $object->getActiveSheet()->setCellValue('G1', 'SO');
        $object->getActiveSheet()->setCellValue('H1', 'SID/INET/NOTEL');
        $object->getActiveSheet()->setCellValue('I1', 'LAST UPDATE');
        $object->getActiveSheet()->setCellValue('J1', 'DURASI');
        $object->getActiveSheet()->setCellValue('K1', 'TEKNISI');
        $object->getActiveSheet()->setCellValue('L1', 'STATUS');

        $baris = 2;
        $no = 1;

        foreach ($allticket as $at){
            if ($at->status == 0) {
                $at->statusticket = "ticket rejected";
            } else if ($at->status == 1) {
                $at->statusticket = "ticket submitted";
            } else if ($at->status == 2) {
                $at->statusticket = "category changed";
            } else if ($at->status == 3) {
                $at->statusticket = "Assigned to Technician";
            } else if ($at->status == 4) {
                $at->statusticket = "On Progress";
            } else if ($at->status == 5) {
                $at->statusticket = "Pending";
            } else if ($at->status == 6) {
                $at->statusticket = "Comply";
            } else if ($at->status == 7) {
                $at->statusticket = "Not Comply";
            }

        $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
        $object->getActiveSheet()->setCellValue('B'.$baris, $at->id_ticket);
        $object->getActiveSheet()->setCellValue('C'.$baris, $at->nama_kondisi);
        $object->getActiveSheet()->setCellValue('D'.$baris, $at->tanggal);
        $object->getActiveSheet()->setCellValue('E'.$baris, $at->deadline);
        $object->getActiveSheet()->setCellValue('F'.$baris, $at->nama_sub_kategori);
        $object->getActiveSheet()->setCellValue('G'.$baris, $at->lokasi);
        $object->getActiveSheet()->setCellValue('H'.$baris, $at->problem_summary);
        $object->getActiveSheet()->setCellValue('I'.$baris, $at->tanggal_solved);
        $object->getActiveSheet()->setCellValue('J'.$baris, gmdate("H:i:s", $at->durasi_waktu));
        $object->getActiveSheet()->setCellValue('K'.$baris, $at->nama_teknisi);
        $object->getActiveSheet()->setCellValue('L'.$baris, $at->statusticket);

        $baris++;
        }
        $filename="Data_ticket.xlsx";

        $object->getActiveSheet()->setTitle("laporan Ticket");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        header('Expires: 0');
        header('Pragma: public');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;


    }
}

    /**
    public function update($id)
    {
        //Session
        $id_dept = $this->session->userdata('id_dept');
        $id_user = $this->session->userdata('id_user');
        //Data
        $kondisi = $this->input->post('id_kondisi');
        $row     = $this->model_app->getkondisi($kondisi)->row();

        //Form validasi untuk kondisi dengan nama validasi = id_kondisi
        $this->form_validation->set_rules('id_kondisi', 'Id_kondisi', 'required',
            array(
                'required' => '<div class="alert alert-danger alert-dismissable">
                                    <strong>Failed!</strong> Please Choose the Priority.
                               </div>'
            )
        );

        //Kondisi jika proses buat tiket tidak memenuhi syarat validasi akan dikembalikan ke form buat tiket
        if($this->form_validation->run() == FALSE){
            if($this->session->userdata('level') == "Admin"){
                //Menyusun template Detail Ticket yang belum di-approve
                $data['title']    = "Detail Ticket";
                $data['header']   = "header";
                $data['navbar']   = "navbar";
                $data['sidebar']  = "sidebar";
                $data['body']     = "ticket/edit";

                //Detail setiap tiket yang belum di-approve, get dari model_app (detail_ticket) dengan parameter id_ticket, data akan ditampung dalam parameter 'detail'
                $data['detail'] = $this->model_app->detail_ticket($id)->row_array();

                $row = $this->model_app->detail_ticket($id)->row();
                //Dropdown pilih kondisi, menggunakan model_app (dropdown_kondisi), nama kondisi ditampung pada 'dd_kondisi', data yang akan di simpan adalah id_kondisi dan akan ditampung pada 'id_kondisi'
                $data['dd_kondisi'] = $this->model_app->dropdown_kondisi();
                $data['id_kondisi'] = $row->id_kondisi;
                
                //Load template
                $this->load->view('template', $data);
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        } else {
            if($this->session->userdata('level') == "Admin"){
                $date       = date("Y-m-d  H:i:s");
                $date2      = $this->input->post('waktu_respon');
                $data = array(
                    'id_kondisi' => $kondisi,
                    'deadline'   => date('Y-m-d H:i:s', strtotime($date. ' + '.$date2.' days')),
                    'last_update'=> date("Y-m-d  H:i:s")
                );

                //Melakukan insert data tracking ticket sedang dikerjakan oleh teknisi, data tracking ke dalam array '$datatracking' yang nanti akan di-insert dengan query
                $datatracking = array(
                  'id_ticket'  => $id,
                  'tanggal'    => date("Y-m-d  H:i:s"),
                  'status'     => "Priority Changed",
                  'deskripsi'  => "Priority is set to ".$row->nama_kondisi,
                  'id_user'    => $id_user
              );

                $this->db->where('id_ticket', $id);
                $this->db->update('ticket', $data);

                $this->db->insert('tracking', $datatracking);

                //Set pemberitahuan bahwa data pegawai berhasil diupdate
                $this->session->set_flashdata('status', 'Changed');
                //Kembali ke halaman detail ticket
                redirect('List_ticket/list_approve');
            } else {
                //Bagian ini jika role yang mengakses tidak sama dengan admin
                //Akan dibawa ke Controller Errorpage
                redirect('Errorpage');
            }
        }
    }
    **/

    /**
    public function reopen($id)
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Proses reopen ticket, menggunakan model_app (reopen) dengan parameter id_ticket yang akan di-reopen
            $this->model_app->reopen($id);
            //Set pemberitahuan bahwa ticket berhasil di-reopen
            $this->session->set_flashdata('respon','1');
            //Kembali ke halaman List approvel ticket (list_approve)
            redirect('List_ticket/list_approve');   
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        } 
    }
    **/

     /**
    public function indexpilih()
    {
        //User harus admin, tidak boleh role user lain
        if($this->session->userdata('level') == "Admin"){
            //Menyusun template Assign Ticket (Daftar ticket yang akan ditugaskan ke teknisi)
            $data['title']    = "Assign Technician";
            $data['header']   = "header";
            $data['navbar']   = "navbar";
            $data['sidebar']  = "sidebar";
            $data['body']     = "ticket/pilihteknisi";

            //Session
            $id_dept = $this->session->userdata('id_dept');
            $id_user = $this->session->userdata('id_user');

            //Daftar semua tiket yang akan ditugaskan ke teknisi, get dari model_app (pilih_teknisi), data akan ditampung dalam parameter 'pilihteknisi'
            $data['pilihteknisi'] = $this->model_app->pilih_teknisi()->result();

            //Load template
            $this->load->view('template', $data);
        } else {
            //Bagian ini jika role yang mengakses tidak sama dengan admin
            //Akan dibawa ke Controller Errorpage
            redirect('Errorpage');
        }
    }
    **/