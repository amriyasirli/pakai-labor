<?php 

class Labor extends CI_Controller {

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
            'title' => 'Labor',
            'labor' => $this->db->get('data_labor')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/labor/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add ()
    {
        $data = [
            'title' => 'Labor',
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/labor/add', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add_action ()
    {
        $id_alat = rand(100, 500);
        $count = count($this->input->post('nama_alat'));
        $nama_alat = $this->input->post('nama_alat');
        $jumlah = $this->input->post('jumlah');

        // Data labor
        $labor = [
            'ruangan' => $this->input->post('ruangan'),
            'id_alat' => $id_alat,
        ];
        $this->db->insert('data_labor', $labor);

        // Data Alat
        for ($i=0; $i < $count; $i++) :
            $alat = [
                'id_labor' => $id_alat,
                'nama_alat' => $nama_alat[$i],
                'jumlah' => $jumlah[$i],
            ];
            $this->db->insert('alat', $alat);
        endfor;
        
        redirect('Labor');

        
    }

    public function update_view ($id)
    {
        $data = [
            'title' => 'Labor',
            'labor' => $this->db->where('id_labor', $id)->get('data_labor')->row(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/labor/update_view', $data);
        $this->load->view('adminTemplate/footer');
    }
    
    public function update ($id)
    {
        $labor = $this->db->get_where('data_labor', ['id_labor' => $id])->row();
        $alat = $this->db->get_where('alat', ['id_labor' => $labor->id_alat])->result();
        foreach($alat as $row) { 
            $this->db->delete('alat', ['id_alat' => $row->id_alat]);
        }     

        $this->db->where('id_labor', $id);
        $this->db->delete('data_labor');
        
        $id_alat = rand(100, 500);
        $count = count($this->input->post('nama_alat'));
        $nama_alat = $this->input->post('nama_alat');
        $jumlah = $this->input->post('jumlah');

        // Data labor
        $labor = [
            'ruangan' => $this->input->post('ruangan'),
            'id_alat' => $id_alat,
        ];
        $this->db->insert('data_labor', $labor);

        // Data Alat
        for ($i=0; $i < $count; $i++) :
            $alat = [
                'id_labor' => $id_alat,
                'nama_alat' => $nama_alat[$i],
                'jumlah' => $jumlah[$i],
            ];
            $this->db->insert('alat', $alat);
        endfor;
        redirect('Labor');
    }
    
    
    public function delete ($id)
    {
        
        $labor = $this->db->get_where('data_labor', ['id_labor' => $id])->row();
        $alat = $this->db->get_where('alat', ['id_labor' => $labor->id_alat])->result();
        foreach($alat as $row) { 
            $this->db->delete('alat', ['id_alat' => $row->id_alat]);
        }     

        $this->db->where('id_labor', $id);
        $this->db->delete('data_labor');
        

        redirect('Labor');
    }
    
}
?>