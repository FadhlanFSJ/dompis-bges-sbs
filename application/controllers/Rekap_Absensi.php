<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekap_Absensi extends CI_Controller 
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
    
}