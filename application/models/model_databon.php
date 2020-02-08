<?php
class model_databon extends ci_model{
    
    
    function tampil_data()
    {
        return $this->db->query("select *, (select jumlah - bayar) as sisa_pembayaran, 
                            case when jumlah > bayar then
                            'Belum Lunas'
                            else
                            'Lunas'
                            end as status_pembayaran, brg.nama_barang
                            from databon dt
                            join barang brg on brg.barang_id = dt.item_barang
        ");
                
    
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