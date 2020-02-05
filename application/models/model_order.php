<?php
class model_order extends ci_model
{
    
    
    function simpan_barang()
    {
        $nama_barang_pesanan    =  $this->input->post('barang_pesanan');
        $qty            =  $this->input->post('qty');
        $barang_pesanan_id       = $this->db->get_where('barang_pesanan',array('nama_barang_pesanan'=>$nama_barang_pesanan))->row_array();
        $data           = array('barang_pesanan_id'=>$barang_pesanan_id['barang_pesanan_id'],
                                'qty'=>$qty,
                                'harga'=>$barang_pesanan_id['harga'],
                                'status'=>'0');
        $this->db->insert('detail_order',$data);
    }
    function detail_order_by_id($id)
    {
        return $this->db->query("
                                SELECT * from tb_order,detail_order
                                where 
                                tb_order.no_nota = detail_order.no_nota
                                and tb_order.no_nota = $id
        ");
    }
    function tampilkan_detail_order($status)
    {
        $query  ="SELECT td.t_detail_order_id,td.qty,td.harga,b.nama_barang_pesanan
                FROM detail_order as td,barang_pesanan as b
                WHERE b.barang_pesanan_id=td.barang_pesanan_id and td.status='$status'";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('t_detail_order_id',$id);
        $this->db->delete('detail_order');
    }
    
    
    function selesai_belanja($data)
    {
        $this->db->insert('tb_order',$data);
        $last_id=  $this->db->query("select no_nota from tb_order order by no_nota desc")->row_array();
        $this->db->query("update detail_order set no_nota='".$last_id['no_nota']."' where status='0'");
        $this->db->query("update detail_order set status='1' where status='0'");
    }
    
    
    function laporan_default()
    {
        $query="SELECT t.tanggal_order,o.nama_lengkap,sum(td.harga*td.qty) as total
                FROM tb_order as t,detail_order as td,operator as o
                WHERE td.no_nota=t.no_nota and o.operator_id=t.operator_id
                group by t.no_nota";
        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
        $query="SELECT t.tanggal_order,o.nama_lengkap,sum(td.harga*td.qty) as total
                FROM barang_pesanan as t,detail_order as td,operator as o
                WHERE td.no_nota=t.no_nota and o.operator_id=t.operator_id 
                and t.tanggal_order between '$tanggal1' and '$tanggal2'
                group by t.no_nota";
        return $this->db->query($query);
    }
    function hitung_order_by_id($id)
    {
        return $this->db->query("
                                select sum(detail_order.harga*detail_order.qty) as total
                                from detail_order
                                where detail_order.no_nota = $id
        ");
    }
    function get_order_by_nomor($nomor){
        return $this->db->query("select tbo.*, o.nama_lengkap as nama_operator, 
        (
            select sum(detail_order.harga*detail_order.qty) as total
            from detail_order
            where detail_order.no_nota = tbo.no_nota
        ) total,
        
        case when tbo.is_selesai = '1' then
        'Pesanan Selesai'
        else
        'Belum Selesai'
        end as status_pesanan
         from tb_order tbo
        join operator o on o.operator_id = tbo.operator_id
        where tbo.no_nota = '$nomor'");
    }
    function get_detail_order($nomor){
        return $this->db->query("
                            select * from detail_order do
                            join barang_pesanan bp on do.barang_pesanan_id = bp.barang_pesanan_id
                            where no_nota = $nomor");
    }
}