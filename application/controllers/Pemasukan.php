<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('pemasukan_model');
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
        
        $data['datapemasukan']= $this->pemasukan_model->getDatapemasukanMaster();
        $title['title'] = "Master pemasukan";
		$this->load->view('templates/header',$title);
		$this->load->view('templates/sidebar');
		$this->load->view('pemasukan_master/pemasukan_view',$data);
		//$this->load->view('templates/footer');
	}

    public function pemasukanAdd(){
        $data = [
            'action' => site_url('pemasukan/masterAddAction'),
            'cancel' => site_url('pemasukan'),
            'expName' => set_value('expName'),
            'expId' => set_value('expId'),
            ];
            $title['title'] = "Pemasukan";
            $this->load->view('templates/header',$title);
            $this->load->view('templates/sidebar');
            $this->load->view('pemasukan_master/pemasukan_form',$data);
            $this->load->view('templates/footer');
    }

    function masterAddAction(){
        $data=array(
            'expName' =>$this->input->post('expName'),
            'expTimestamp' => time(),
            'expDeleted' => 0,
		);
        if($data){
            $this->pemasukan_model->addDatapemasukanMaster($data);
            $this->session->set_flashdata('msg','Data Berhasil ditambahkan !');
            redirect(site_url('pemasukan'));
        }
	
    }

    function masterEdit($id){
        $data = $this->pemasukan_model->getIdpemasukanMaster($id);
        $data = [
            'action' => site_url('pemasukan/masterEditAction'),
            'cancel' => site_url('pemasukan'),
            'expId' => set_value('expId',$data[0]->expId),
            'expName' => set_value('expName',$data[0]->expName),
        ];
        $title['title'] = "pemasukan Master";
        $this->load->view('templates/header',$title);
        $this->load->view('templates/sidebar');
        $this->load->view('pemasukan_master/pemasukan_form',$data);
        $this->load->view('templates/footer');
    }

    function masterEditAction(){
        $data = [
            'expName' => $this->input->post('expName')
        ];
        if($data){
            $id = $this->input->post('expId');
            $this->pemasukan_model->editDatapemasukanMaster($id,$data);
            $this->session->set_flashdata('msg','Data Berhasil diubah !');
            redirect(site_url('pemasukan'));
        }
    }

    function masterDelete($data){
        $this->pemasukan_model->deleteMaster($data);
        $this->session->set_flashdata('msg','Data Berhasil dihapus !');
        redirect(site_url('pemasukan'));
    }

    //pemasukan
    function pemasukanView(){
        $data['datapemasukan']= $this->pemasukan_model->getDatapemasukan();
        $title['title'] = "Kelola pemasukan";
		$this->load->view('templates/header',$title);
		$this->load->view('templates/sidebar');
		$this->load->view('pemasukan/index',$data);
		// $this->load->view('templates/footer');
    }

    public function pemasukan_add(){
        $data = [
        'action' => site_url('pemasukan/pemasukanAddAction'),
        'cancel' => site_url('pemasukan/pemasukanView'),
        'mId' => set_value('mId'),
        'mJenis' => set_value('mJenis'),
        'mNominal' => set_value('mNominal'),
        'mDate' => set_value('mDate'),
        'mTimestamp' => set_value('mTimestamp'),
        'mDeleted' => set_value('mDeleted'),
        ];
        $title['title'] = "Data Pemasukan";
        $this->load->view('templates/header',$title);
        $this->load->view('templates/sidebar');
        $this->load->view('pemasukan/add',$data);
        $this->load->view('templates/footer');
    }

    function pemasukanAddAction(){
        $data=array(
          
            'mDate' =>$this->input->post('mDate'),
            'mJenis' =>$this->input->post('mJenis'),
            'mNominal' =>$this->input->post('mNominal'),
            'mTimestamp' => time(),
            'mYear' => date("Y",strtotime($this->input->post('mDate'))),
            'mMonth' => date("m",strtotime($this->input->post('mDate'))),
            'mDay' => date("d",strtotime($this->input->post('mDate'))),
            'mDeleted' => 0,
		);
        if($data){
            $this->pemasukan_model->addDatapemasukan($data);
            $this->session->set_flashdata('msg','Data Berhasil ditambahkan !');
            redirect(site_url('pemasukan/pemasukanView'));
        }
	
    }

    public function pemasukanEdit($id){
        $data = $this->pemasukan_model->getIdpemasukan($id);
        $data = [
        'action' => site_url('pemasukan/pemasukanEditAction'),
        'cancel' => site_url('pemasukan/pemasukanView'),
        'mJenis' => set_value('mJenis',$data[0]->mJenis),
        'mNominal' => set_value('mNominal',$data[0]->mNominal),
        'mDate' => set_value('mDate',$data[0]->mDate),
        'mMonth' => set_value('mMonth',$data[0]->mMonth),
        'mDay' => set_value('mDay',$data[0]->mDay),
        'mYear' => set_value('mYear',$data[0]->mYear),
        'mId' => set_value('mId',$data[0]->mId),
        // 'pemasukanmaster' => $this->db->get('pemasukan_m')->result()
        ];
        $title['title'] = "Edit Data pemasukan";
        $this->load->view('templates/header',$title);
        $this->load->view('templates/sidebar');
        $this->load->view('pemasukan/edit',$data);
        $this->load->view('templates/footer');
    }

    public function pemasukanEditAction(){
        $data=array(
            'mDate' =>$this->input->post('mDate'),
            'mJenis' =>$this->input->post('mJenis'),
            'mNominal' =>$this->input->post('mNominal'),
		);
        if($data){
            $id = $this->input->post('mId');
            $this->pemasukan_model->editDatapemasukan($id,$data);
            $this->session->set_flashdata('msg','Data Berhasil diubah !');
            redirect(site_url('pemasukan/pemasukanView'));
        }
    }

    function pemasukanDelete($data){
        $this->pemasukan_model->pemasukanDelete($data);
        $this->session->set_flashdata('msg','Data Berhasil dihapus !');
        redirect(site_url('pemasukan/pemasukanView'));
    }

    

  
}
