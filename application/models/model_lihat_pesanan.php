<?php
class model_lihat_pesanan extends ci_model{
    
    
    function tampil_data()
    {
        $query= "SELECT * FROM pesanan
                WHERE id_order=no_pesanan";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('pesanan',$data);
    }
    
    function get_one($id_order)
    {
        $this->db->where('id_order', $id_order);
        return $this->db->get('pesanan');
    }
    
    function edit($data,$id_order)
    {
        $this->db->where('id_order',$id_order);
        $this->db->update('pesanan',$data);
    }
    
    
    function delete($id_order)
    {
        $this->db->where('id_order',$id_order);
        $this->db->delete('pesanan');
    }
}