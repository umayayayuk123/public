<?php
class model_data_job_karyawan extends ci_model{
    
    
    function tampil_data()
    {
        $query= "SELECT b.job_karyawan_id,b.nama_karyawan_job,b.harga,kb.nama_kategori_job
                FROM data_job_karyawan as b,data_kategori_job as kb
                WHERE b.kategori_job_id=kb.kategori_job_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('data_job_karyawan',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('job_karyawan_id'=>$id);
        return $this->db->get_where('data_job_karyawan',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('job_karyawan_id',$id);
        $this->db->update('data_job_karyawan',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('job_karyawan_id',$id);
        $this->db->delete('data_job_karyawan');
    }
}