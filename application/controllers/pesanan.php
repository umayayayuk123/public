<?php
class pesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pesanan');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_pesanan->tampil_data();
        $this->template->load('template','pesanan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
           
            $id_pesanan       =   $this->input->post('id_pesanan');
            $tanggal_pemesanan  =   $this->input->post('tanggal_pemesanan');
            $item_pesanan      =   $this->input->post('item_pesanan');
            $jumlah          =   $this->input->post('jumlah');
            $pesanan_selesai   =   $this->input->post('pesanan_selesai');
            $harga=   $this->input->post('harga');
            $keterangan_pesanan =   $this->input->post('keterangan_pesanan');
            $data            = array('id_pesanan'=>$id_pesanan,
                                'tanggal_pemesanan'=>$tanggal_pemesanan,
                                'item_pesanan'=>$item_pesanan,
                                'jumlah'=>$jumlah,
                                'pesanan_selesai'=>$pesanan_selesai,
                                'harga'=>$harga,
                                'keterangan_order'=>$keterangan_order);
                                
                                
            $this->model_order->post($data);
            redirect('pesanan');
        }
        else{
            $this->load->model('model_pesanan');
            $data['order']=  $this->model_order->tampil_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','pesanan/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
           
            $id_pesanan       =   $this->input->post('id_pesanan');
            $tanggal_pemesanan  =   $this->input->post('tanggal_pemesanan');
            $item_pesanan      =   $this->input->post('item_pesanan');
            $jumlah          =   $this->input->post('jumlah');
            $pesanan_selesai   =   $this->input->post('pesanan_selesai');
            $harga=   $this->input->post('harga');
            $keterangan_pesanan =   $this->input->post('keterangan_pesanan');
            $data            = array('id_pesanan'=>$id_pesanan,
                                'tanggal_pemesanan'=>$tanggal_pemesanan,
                                'item_pesanan'=>$item_pesanan,
                                'jumlah'=>$jumlah,
                                'pesanan_selesai'=>$pesanan_selesai,
                                'harga'=>$harga,
                                'keterangan_order'=>$keterangan_order);
                                
                    
            $this->model_order->edit($data,$id_pesanan);
            redirect('pesanan');
        }
        else{
            $id_pesanan=  $this->uri->segment(3);
            $this->load->model('model_pesanan');
            $data['pesanan']   =  $this->model_pesanan->tampil_data()->result();
            $data['record']     =  $this->model_pesanan->get_one($id_pesanan)->row_array();
            $this->template->load('template','pesanan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id_order=  $this->uri->segment(3);
        $this->model_order->delete($id_pesanan);
        redirect('pesanan');
    }
}