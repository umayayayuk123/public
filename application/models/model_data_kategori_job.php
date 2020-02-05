<?php
class model_data_kategori_job extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('data_kategori_job');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from data_kategori_job");
  }
    
    function post(){
        $data=array(
           'nama_kategori_job'=>  $this->input->post('data_kategori_job')
                    );
        $this->db->insert('data_kategori_job',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama_kategori_job'=>  $this->input->post('data_kategori_job')
                    );
        $this->db->where('kategori_job_id',$this->input->post('id'));
        $this->db->update('data_kategori_job',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('kategori_job_id'=>$id);
        return $this->db->get_where('data_kategori_job',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('kategori_job_id',$id);
        $this->db->delete('data_kategori_job');
    }
}