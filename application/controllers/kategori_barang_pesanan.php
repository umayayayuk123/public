<?php
class kategori_barang_pesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori_barang_pesanan');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'kategori_barang_pesanan/index/';
        $config['total_rows'] = $this->model_kategori_barang_pesanan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_kategori_barang_pesanan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','kategori_barang_pesanan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_kategori_barang_pesanan->post();
            redirect('kategori_barang_pesanan');
        }
        else{
            //$this->load->view('kategori/form_input');
            $this->template->load('template','kategori_barang_pesanan/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_kategori_barang_pesanan->edit();
            redirect('kategori_barang_pesanan');
        }
        else{
            $kategori_barpes_id=  $this->uri->segment(3);
            $data['record']=  $this->model_kategori_barang_pesanan->get_one($kategori_barpes_id)->row_array();
            //$this->load->view('kategori/form_edit',$data);
            $this->template->load('template','kategori_barang_pesanan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $kategori_barpes_id=  $this->uri->segment(3);
        $this->model_kategori_barang_pesanan->delete($kategori_barpes_id);
        redirect('kategori_barang_pesanan');
    }
}