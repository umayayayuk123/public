<?php
class model_barang_pesanan extends ci_model{
    
    
    function tampil_data()
    {
        $query= "SELECT b.barang_pesanan_id, b.nama_barang_pesanan, b.harga, kb.nama_kategori_barpes
                FROM barang_pesanan as b,kategori_barang_pesanan as kb
                WHERE b.kategori_barpes_id = kb.kategori_barpes_id";
       
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('barang_pesanan',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('barang_pesanan_id'=>$id);
        return $this->db->get_where('barang_pesanan',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('barang_pesanan_id',$id);
        $this->db->update('barang_pesanan',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('barang_pesanan_id',$id);
        $this->db->delete('barang_pesanan');
    }
}