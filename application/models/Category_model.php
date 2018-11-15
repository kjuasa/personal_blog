<?php
/**
 * Category Model
 */
class Category_model extends CI_Model{

  public function get_categories(){
    $this->db->order_by('id');
    $query = $this->db->get('categories');
    return $query->result_array();
  }

  public function create_category(){
    $data = array(
     'category_name' => $this->input->post('name')
   );
   return $this->db->insert('categories', $data);
   redirect('categories');
  }

  public function get_category($id){
    $query = $this->db->get_where('categories', array('id'=>$id));
    return $query->row();

  }
}
