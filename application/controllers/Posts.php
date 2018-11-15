<?php
class Posts extends CI_Controller{
    public function index(){

        
        $data['posts'] = $this->Post_model->get_posts();
        $data['categories'] = $this->Category_model->get_categories();


        $this->load->view('templates/header');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL){
      
        $data['categories'] = $this->Category_model->get_categories();
        $data['post'] = $this->Post_model->get_posts($slug);
        

        //Get and display comment in the comments Section
        $post_id = $data['post']['id'];
        $data['comments'] = $this->Comment_model->get_comments($post_id);
        
        if (empty($data['post'])) {
          show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
    public function create(){

      if(!$this->session->userdata('logged_in')){
        redirect('users/login');
      }

        $data['categories'] = $this->Category_model->get_categories();
        $data['title'] = 'Create New Post';
  
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
  
        if ($this->form_validation->run()===FALSE) {
  
          $this->load->view('templates/header');
          $this->load->view('posts/create', $data);
          $this->load->view('templates/footer');
        }else{
  
          // uploading file (image)
          $config['upload_path'] = './assets/img/posts';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '9000000';
          $config['max_width'] = '9000000000000';
          $config['max_height'] = '900000000000';
  
          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload()) {
            //echo $this->upload->display_errors();die();
            $errors = array('error'=> $this->upload->display_errors('userfile'));
            $post_image = 'noimage.jpg';
          }else {
            $data = array('upload_data'=>$this->upload->data());
              $post_image = $_FILES['userfile']['name'];
          }
  
          $this->Post_model->create_post($post_image);
          //set flash message
          $this->session->set_flashdata('post_created', 'Your post has been created');
          redirect('home');
        }
    }
      //delete post
      public function delete($id){
        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }

        $this->Post_model->delete_post($id);
        redirect('home');
      }
  
      //edit post
      public function edit($slug){

        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }
  
        $data['post'] = $this->Post_model->get_posts($slug);
        $data['categories'] = $this->Category_model->get_categories();
        if (empty($data['post'])) {
          show_404();
        }
  
        $data['title'] = 'Edit Post';
  
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
      }
      public function update(){

        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }
  
        $this->Post_model->update_post();
        $this->session->set_flashdata('post_updated', 'Your post has been updated');
        redirect('home');
      }
      
}