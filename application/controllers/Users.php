<?php 
class Users extends CI_Controller{
    public function register(){
        $data['title'] = 'Sign Up';
        $data['categories'] = $this->Category_model->get_categories();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{

             // uploading file (image)
          $config['upload_path'] = './assets/img/users';
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


            $enc_password = md5($this->input->post('password'));

            $this->User_model->register($enc_password, $post_image);

            $this->session->set_flashdata('user_registered', 'You are now registered');

            redirect('home');
        }
    }

    public function login(){
        $data['title'] = 'Sign in';
        $data['categories'] = $this->Category_model->get_categories();
        $data['user'] = $this->User_model->get_users();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        }else{

            $username = $this->input->post('username');

            $password = md5($this->input->post('password'));

            $post_image = $this->User_model->get_users();

            $user_id = $this->User_model->login($username, $password);

            if($user_id){
                $user_data = array(
                    'user_id'       => $user_id, 
                    'username'      => $username, 
                    'logged_in'     => true
                );

                $this->session->set_userdata($user_data);
                //flashdata message
                $this->session->set_flashdata('user_login_success', 'You are now logged in');
                redirect('home');

            }else{

                $this->session->set_flashdata('user_login_fail', 'Login fail. Please enter correct username or password.');
                redirect('users/login');

            }
        }
    }

    public function logout(){
        //unset userdata
        $this->session->unset_userdata('logged_in'); 
        $this->session->unset_userdata('user_id'); 
        $this->session->unset_userdata('username'); 

        $this->session->set_flashdata('user_login_out', 'You are now logged out');
        redirect('users/login');
    }


    //Check if username exist
    function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one.');
        if($this->User_model->check_username_exists($username)){
            return true;
        }else{
            return false;
        }
    }

    
}