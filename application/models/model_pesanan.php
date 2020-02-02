<?php
class model_pesanan extends CI_Model{
    
    
    function tampil_data()
    {
        return $this->db->query("select * from pesanan");
                
    
    }
    
    function post($data)
    {
        $this->db->insert('pesanan',$data);
    }
    
    function get_one($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        return $this->db->get('pesanan');
    }
    
    function edit($data,$id_pesanan)
    {
        $this->db->where('id_pesanan',$id_pesanan);
        $this->db->update('pesanan',$data);
    }
    
    
    function delete($id_pesanan)
    {
        $this->db->where('id_pesanan',$id_pesanan);
        $this->db->delete('pesanan');
    }
}