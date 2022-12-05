<?php 

class Gallery extends CI_Controller {

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
            'title' => 'Gallery Sekolah',
            'gallery' => $this->db->get('gallery')->result(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/gallery/index', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add ()
    {
        $data = [
            'title' => 'Gallery Sekolah',
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/gallery/add', $data);
        $this->load->view('adminTemplate/footer');
    }

    public function add_action ()
    {
        // Check form submit or not
    if($this->input->post('upload') != NULL ){
 
        $data = array();
  
        // Count total files
        $countfiles = count($_FILES['files']['name']);
   
        // Looping all files
        for($i=0;$i<$countfiles;$i++){
   
          if(!empty($_FILES['files']['name'][$i])){
   
            // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
            // Set preference
            $config['upload_path'] = './assets/img/sekolah/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['encrypt_name'] = TRUE;
   
            //Load upload library
            $this->load->library('upload',$config); 
   
            // File upload
            if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
    
                // var_dump($filename);
                // Initialize array
                // $data['filenames'][] = $filename;

                $data = [
                    'foto' => $filename,
                ];
        
                $this->db->insert('gallery', $data);
            }
          }
   
        }
   
        redirect('Gallery');
      }else{
  
        redirect('Gallery');
      } 
  
            
        
    }

    public function update_view ($id)
    {
        $data = [
            'title' => 'Gallery Sekolah',
            'gallery' => $this->db->where('id', $id)->get('gallery')->row(),
        ];
        $this->load->view('adminTemplate/header', $data);
        $this->load->view('adminTemplate/topbar');
        $this->load->view('adminTemplate/sidebar');
        $this->load->view('admin/gallery/update_view', $data);
        $this->load->view('adminTemplate/footer');
    }
    
    public function update ($id)
    {
        //pengaturan upload foto
        $config['encrypt_name']        = TRUE;
        $config['allowed_types'] = 'svg|jpg|png|jpeg';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/sekolah/';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            @unlink('./assets/img/sekolah/'.$this->input->post('fotolama'));
            $foto = $this->upload->data('file_name');   
            $data = [
                'foto' => $foto,
            ];
    
            $this->db->where('id', $id);
            $this->db->update('gallery', $data);
            redirect('Gallery');
        }else{
            
            redirect('Gallery');
        } 

        
    }
    
    
    public function delete ($id)
    {
        $foto = $this->db->where('id', $id)->get('gallery')->row();
        @unlink('./assets/img/sekolah/'.$foto->foto);
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        redirect('Gallery');
    }

    
}
?>