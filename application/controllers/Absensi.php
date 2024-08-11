<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        if(!$this->session->userdata('id_user')){
            $this->session->set_flashdata('status1', 'expired');
            redirect('login');
        }
    }
    public function index(){
        if($this->session->userdata('level') == "Admin"){
            $data['title']      = "List Absensi Teknisi";
            $data['navbar']     = "navbar";
			$data['sidebar']	= "sidebar";
            $data['body']       = "absensi/absensi";

            $id_dept = $this->session->userdata('id_dept');
			$id_user = $this->session->userdata('id_user');
            
            $data['karyawan'] = $this->model_app->getRekapAbsensi()->result();

            $this->load->view('template', $data);
        }else{
            redirect('Errorpage');
        }
    }
    public function update(){
        $status_absensi = $this->input->post('status_absensi');
        foreach ($status_absensi as $nik => $status){
            $data = array(
                'status_absensi' => $status
            );
            $this->db->where('nik', $nik);
            $this->db->update('absensi', $data);
        }
        $this->session->set_flashdata('status', 'Update');
        redirect('absensi');
    }
    public function reset(){
        $this->db->update('absensi', ['status_absensi' => 0]);
        $this->session->set_flashdata('status', 'Data berhasil direset.');
        redirect('absensi');
    }
}