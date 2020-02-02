<?php
class model_identitas_bon extends ci_model{
    
    
    function tampil_data()
    {
        return $this->db->query("select * from identitas_bon");
                
    
    }
    
    function post($data)
    {
        $this->db->insert('identitas_bon',$data);
    }
    
    function get_one($ID_BON)
    {
        $this->db->where('ID_BON', $ID_BON);
        return $this->db->get('identitas_bon');
    }
    
    
    function edit($data,$ID_BON)
    {
        $this->db->where('ID_BON',$ID_BON);
        $this->db->update('identitas_bon',$data);
    }
    
    
    function delete($ID_BON)
    {
        $this->db->where('ID_BON',$ID_BON);
        $this->db->delete('identitas_bon');
    }
}