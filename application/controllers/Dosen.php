<?php 

class Dosen extends CI_Controller {

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
            'title' => 'Dosen',
            'dosen' => $this->db->get('dosen')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/dosen/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function dashboard ()
    {
        $id_dosen = $this->session->userdata('id_user');
        $data = [
            'title' => 'Dashboard',
            'deskripsi' => 'Hi, '.$this->session->userdata('username').'. ! Selamat Datang di Laboratorium Terpadu IAIN Bukittinggi',
            'ruangan' => $this->db->get('data_labor')->num_rows(),
            'dosen' => $this->db->get('dosen')->num_rows(),
            'pakai' => $this->db->where('status', 0)->get('pemakaian')->num_rows(),
            'alat' => $this->db->select_sum('jumlah')->get('alat')->result(),
            'total' => $this->db->where('id_dosen', $id_dosen)->get('pemakaian')->num_rows(),
            'dipakai' => $this->db->where('id_dosen', $id_dosen)->where('status', 0)->get('pemakaian')->num_rows(),
            'sebelum' => $this->db->where('id_dosen', $id_dosen)->where('status', 1)->get('pemakaian')->num_rows(),
            'sesudah' => $this->db->where('id_dosen', $id_dosen)->where('status', 2)->get('pemakaian')->num_rows(),
            'pemakaian' => $this->db->select('*')
                                    ->from('pemakaian')
                                    ->order_by('pemakaian.pemakaian_created', 'DESC')
                                    ->where('pemakaian.id_dosen', $id_dosen)
                                    ->limit(4)
                                    ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                    ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                    ->get()->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/dosen/dashboard', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add ()
    {
        $data = [
            'title' => 'Dosen',
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/dosen/add', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add_action ()
    {
        $id = rand(10, 100);
        $data = [
            'id_dosen' => $id,
            'nama_dosen' => $this->input->post('nama_dosen'),
            'nidn' => $this->input->post('nidn'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'hp' => $this->input->post('hp'),
        ];

        $auth = [
            'id_user' => $id,
            'nama' => $this->input->post('nama_dosen'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => 2,
        ];

        $this->db->insert('dosen', $data);
        $this->db->insert('user', $auth);
        redirect('Dosen');
    }

    public function update_view ($id)
    {
        $data = [
            'title' => 'Dosen',
            'dosen' => $this->db->where('id_dosen', $id)->get('dosen')->row(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/dosen/update_view', $data);
        $this->load->view('adminTemplate/footer');
    }
    
    public function update ($id)
    {
        $data = [
            'nama_dosen' => $this->input->post('nama_dosen'),
            'nidn' => $this->input->post('nidn'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'hp' => $this->input->post('hp'),
        ];

        $auth = [
            'nama' => $this->input->post('nama_dosen'),
        ];

        $this->db->where('id_dosen', $id);
        $this->db->update('dosen', $data);
        $this->db->where('id_user', $id);
        $this->db->update('user', $auth);
        redirect('Dosen');
    }
    
    
    public function delete ($id)
    {
        $this->db->where('id_dosen', $id);
        $this->db->delete('dosen');
        
        // hapus akun dosen
        $this->db->where('id_user', $id);
        $this->db->delete('user');

        redirect('Dosen');
    }
    
}
?>