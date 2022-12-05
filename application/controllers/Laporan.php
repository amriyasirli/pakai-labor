<?php 

class Laporan extends CI_Controller {

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
            'title' => 'Laporan',
            'dosen' => $this->db->get('dosen')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/laporan/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function dosen ($id_dosen)
    {
        $data = [
            'id_dosen' => $id_dosen,
            'title' => 'Laporan',
            'dosen' => $this->db->get('dosen')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/laporan/dosen', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function printPDF()
	{
        $status = $this->input->post('status');
        $start = substr($this->input->post('daterange'),0,10).' 00:00:00';
        $end = substr($this->input->post('daterange'),12).' 23:59:59';
        // var_dump($end);
        // die();
        $mpdf = new \Mpdf\Mpdf();

        if($status == 'all'):
            $data = [
                'title' => 'Pemakaian',
                'pemakaian' =>  $this->db->select('*')
                                ->from('pemakaian')
                                ->where('pemakaian.pemakaian_created >=', $start )
                                ->where('pemakaian.pemakaian_created <=', $end )
                                ->order_by('pemakaian.pemakaian_created', 'DESC')
                                ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                ->get()->result(),
            ];
        else:
            $data = [
                'title' => 'Pemakaian',
                'pemakaian' =>  $this->db->select('*')
                                ->from('pemakaian')
                                ->where('pemakaian.pemakaian_created >=', $start )
                                ->where('pemakaian.pemakaian_created <=', $end )
                                ->where('pemakaian.status', $status )
                                ->order_by('pemakaian.pemakaian_created', 'DESC')
                                ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                ->get()->result(),
            ];
        endif;
        
		
		$html = $this->load->view('hasilPrint', $data, TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        // $mpdf->Output('Laporan'.$status.'-'.date('m-d-Y').'.pdf');
        // redirect('Laporan');
	}

    public function printPDF_dosen($id_dosen)
	{
        $status = $this->input->post('status');
        $start = substr($this->input->post('daterange'),0,10).' 00:00:00';
        $end = substr($this->input->post('daterange'),12).' 23:59:59';
        
        $mpdf = new \Mpdf\Mpdf();

        if($status == 'all'):
            $data = [
                'title' => 'Pemakaian',
                'pemakaian' =>  $this->db->select('*')
                                ->from('pemakaian')
                                ->where('pemakaian.pemakaian_created >=', $start )
                                ->where('pemakaian.pemakaian_created <=', $end )
                                ->where('pemakaian.id_dosen', $id_dosen )
                                ->order_by('pemakaian.pemakaian_created', 'DESC')
                                ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                ->get()->result(),
            ];
        else:
            $data = [
                'title' => 'Pemakaian',
                'pemakaian' =>  $this->db->select('*')
                                ->from('pemakaian')
                                ->where('pemakaian.pemakaian_created >=', $start )
                                ->where('pemakaian.pemakaian_created <=', $end )
                                ->where('pemakaian.status', $status )
                                ->where('pemakaian.id_dosen', $id_dosen )
                                ->order_by('pemakaian.pemakaian_created', 'DESC')
                                ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                                ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                                ->get()->result(),
            ];
        endif;
        
		
		$html = $this->load->view('hasilPrint', $data, TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        // $mpdf->Output('Laporan-'.$status.'-'.$id_dosen.'.pdf');
        // redirect('Laporan/dosen/'.$id_dosen);
        
	}
    
}
?>