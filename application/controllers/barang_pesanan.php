<?php
class barang_pesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_barang_pesanan');
        chek_session();
    }


    function index()
    {
        $data['record'] = 
        $this->model_barang_pesanan->tampil_data();
        $this->template->load('template','barang_pesanan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            
            $kategori_barpes_id  =   $this->input->post('kategori_barpes_id');
            $nama_barang_pesanan      =   $this->input->post('nama_barang_pesanan');
            $harga      =   $this->input->post('harga');
            $data       = array('kategori_barpes_id'=>$kategori_barpes_id,
                                'nama_barang_pesanan'=>$nama_barang_pesanan,
                                'harga'=>$harga);
            $this->model_barang_pesanan->post($data);
            redirect('barang_pesanan');
        }
        else{
            $this->load->model('model_kategori_barang_pesanan');
            $data['kategori_barang_pesanan']=  $this->model_kategori_barang_pesanan->tampilkan_data()->result();
           
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','barang_pesanan/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $kategori_barpes_id   =   $this->input->post('kategori_barpes_id');
            $nama_barang_pesanan      =   $this->input->post('nama_barang_pesanan');
            $harga      =   $this->input->post('harga');
            $data       = array('kategori_barpes_id'=>$kategori_barpes_id,
                                'nama_barang_pesanan'=>$nama_barang_pesanan,
                                'harga'=>$harga);
            $this->model_barang_pesanan->edit($data,$barang_pesanan_id);
            redirect('barang_pesanan');
        }
        else{
            $barang_pesanan_id=  $this->uri->segment(3);
            $this->load->model('model_kategori_barang_pesanan');
            $data['kategori_barang_pesanan']   =  $this->model_kategori_barang_pesanan->tampilkan_data()->result();
            $data['record']     =  $this->model_barang_pesanan->get_one($barang_pesanan_id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','barang_pesanan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $barang_pesanan_id=  $this->uri->segment(3);
        $this->model_barang_pesanan->delete($barang_pesanan_id);
        redirect('barang_pesanan');
    }
}