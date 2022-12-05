<?php 

class User extends CI_Controller {

    function __construct(){
        parent::__construct();

            // ------Authentication-------
            if(!$this->session->userdata('username')){
                redirect ('Auth/');
            }
            // ----------------------------
        
        }

    public function index ()
    {
        $data = [
            'title' => 'User Management',
            'user' => $this->db->get('user')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/user/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add ()
    {
        $data = [
            'title' => 'User Management',
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/user/add', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add_action ()
    {
        $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules(
            'username', 'Username',
            'required|is_unique[user.username]',
            array(
                    'required'      => '
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Wajib diisi !</strong>
                                        </div>',
                    'is_unique'     => '
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Username telah digunakan</strong>
                                        </div>'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]',
            array(
                    'required'      => '
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Wajib diisi !</strong>
                                        </div>',
                    'min_length'    => '
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Password minimal 5 karakter</strong>
                                        </div>',
                    'max_length'      => '
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Password maksimal 12 karakter !</strong>
                                        </div>',
            ));
        if ($this->form_validation->run() == FALSE):
            $data = [
                'title' => 'User Management',
            ];
            $this->load->view('adminTemplate/header', $data);
            $this->load->view('adminTemplate/topbar');
            $this->load->view('adminTemplate/sidebar');
            $this->load->view('admin/user/add', $data);
            $this->load->view('adminTemplate/footer');
        
        else :
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'role' => $this->input->post('role'),
            ];
    
            $this->db->insert('user', $data);
            redirect('User');
        endif;
    }

    public function update_view ($id)
    {
       
            $data = [
                'title' => 'User Management',
                'user' => $this->db->where('id_user', $id)->get('user')->row(),
            ];
            $this->load->view('adminTemplate/header', $data);
            $this->load->view('adminTemplate/topbar');
            $this->load->view('adminTemplate/sidebar');
            $this->load->view('admin/user/update_view', $data);
            $this->load->view('adminTemplate/footer');
        
    }
    
    public function update ($id)
    {
        $user = $this->db->get_where('user', ['id_user' => $id])->row();

        // var_dump($user->password);
        // var_dump(md5($this->input->post('password')));
        // die();
        if($user->password == md5($this->input->post('password'))):
            $data = [
                'nama' => $this->input->post('nama'),
                'role' => $this->input->post('role'),
            ];
    
            $this->db->where('id_user', $id);
            $this->db->update('user', $data);
            $this->session->unmark_flash('warning');
            redirect('User');
        else:
            $this->session->set_flashdata('warning', '
            <div class="alert alert-light alert-has-icon">
                <div class="alert-icon"><i class="fas fa-close"></i></div>
                <div class="alert-body">
                <div class="alert-title">Masukan Password yang benar !</div>
                Masukkan password yang benar setiap lakukan perubahan. !
                </div>
            </div>');
            redirect('User/update_view/'.$id);
        endif;
    }
    
    public function delete ($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        
        // hapus akun dosen

        redirect('User');
    }
    
}
?>