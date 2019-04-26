<?php 

class comment extends CI_Controller{

    public function index(){
        $data['judul'] = 'Halaman Review';
        $this->load->view('templates/header',$data);
        $this->load->view('review/comment');
        $this->load->view('templates/footer');
    }

   

}


?>