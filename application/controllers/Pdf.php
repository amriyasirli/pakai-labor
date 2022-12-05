<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	public function index()
	{
		$data = $this->load->view('pdf_v');
	}

	public function printPDF()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = [
            'title' => 'Pemakaian',
            'pemakaian' =>  $this->db->select('*')
                            ->from('pemakaian')
                            ->order_by('pemakaian.pemakaian_created', 'DESC')
                            ->join('data_labor', 'data_labor.id_labor = pemakaian.id_labor')
                            ->join('dosen', 'dosen.id_dosen = pemakaian.id_dosen')
                            ->get()->result(),
        ];
		$html = $this->load->view('hasilPrint', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

}