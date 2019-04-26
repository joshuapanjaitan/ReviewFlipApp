<?php 

class review_m extends CI_model{
    public function getAllReview(){
        return $this->db->get('komentar')->result_array();
    }
    public function countReview(){
        $query = $this->db->query('SELECT * FROM komentar');
        return $query->num_rows();
    }

    public function tambahReview(){
        $data = [
            "id"=>'',
            "reviews"=> $this->input->post('komen',true),
            "rate"=>$this->input->post('rating')
        ];
        $this->db->insert('komentar',$data);
    }
    public function hapusReview($id){
        $this->db->where('id',$id);
        $this->db->delete('komentar');

    }
    public function editReview(){
        $id = $this->input->post('id_edit');
        $rv = $this->input->post('e_komen');
        $rate = $this->input->post('e_rating');

        $data = [
                'reviews' => $rv,
                'rate'=>$rate
            ];
        $this->db->where('id', $id);
        $this->db->update('komentar', $data);
    }
}