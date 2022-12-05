<?php 

class Admin extends CI_Controller {

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
            'title' => 'Dashboard',
            'deskripsi' => 'Hi, '.$this->session->userdata('username').'. ! Selamat Datang di Laboratorium Terpadu IAIN Bukittinggi',
            'ruangan' => $this->db->get('data_labor')->num_rows(),
            'dosen' => $this->db->get('dosen')->num_rows(),
            'pakai' => $this->db->where('status', 0)->get('pemakaian')->num_rows(),
            'alat' => $this->db->select_sum('jumlah')->get('alat')->result(),
            'total' => $this->db->get('pemakaian')->num_rows(),
            'dipakai' => $this->db->where('status', 0)->get('pemakaian')->num_rows(),
            'sebelum' => $this->db->where('status', 1)->get('pemakaian')->num_rows(),
            'sesudah' => $this->db->where('status', 2)->get('pemakaian')->num_rows(),
            'pemakaian' => $this->db->select('*')
                                    ->from('pemakaian')
                                    ->order_by('pemakaian.pemakaian_created', 'DESC')
                                    ->limit(4)
                                    ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                    ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                    ->get()->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('adminTemplate/footer');
    }
    
    
    
}
?>