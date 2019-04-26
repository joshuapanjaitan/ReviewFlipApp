<?php 

class cReview extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('review_m');
    }
   
    public function index(){
        $data['judul'] = 'Halaman Review';
        $this->load->view('templates/header',$data);
        $this->load->view('review/inputReview');
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $this->review_m->tambahReview();
        redirect('inputReview');
    }

    public function hapusReview($id){
        $this->review_m->hapusReview($id);
        redirect('inputReview');
    }
    public function edit(){
        $this->review_m->editReview();
        redirect('inputReview');
    }

}


?>