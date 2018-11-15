<?php 
class User_model extends CI_Model{

    public function get_users(){
        $this->db->order_by('id');
        $query = $this->db->get('users');
        return $query->result_array();
    }
    public function register($enc_password, $post_image){
        $data = array(
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'zipcode'=> $this->input->post('zipcode'),
            'username'=> $this->input->post('username'),
            'password'=> $enc_password,
            'profile_image' => $post_image
        );
        return $this->db->insert('users', $data);
    }
   

    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows()==1){
            return $result ->row(0)->id;
        }else{
            return FALSE;
        }
    }
    

    public function check_username_exists($username){
        $query = $this->db->get_where('users', array('username'=>$username));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

}