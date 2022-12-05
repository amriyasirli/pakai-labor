<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        }

    public function index()
    {
        $data['title'] = 'Login';
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/auth/login', $data);

        } else {
            $this->_login();
        }
        
    }
    
	private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //user ada
        if ($user) {
                //cek passwordnya
                if (md5($password) == $user['password']) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'nama' => $user['nama'],
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'data_created' => $user['data_created'],
                    ];
                    $this->session->set_userdata($data);
                    
                    $user['role'] == 1 
                        ? redirect('Admin') 
                        : redirect('Dosen/dashboard');

                } else {
                    $this->session->set_flashdata('pesan', '<div  class="alert alert-danger">Password Salah !</div>');
                    redirect('Auth');
                }

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning">Username Tidak Terdaftar !</div>');
            redirect('Auth');
        }
    }
    

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('data_created');

        $this->session->unmark_flash('warning');
        $this->session->unmark_flash('pesan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Has been Logout is Success !</div>');
        redirect('Auth');
    }


    public function blocked()
    {
        $data['title'] = 'Akses Di Tolak !';
        $this->load->view('template/header', $data);
        $this->load->view('blocked');
    }
}
