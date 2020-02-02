<?php
class databon extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_databon');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_databon->tampil_data();
        $this->template->load('template','databon/lihat_data',$data);
    }
    
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses databon
            $tanggal       =   $this->input->post('tanggal');
            $no_nota           =   $this->input->post('no_nota');
            $item_barang      =   $this->input->post('item_barang');
            $QTY     =   $this->input->post('QTY');
            $harga      =   $this->input->post('harga');
            $jumlah      =   $this->input->post('jumlah');
            $bayar      =   $this->input->post('bayar');
            $sisa      =   $this->input->post('sisa');
            $status      =   $this->input->post('status');
            $data       = array('tanggal'=>$tanggal,
                                'no_nota'=>$no_nota,
                                'item_barang'=>$item_barang,
                                'QTY'=>$QTY,
                                'harga'=>$harga,
                                'jumlah'=>$jumlah,
                                'bayar'=>$bayar,
                                'sisa'=>$sisa,
                                'status'=>$status);
            $this->model_databon->post($data);
            redirect('databon');
        }
        else{
            $this->load->model('model_databon');
            $data['databon']=  $this->model_databon->tampil_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','databon/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $tanggal       =   $this->input->post('tanggal');
            $no_nota   =   $this->input->post('no_nota');
            $item_barang      =   $this->input->post('item_barang');
            $QTY     =   $this->input->post('QTY');
            $harga      =   $this->input->post('harga');
            $jumlah      =   $this->input->post('jumlah');
            $bayar      =   $this->input->post('bayar');
            $sisa      =   $this->input->post('sisa');
            $status      =   $this->input->post('status');
            $data       = array('tanggal'=>$tanggal,
                                'no_nota'=>$no_nota,
                                'item_barang'=>$item_barang,
                                'QTY'=>$QTY,
                                'harga'=>$harga,
                                'jumlah'=>$jumlah,
                                'bayar'=>$bayar,
                                'sisa'=>$sisa,
                                'status'=>$status);
                    
            $this->model_databon->edit($data,$no_nota);
            redirect('databon');
        }
        else{
            $no_nota=  $this->uri->segment(3);
            $this->load->model('model_databon');
            $data['databon']   =  $this->model_databon->tampil_data()->result();
            $data['record']     =  $this->model_databon->get_one($no_nota)->row_array();
            $this->template->load('template','databon/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $no_nota=  $this->uri->segment(3);
        $this->model_databon->delete($no_nota);
        redirect('databon');
    }
}