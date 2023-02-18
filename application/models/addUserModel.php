<?php
class addUserModel extends CI_Model
{
public function insertUser($fname,$email,$password)
{
    $data = array('fname'=>$fname , 'email'=>$email, 'password'=>$password);
$q = $this->db->insert('user',$data);
  /*  echo "<pre>";
    print_r($q->result());
    exit;
    */
    if($q)
    {
        return true;
        
    }
    else
    {
        return false;
    }
}    
    
public function addFile($data){
    $q = $this->db->insert('files',$data);
     if($q)
    {
        return true;
        
    }
    else
    {
        return false;
    }
}   
    public function del_user($id)
    {
            $q = $this->db->delete('user', array('user_id' => $id));
             if($q)
        {
            return true;

        }
        else
        {
            return false;
        }
    }
     public function edit_user($id)
    {
            $q = $this->db->where(['user_id' => $id])
                            ->select()
                            ->from('user')
                            ->get();
       /*  echo "<pre>";
    print_r($q);
    exit;*/
             if($q)
        {
            return $q->row();

        }
        else
        {
            return false;
        }
    }
     public function updateUser($id, $fname,$email)
    {/*echo "<pre>";
    print_r($id);
    exit;*/
           $data = array('fname'=>$fname , 'email'=>$email);
         return $this->db->where('user_id', $id)
                        ->replace('user', $data);
         
             if($q)
        {
            return true;

        }
        else
        {
            return false;
        }
    }
}

?>