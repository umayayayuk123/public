<?php
class model_arus_kas extends ci_model{
    
    
    function tampil_data()
    {
        return $this->db->query("select * from arus_kas");
                
    
    }
    
    function post($data)
    {
        $this->db->insert('arus_kas',$data);
    }
    
    function get_one($id_kas)
    {
        $this->db->where('id_kas', $id_kas);
        return $this->db->get('arus_kas');
    }
    
    function edit($data,$id_kas)
    {
        $this->db->where('id_kas',$id_kas);
        $this->db->update('arus_kas',$data);
    }
    
    
    
    function delete($id_kas)
    {
        $this->db->where('id_kas',$id_kas);
        $this->db->delete('arus_kas');
    }
}