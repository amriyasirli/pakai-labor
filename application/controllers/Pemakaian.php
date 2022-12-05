<?php 

class Pemakaian extends CI_Controller {

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
        $id_dosen = $this->session->userdata('id_user');
        $data = [
            'title' => 'Pemakaian',
            'pemakaian' =>  $this->db->select('*')
                            ->from('pemakaian')
                            ->order_by('pemakaian.pemakaian_created', 'DESC')
                            ->where('pemakaian.id_dosen', $id_dosen)
                            ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                            ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                            ->get()->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('dosen/pemakaian/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function data ()
    {  
        $data = [
            'title' => 'Pemakaian',
            'pemakaian' =>  $this->db->select('*')
                            ->from('pemakaian')
                            ->order_by('pemakaian.pemakaian_created', 'DESC')
                            ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                            ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                            ->get()->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/pemakaian/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add ()
    {
        $data = [
            'title' => 'Pemakaian',
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('dosen/pemakaian/add', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add_action ()
    {
        $id_dosen = $this->session->userdata('id_user');
        $waktu = $this->input->post('waktu[0]') .' - '.$this->input->post('waktu[1]');
        // print_r($waktu);
        // die();
        $data = [
            'id_labor' => $this->input->post('id_labor'),
            'id_dosen' => $id_dosen,
            'waktu' => $waktu,
            'keterangan' => $this->input->post('keterangan'),
            'status' => 0,
        ];

        // update status penggunaan labor
        $labor = [
            'status_labor' => 1, //labor sedang digunakan
        ];
        $this->db->where('id_labor', $this->input->post('id_labor'));
        $this->db->update('data_labor', $labor);

        $this->db->insert('pemakaian', $data);
        redirect('Pemakaian');
    }

    public function selesai ($id, $id_labor)
    {
        // var_dump($id);
        // die();
        $id_dosen = $this->session->userdata('id_user');
        $data = [
            'id_labor' => $id_labor,
            'id_dosen' => $id_dosen,
            'keterangan' => $this->input->post('keterangan'),
            'status' => 2,
            'btn' => 1,
        ];
        $this->db->insert('pemakaian', $data);

        $update = [
            'status' => 1,
            'btn' => 1,
        ];
        $this->db->where('id', $id);
        $this->db->update('pemakaian', $update);

        // update status penggunaan labor
        $labor = [
            'status_labor' => 0, //labor sedang free
        ];
        $this->db->where('id_labor', $id_labor);
        $this->db->update('data_labor', $labor);

        
        redirect('Pemakaian');
    }

    public function update_view ($id)
    {
        $data = [
            'title' => 'Pemakaian',
            'pemakaian' => $this->db->where('id', $id)->get('pemakaian')->row(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('dosen/pemakaian/update_view', $data);
        $this->load->view('adminTemplate/footer');
    }
    
    public function update ($id)
    {
        $id_dosen = $this->session->userdata('id_user');
        $waktu = $this->input->post('waktu_start').' - '.$this->input->post('waktu_end');
        $data = [
            'id_labor' => $this->input->post('id_labor'),
            'waktu' => $waktu,
            'keterangan' => $this->input->post('keterangan'),
        ];


        $this->db->where('id', $id);
        $this->db->update('pemakaian', $data);
        redirect('Pemakaian');
    }
    
    
    public function delete ($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pemakaian');
        

        redirect('Pemakaian');
    }

    
}
?>