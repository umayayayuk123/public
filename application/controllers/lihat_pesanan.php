<?php
class lihat_pesanan extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_lihat_pesanan');
        chek_session();
    }
    
    function index()
    {
        $data['record']=  $this->model_lihat_pesanan->tampildata();
       
        //$this->load->view('operator/lihat_data',$data);
        $this->template->load('template','pesanan/lihat_data',$data);
    }
 public function detail_order_by_id($id)
    {
        $data['tb_order'] = $this->db->get_where('tb_order', array('no_nota' => $id ))->row_array();
        $data['detail_order'] = $this->db->get_where('detail_order', array('no_nota' => $id ))->result();
        $this->template->load('template','tb_order/detail_order',$data);
    }
}