<?php 

class inputReview extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('review_m');
    }

    public function index(){
        $data['judul'] = 'Halaman Review';
        $data["count"] = $this->review_m->countReview();
        $data['review'] = $this->review_m->getAllReview();
        $data['rate'] = [1,2,3,4,5];
        $this->load->view('templates/header',$data);
        $this->load->view('review/index1',$data);
        $this->load->view('templates/footer');
    }
    
    

}


?>