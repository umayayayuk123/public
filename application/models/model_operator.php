<?php
class model_operator extends CI_Model{
    
    
    
    function login($username,$password)
    {
        return $this->db->get_where('operator',array('username'=>$username,'password'=>md5($password)));
         
    }
    
    
    function tampildata()
    {
        return $this->db->get('operator');
    }
    
    function get_one($id)
    {
        $param  =   array('operator_id'=>$id);
        return $this->db->get_where('operator',$param);
    }
}
