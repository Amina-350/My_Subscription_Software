<?php
class loginmodel extends CI_Model
{
public function isvalidate($username, $password)
{
  $q = $this->db->where(['username'=>$username, 'password'=>$password])
                ->get('admin');
  /*  echo "<pre>";
    print_r($q->result());
    exit;
    */
    if($q->num_rows())
    {
        return $q->row()->admin_id;
        
    }
    else
    {
        return false;
    }
}    
public function isvaliduser($email, $password)
{
  $q = $this->db->where(['email'=>$email, 'password'=>$password])
                ->get('user');
  /*  echo "<pre>";
    print_r($q->result());
    exit;
    */
    if($q->num_rows())
    {
        return $q->row()->user_id;
        
    }
    else
    {
        return false;
    }
}    
}

?>