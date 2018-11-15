<?php
class Comments extends CI_Controller{
  public function create($post_id){
    $slug = $this->input->post('slug');
    
    $data['post'] = $this->Post_model->get_posts($slug);
    $data['categories'] = $this->Category_model->get_categories();

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('subject', 'Subject', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');

    if ($this->form_validation->run()===FALSE) {
      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');
    }else {
      $this->Comment_model->create_comment($post_id);
      redirect('posts/'.$slug);
    }
  }
}