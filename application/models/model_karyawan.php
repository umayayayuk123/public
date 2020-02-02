<?php
class model_karyawan extends ci_model{
    
    
    function tampil_data()
    {
        return $this->db->query("select * from karyawan");
                
    
    }
    
    function post($data)
    {
        $this->db->insert('karyawan',$data);
    }
    
    function get_one($ID_Karyawan)
    {
        $this->db->where('ID_Karyawan', $ID_Karyawan);
        return $this->db->get('karyawan');
    }
    
    function edit($data,$ID_Karyawan)
    {
        $this->db->where('ID_Karyawan',$ID_Karyawan);
        $this->db->update('karyawan',$data);
    }
    
    
    function delete($ID_Karyawan)
    {
        $this->db->where('ID_Karyawan',$ID_Karyawan);
        $this->db->delete('karyawan');
    }
}