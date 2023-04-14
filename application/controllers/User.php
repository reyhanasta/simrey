<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    
    function __construct(){

        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
      } 

	public function index()
	{
		$title['title'] = 'Users';
		$data['data_user'] = $this->user_model->get_users();
		$this->load->view('templates/header',$title);
		$this->load->view('templates/sidebar');
		$this->load->view('user/index',$data);
		//$this->load->view('templates/footer');
	}

    public function add(){
        $data = [
        'action' => site_url('user/add_action'),
        'cancel' => site_url('user/index'),
        'userId' => set_value('userId'),
        'username' => set_value('username'),
        'password' => set_value('password'),
        'name' => set_value('name'),
        'level' => set_value('levellevel'),
        'userDeleted' => set_value('userDeleted')
        ];
        $title['title'] = 'Users';
        $this->load->view('templates/header',$title);
        $this->load->view('templates/sidebar');
        $this->load->view('user/add',$data);
        $this->load->view('templates/footer');
    }

    public function add_action(){
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[user.username]|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
        $this->form_validation->set_rules('confpassword', 'Confirmation Password', 'trim|required|min_length[4]|matches[password]',
        array('required' => 'Data ini tidak boleh kosong',
               'min_length' => 'Data tidak boleh kurang dari 4 digit',
               'matches' => 'Password konfirmasi tidak sesuai dengan password yang diinputkan')
        );
    
          $this->form_validation->set_error_delimiters('<span class="font-italic col-red">','</span>');
    
          if($this->form_validation->run() != FALSE){
            $this->user_model->add_user();
            $this->session->set_flashdata('pesan', 
                      '<div class="alert alert-success alert-dismissible text-center " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        Data berhasil ditambahkan!
                      </div>');
            redirect('admin/index');
          }
          else {
            $this->add();
          }
      }
    
}

