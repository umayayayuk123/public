<?php
class cek_order extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_cek_order','model_customer'));
        chek_session();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_cek_order->cek_order();
            redirect('cek_order');
        }
        else
        {
            $data['cek_order']=  $this->model_cek_order->tampil_data();
            $data['detail']= $this->model_transaksi->tampilkan_detail_cek_order(0)->result();
            $this->template->load('template','transaksi/form_transaksi',$data);
        }
    }
    