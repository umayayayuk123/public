<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {
   
   public function __construct()
   {
      parent::__construct();
      $this->load->model('model_order');
      
   }
   
   public function index()
   {
      $this->load->view('ui_utama');
   }
   function cari_data_pesanan_by_no_transaksi(){
      $data_input = $this->input->post('data_input');
      $cek_data = $this->model_order->get_order_by_nomor($data_input);
      if($cek_data->num_rows()!=0){
          $data['orderan'] = $this->model_order->get_detail_order($data_input)->result();
          $data['sukses'] = "1";
          $data['message'] = "Data Pesanan Ditemukan";
          $data['pesanan'] = $cek_data->row_array();
      }else{
          $data['sukses'] = "0";
          $data['message'] = "Data Pesanan Tidak Ditemukan";
      }
      $this->load->view('pop_up_pesanan', $data);
  }
}