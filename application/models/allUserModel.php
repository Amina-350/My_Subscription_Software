<?php
class allUserModel extends CI_Model
{
public function allUser()
{
    $q = $this->db->get('user');

       /* echo "<pre>";
    print_r($q->result_array());
    exit;*/
    return $q->result_array();
} 
    
public function allFiles(){
     $q = $this->db->get('files');

       /* echo "<pre>";
    print_r($q->result_array());
    exit;*/
    return $q->result_array();
}
}

?>