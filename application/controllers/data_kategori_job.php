<?php
class data_kategori_job extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_data_kategori_job');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/data_kategori_job/index/';
        $config['total_rows'] = $this->model_data_kategori_job->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_data_kategori_job->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','data_kategori_job/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_data_kategori_job->post();
            redirect('data_kategori_job');
        }
        else{
            //$this->load->view('kategori/form_input');
            $this->template->load('template','data_kategori_job/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_data_kategori_job->edit();
            redirect('data_kategori_job');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_data_kategori_job->get_one($id)->row_array();
            //$this->load->view('kategori/form_edit',$data);
            $this->template->load('template','data_kategori_job/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_data_kategori_job->delete($id);
        redirect('data_kategori_job');
    }
}