<?php
class model_transaksi_aruskas extends ci_model
{
    
    
    function simpan_barang()
    {
        $nama_karyawan_job    =  $this->input->post('data_job_karyawan');
        $qty            =  $this->input->post('qty');
        $job_karyawan_id       = $this->db->get_where('data_job_karyawan',array('nama_karyawan_job'=>$nama_karyawan_job))->row_array();
        $data           = array('job_karyawan_id'=>$job_karyawan_id['job_karyawan_id'],
                                'qty'=>$qty,
                                'harga'=>$idbarang['harga'],
                                'status'=>'0');
        $this->db->insert('transaksi_detail',$data);
    }
    function detail_transaksi_by_id($id)
    {
        return $this->db->query("
                                SELECT * from transaksi_aruskas,detail_aruskas
                                where 
                                transaksi_aruskas.aruskas_id = detail_aruskas.aruskas_id
                                and transaksi_aruskas.aruskas_id = $id
        ");
    }
    function tampilkan_detail_transaksi($status)
    {
        $query  ="SELECT td.t_aruskas_id,td.qty,td.harga,b.nama_karyawan_job
                FROM detail_aruskas as td,data_job_karyawan as b
                WHERE b.barang_id=td.job_karyawan_id and td.status='$status'";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('t',$id);
        $this->db->delete('detail_aruskas');
    }
    
    
    function selesai_belanja($data)
    {
        $this->db->insert('data_job_karyawan',$data);
        $last_id=  $this->db->query("select aruskas_id from transaksi_aruskas order by aruskas_id desc")->row_array();
        $this->db->query("update detail_aruskas set aruskas_id='".$last_id['aruskas_id']."' where status='0'");
        $this->db->query("update detail_aruskas set status='1' where status='0'");
    }
    
    
    function laporan_default()
    {
        $query="SELECT t.tanggal_kas,o.nama_customer,sum(td.harga*td.qty) as total
                FROM transaksi_aruskas as t,detail_aruskas as td,operator as o
                WHERE td.aruskas_id=t.aruskas_id and o.operator_id=t.operator_id
                group by t.aruskas_id";
        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
        $query="SELECT t.tanggal_kas,o.nama_customer,sum(td.harga*td.qty) as total
                FROM transaksi_aruskas as t,detail_aruskas as td,operator as o
                WHERE td.aruskas_id=t.aruskas_id and o.operator_id=t.operator_id 
                and t.tanggal_kas between '$tanggal1' and '$tanggal2'
                group by t.aruskas_id";
        return $this->db->query($query);
    }
    function hitung_transaksi_by_id($id)
    {
        return $this->db->query("
                                select sum(detail_aruskas.harga*detail_aruskas.qty) as total
                                from detail_aruskas
                                where detail_aruskas.aruskas_id = $id
        ");
    }
}