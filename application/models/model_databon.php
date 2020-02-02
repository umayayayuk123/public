<?php
class model_databon extends ci_model{
    
    
    function tampil_data()
    {
        return $this->db->query("select * from databon");
                
    
    }
    
    function post($data)
    {
        $this->db->insert('databon',$data);
    }
    
    function get_one($no_nota)
    {
        $this->db->where('no_nota', $no_nota);
        return $this->db->get('databon');
    }
    
    function edit($data,$no_nota)
    {
        $this->db->where('no_nota',$no_nota);
        $this->db->update('databon',$data);
    }
    
    
    
    function delete($no_nota)
    {
        $this->db->where('no_nota',$no_nota);
        $this->db->delete('databon');
    }
}