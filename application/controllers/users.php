<?php
class users extends MY_controller
{
   public function index()
   {
    $this->load->helper('form');
    $this->load->view('Users/userLogin');
   }
public function logout(){
    $this->session->unset_userdata('user_id');
     return redirect('users/index');
} 
  public function login()
   {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("email", "email", "required|valid_email");
    $this->form_validation->set_rules("password", "Password", "required|max_length[12]");
    if ($this->form_validation->run())
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('loginmodel');
        $login_id = ($this->loginmodel->isvaliduser($email,$password));
        if($login_id)
        {
           $this->load->library('session');
           $this->session->set_userdata('user_id',  $login_id);
           return redirect('users/welcome');
            
        }   
        else
        {   $this->session->set_flashdata('login_error' , 'Invalid Username/Password');
            return redirect('users/index');}
      
   }
        else {  $this->session->set_flashdata('error' , 'please use valid details'); 
            return redirect('users/index'); }
}
 public function welcome(){
     if(!$this->session->userdata('user_id')){
         return redirect('users/index');
     }
     $this->load->model('allUserModel');
      $page_data['files'] =  $this->allUserModel->allFiles();
      $this->load->view('Users/dashboard', $page_data); 
     
 }
public function download_file(){
    if(!$this->session->userdata('user_id')){
         return redirect('users/index');}
     $file_name = $this->db->get_where('files')->row()->file_name;
        $this->load->helper('download');
        $data = file_get_contents("uploads/" . $file_name);
        $name = $file_name;

        force_download($name, $data);
}
    
}

?>