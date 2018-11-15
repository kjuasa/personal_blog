<?php
class Post_model extends CI_Model{
    public function get_posts($slug = FALSE){
        if ($slug === FALSE) {
            $this->db->order_by('posts.id', 'DESC');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get('posts');
            return $query->result_array();

        }

        //$this->db->join('users', 'users.id = posts.user_id');
        $query = $this->db->get_where('posts', array('slug'=> $slug));
        return $query->row_array();
    }
    //create new post
    public function create_post($post_image){
        $slug = url_title($this->input->post('title'));
        $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'body' => $this->input->post('body'),
        'user_id' => $this->session->userdata('user_id'),
        'category_id' => $this->input->post('category_id'),
        'post_image' => $post_image
      );
      return $this->db->insert('posts', $data);
    }
    //delete posts
    public function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
      }
  
      public function update_post(){
  
        $slug = url_title($this->input->post('title'));
        $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'body' => $this->input->post('body'),
        'category_id' => $this->input->post('category_id')
      );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
    }
    public function get_posts_by_category($category_id){
      $this->db->order_by('posts.id', 'DESC');
      $this->db->join('categories', 'categories.id = posts.category_id');
      //$this->db->join('users', 'users.id = posts.user_id');
      $query = $this->db->get_where('posts', array('category_id'=> $category_id));
      return $query->result_array();
    }
}