<?php
class data_job_karyawan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_data_job_karyawan');
        chek_session();
    }


    function index()
    {
        $data['record'] = 
        $this->model_data_job_karyawan->tampil_data();
        $this->template->load('template','data_job_karyawan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            
            $kategori_job_id  =   $this->input->post('kategori_job_id');
            $nama_karyawan_job      =   $this->input->post('nama_karyawan_job');
            $harga      =   $this->input->post('harga');
            $data       = array('kategori_job_id'=>$kategori_job_id,
                                'nama_karyawan_job'=>$nama_karyawan_job,
                                'harga'=>$harga);
            $this->model_data_job_karyawan->post($data);
            redirect('data_job_karyawan');
        }
        else{
            $this->load->model('model_data_kategori_job');
            $data['data_kategori_job']=  $this->model_data_kategori_job->tampilkan_data()->result();
           
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','data_job_karyawan/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $kategori_job_id  =   $this->input->post('kategori_job_id');
            $nama_karyawan_job      =   $this->input->post('nama_karyawan_job');
            $harga      =   $this->input->post('harga');
            $data       = array('kategori_job_id'=>$kategori_job_id,
                                'nama_karyawan_job'=>$nama_karyawan_job,
                                'harga'=>$harga);
            $this->model_data_job_karyawan->edit($data,$job_karyawan_id);
            redirect('data_job_karyawan');
        }
        else{
            $job_karyawan_id=  $this->uri->segment(3);
            $this->load->model('model_data_kategori_job');
            $data['data_kategori_job']   =  $this->model_data_kategori_job->tampilkan_data()->result();
            $data['record']     =  $this->model_data_job_karyawan->get_one($job_karyawan_id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','data_job_karyawan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $job_karyawan_id=  $this->uri->segment(3);
        $this->model_data_job_karyawan->delete($data_job_karyawan);
        redirect('data_job_karyawan');
    }
}