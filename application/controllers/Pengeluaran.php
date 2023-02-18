<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('pengeluaran_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));

         // validasi jika user belum login
        if($this->session->userdata('logined') != TRUE){
            $url=base_url();
            redirect($url);
        }
      } 

	public function index(){
        
        $data['dataPengeluaran']= $this->pengeluaran_model->getDataPengeluaranMaster();
        $data['title'] = "Master Pengeluaran";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('pengeluaran_master/pengeluaran_view',$data);
		//$this->load->view('templates/footer');
	}

    public function pengeluaranMasterAdd(){
        $data = [
            'action' => site_url('pengeluaran/masterAddAction'),
            'cancel' => site_url('pengeluaran'),
            'expName' => set_value('expName'),
            'expId' => set_value('expId'),
            ];
            $data['title'] = "Pengeluaran";
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('pengeluaran_master/pengeluaran_form',$data);
            $this->load->view('templates/footer');
    }

    function masterAddAction(){
        $data=array(
            'expName' =>$this->input->post('expName'),
            'expTimestamp' => time(),
            'expDeleted' => 0,
		);
        if($data){
            $this->pengeluaran_model->addDataPengeluaranMaster($data);
            $this->session->set_flashdata('msg','Data Berhasil ditambahkan !');
            redirect(site_url('pengeluaran'));
        }
	
    }

    function masterEdit($id){
        $data = $this->pengeluaran_model->getIdPengeluaranMaster($id);
        $data = [
            'action' => site_url('pengeluaran/masterEditAction'),
            'cancel' => site_url('pengeluaran'),
            'expId' => set_value('expId',$data[0]->expId),
            'expName' => set_value('expName',$data[0]->expName),
        ];
        $data['title'] = "Pengeluaran Master";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengeluaran_master/pengeluaran_form',$data);
        $this->load->view('templates/footer');
    }

    function masterEditAction(){
        $data = [
            'expName' => $this->input->post('expName')
        ];
        if($data){
            $id = $this->input->post('expId');
            $this->pengeluaran_model->editDataPengeluaranMaster($id,$data);
            $this->session->set_flashdata('msg','Data Berhasil diubah !');
            redirect(site_url('pengeluaran'));
        }
    }

    function masterDelete($data){
        $this->pengeluaran_model->deleteMaster($data);
        $this->session->set_flashdata('msg','Data Berhasil dihapus !');
        redirect(site_url('pengeluaran'));
    }

    //PENGELUARAN
    function pengeluaranView(){
        $data['dataPengeluaran']= $this->pengeluaran_model->getDataPengeluaran();
        $data['title'] = "Kelola Pengeluaran";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('pengeluaran/index',$data);
		// $this->load->view('templates/footer');
    }

    public function pengeluaran_add(){
        $data = [
        'action' => site_url('Pengeluaran/pengeluaranAddAction'),
        'cancel' => site_url('Pengeluaran/pengeluaranView'),
        'pId' => set_value('pId'),
        'pNama' => set_value('pNama'),
        'pJenis' => set_value('pJenis'),
        'pHarga' => set_value('pHarga'),
        'pDate' => set_value('pDate'),
        'pTimestamp' => set_value('pTimestamp'),
        'pDeleted' => set_value('pDeleted'),
        'pengeluaranmaster' => $this->db->get('pengeluaran_m')->result()
        ];
        $data['title'] = "Data Pengeluaranku";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengeluaran/add',$data);
        $this->load->view('templates/footer');
    }

    function pengeluaranAddAction(){
        $data=array(
            'pNama' =>ucwords($this->input->post('pNama')),
            'pDate' =>$this->input->post('pDate'),
            'pJenis' =>$this->input->post('pJenis'),
            'pHarga' =>$this->input->post('pHarga'),
            'pYear' => date("Y",strtotime($this->input->post('pDate'))),
            'pMonth' => date("m",strtotime($this->input->post('pDate'))),
            'pDay' => date("d",strtotime($this->input->post('pDate'))),
            'pTimestamp' => time(),
            'pDeleted' => 0,
            
		);
        if($data){
            $this->pengeluaran_model->addDataPengeluaran($data);
            $this->session->set_flashdata('msg','Data Berhasil ditambahkan !');
            redirect(site_url('pengeluaran/pengeluaranView'));
        }
	
    }

    public function pengeluaranEdit($id){
        $data = $this->pengeluaran_model->getIdPengeluaran($id);
        $data = [
        'action' => site_url('Pengeluaran/pengeluaranEditAction'),
        'cancel' => site_url('Pengeluaran/pengeluaranView'),
        'pNama' => set_value('pNama',$data[0]->pNama),
        'pJenis' => set_value('pJenis',$data[0]->pJenis),
        'pHarga' => set_value('pHarga',$data[0]->pHarga),
        'pDate' => set_value('pDate',$data[0]->pDate),
        'pId' => set_value('pId',$data[0]->pId),
        'pengeluaranmaster' => $this->db->get('pengeluaran_m')->result()
        ];
        $data['title'] = "Edit Data Pengeluaran";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengeluaran/edit',$data);
        $this->load->view('templates/footer');
    }

    public function pengeluaranEditAction(){
        $data=array(
            'pNama' =>$this->input->post('pNama'),
            'pDate' =>$this->input->post('pDate'),
            'pJenis' =>$this->input->post('pJenis'),
            'pHarga' =>$this->input->post('pHarga'),
            'pYear' => date("Y",strtotime($this->input->post('pDate'))),
            'pMonth' => date("m",strtotime($this->input->post('pDate'))),
            'pDay' => date("d",strtotime($this->input->post('pDate'))),

		);
        if($data){
            $id = $this->input->post('pId');
            $this->pengeluaran_model->editDataPengeluaran($id,$data);
            $this->session->set_flashdata('msg','Data Berhasil diubah !');
            redirect(site_url('pengeluaran/pengeluaranView'));
        }
    }

    function pengeluaranDelete($data){
        $this->pengeluaran_model->pengeluaranDelete($data);
        $this->session->set_flashdata('msg','Data Berhasil dihapus !');
        redirect(site_url('pengeluaran/pengeluaranView'));
    }

  
}
