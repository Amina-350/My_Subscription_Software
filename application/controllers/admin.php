<?php

class admin extends MY_controller
    
{
public function index(){
    $this->load->view('admin/login');
}
public function logout(){
    $this->session->unset_userdata('admin_id');
     return redirect('admin/login');
}    
    
    public function login()
   {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("username", "UserName", "required|alpha");
    $this->form_validation->set_rules("password", "Password", "required|max_length[12]");
    if ($this->form_validation->run())
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('loginmodel');
        $login_id = ($this->loginmodel->isvalidate($username,$password));
        if($login_id)
        {
           $this->load->library('session');
           $this->session->set_userdata('admin_id',  $login_id);
           return redirect('admin/welcome');
            
        }   
        else
        {   $this->session->set_flashdata('login_error' , 'Invalid Username/Password');
            $this->load->view('admin/login');}
      
   }
        else { /*$this->session->set_flashdata('error' , 'please use valid details');*/
              $this->load->view('admin/login'); }
}
public function welcome()
    {
        $this->load->view('Admin/dashboard');
    } 
    
public function add_user()
    {   
    
    $this->load->library("form_validation");
      
        $this->form_validation->set_rules("fname", "Name", "required|alpha");
        $this->form_validation->set_rules("email", "email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", "required|max_length[12]");
        if ($this->form_validation->run())
        {
            $fname = $this->input->post('fname');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
          /*  $sub = $this->input->post('sub');*/
            $this->load->model('addUserModel');
            $data = ($this->addUserModel->insertUser($fname,$email,$password));
            if($data)
            {
             $this->session->set_flashdata('user_added' , 'user added successfully');
             $this->load->view('Admin/add_user');

            }   
            else
            {  echo "data not added";}

       }
        else{
           /* $this->session->set_flashdata('user_error' , 'Please fill all fields and new email');*/
            $this->load->view('Admin/add_user'); 
        }
    }
    
    public function all_user()
    {
      $this->load->model('allUserModel');
      $page_data['users'] =  $this->allUserModel->allUser();
      $this->load->view('Admin/all_user', $page_data); 
    }
    
     public function add_file()
    {   $this->load->view('Admin/add_file'); }
    
    public function upload_file(){
        $files = $_FILES['add_file'];
        $this->load->library('upload');
        $config['upload_path']   =  'uploads/';
        $config['allowed_types'] =  '*';         
        $_FILES['add_file']['name']     = $files['name'];
        $_FILES['add_file']['type']     = $files['type'];
        $_FILES['add_file']['tmp_name'] = $files['tmp_name'];
        $_FILES['add_file']['size']     = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('add_file');
        $data['file_name'] = $_FILES['add_file']['name'];
        $this->load->model('addUserModel');
       $query =   $this->addUserModel->addFile($data);
        if($query){
        $this->session->set_flashdata('flash_message' , 'File uploaded');
       return redirect('admin/add_file');
        }
         else{
                     $this->session->set_flashdata('error_message' , 'files not uploaded');

             return redirect('admin/add_file');
         }
    }
     public function deluser()
     {     
        if(!empty($_GET['id']))
        {
            $id = $_GET['id'];
            $this->load->model('addUserModel');
            $query =   $this->addUserModel->del_user($id);
            if($query)
            {
                $this->session->set_flashdata('flash_message' , 'User Deleted');
                return redirect('admin/all_user');
            }
             else
             {
               $this->session->set_flashdata('error_message' , 'User not Deleted');
               return redirect('admin/all_user');
             }
        }  
     }
    
    public function edit_user()
    {
        if(!empty($_GET['id']))
        {
            $id = $_GET['id'];
            $this->load->model('addUserModel');
            $query['user'] =   $this->addUserModel->edit_user($id);
          /* echo "<pre>";
            print_r( $query['user']);*/
            if($query)
            {
               $this->load->view('Admin/editUser', $query);
            }
             else
             {
               return redirect('admin/all_user');
             }
        }
    }
    public function update_user()
    {/* $id = $_GET['id'];*/
        $id = $this->input->post('id'); 
    /* echo $id;
     exit;*/
        /*   $this->load->library("form_validation");
      
        $this->form_validation->set_rules("fname", "Name", "required|alpha");
        $this->form_validation->set_rules("email", "email", "required|valid_email");
        if ($this->form_validation->run())
        {*/
            $fname = $this->input->post('fname');
            $email = $this->input->post('email');
          /*  echo $id;
             echo $fname;
             echo $email;
     exit;*/
          /*  $sub = $this->input->post('sub');*/
            $this->load->model('addUserModel');
            $data = ($this->addUserModel->updateUser($id, $fname,$email));
            if($data)
            {
             $this->session->set_flashdata('user_update' , 'user updated successfully');
          /*   $this->load->view('Admin/all_user');*/
            return redirect('admin/all_user');

            }   
            else
            {  echo "data not added";}

    /*   }
        else{
            $this->session->set_flashdata('user_error' , 'Email already exists');
              return redirect('admin/all_user');
        }*/
         }
        
    
}
?>