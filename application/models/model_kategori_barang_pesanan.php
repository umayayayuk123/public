<?php
class Model_kategori_barang_pesanan extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('kategori_barang_pesanan');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from kategori_barang_pesanan");
  }
    
    function post(){
        $data=array(
           'nama_kategori_barpes'=>  $this->input->post('kategori_barang_pesanan')
                    );
        $this->db->insert('kategori_barang_pesanan',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama_kategori_barpes'=>  $this->input->post('kategori_barang_pesanan')
                    );
        $this->db->where('kategori_barpes_id',$this->input->post('kategori_barpes_id'));
        $this->db->update('kategori_barang_pesanan',$data);
    }
    
    function get_one($kategori_barpes_id)
    {
        $param  =   array('kategori_barpes_id'=>$kategori_barpes_id);
        return $this->db->get_where('kategori_barang_pesanan',$param);
    }
    
    
    function delete($kategori_barpes_id)
    {
        $this->db->where('kategori_barpes_id',$kategori_barpes_id);
        $this->db->delete('kategori_barang_pesanan');
    }
}