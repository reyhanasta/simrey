<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    //PUBLIC CONSTRUCT
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->form_validation->set_rules('username' ,'Username' , 'required|trim');
        // $this->form_validation->set_rules('password' ,'Password' , 'required|trim|min_length[8]',[
        //     'min_length'=> 'Password too short!'
        // ]);

        if($this->form_validation->run() == false) {
            $data['pageTitle'] = 'Login Page'; // Judul Page
            $this->load->view('login_page/login', $data);

        }
        else {
            $this->login();
        }
	}



    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user' , ['username'=>$username])-> row_array();

        if ($user){
            //Jika User tersedia
            //JANGAN LUPA DI ENKRIPSI
            
            if($password == $user['password']){

                $data = [
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'logined' => TRUE
                ];
                $this->session->set_userdata($data);
              
                 redirect('admin');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Wrong Password</div>');
                 redirect('auth/index');
            }
        }
        else{
            //Jika User tidak tersedia
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">User is not registered</div>');
            redirect('auth/index');
        }
    }

    public function logout(){
        
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logined');
        $this->session->sess_destroy();
        redirect('auth');
    }


	

}
