<?php
class karyawan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_karyawan');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_karyawan->tampil_data();
        $this->template->load('template','karyawan/lihat_data',$data);
    }
    
   c
    
    function edit()
    {
       if(isset($_POST['submit'])){
          
            $ID_Karyawan       =   $this->input->post('ID_Karyawan');
            $Nama   =   $this->input->post('Nama');
            $Jenis_Kelamin      =   $this->input->post('jk');
            $JOB     =   $this->input->post('JOB');
            $data       = array('ID_Karyawan'=>$ID_Karyawan,
                                'Nama'=>$Nama,
                                'Jenis_Kelamin'=>$Jenis_Kelamin,
                                'JOB'=>$JOB);
                                
                    
            $this->model_karyawan->edit($data,$ID_Karyawan);
            redirect('karyawan');
        }
        else{
            $ID_Karyawan=  $this->uri->segment(3);
            $this->load->model('model_karyawan');
            $data['karyawan']   =  $this->model_karyawan->tampil_data()->result();
            $data['record']     =  $this->model_karyawan->get_one($ID_Karyawan)->row_array();
            $this->template->load('template','karyawan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $ID_Karyawan=  $this->uri->segment(3);
        $this->model_karyawan->delete($ID_Karyawan);
        redirect('karyawan');
    }
}