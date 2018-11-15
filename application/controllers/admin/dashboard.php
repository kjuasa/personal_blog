<?php 
class Dashboard extends CI_Controller{
    public function index(){
        //get posts
        $data['posts'] = $this->Post_model->get_posts();

        //get posts
        $data['categories'] = $this->Category_model->get_categories();

         //get posts
        $data['users'] = $this->User_model->get_users();


        $this->load->view('admin/templates/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
        
    }
    public function create(){
        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('body', 'Body', 'trim|required|xss_clean');
        $this->form_validation->set_rules('is_published', 'Publish', 'required');
        $this->form_validation->set_rules('category', 'category', 'required');

        //get posts
        $data['categories'] = $this->Category_model->get_categories();

         //get posts
        $data['users'] = $this->User_model->get_users();

        if($this->form_validation->run()===FALSE){

            $this->load->view('admin/templates/header');
            $this->load->view('admin/posts/create', $data);
            $this->load->view('admin/templates/footer');
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
          redirect('admin/index');
        }
        
    }
}