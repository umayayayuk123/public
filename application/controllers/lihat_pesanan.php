 <?php
class lihat_pesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_detail_orderr');
    }
    
    function login()
    {
        if (isset($_POST['submit'])){
            
            // proses login disini
            $no_nota   = $this->input->post('no_nota');
            $hasil      =  $this->model_detail_order->login($no_nota);
            if($hasil->num_rows()==1)
            {
               

    public function detail_order_by_id($id)
    {
        $data['tb_order'] = $this->db->get_where('tb_order', array('no_nota' => $id ))->row_array();
        $data['detail_order'] = $this->db->get_where('detail_order', array('no_nota' => $id ))->result();
        $this->template->load('template','tb_order/detail_order',$data);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('lihat_pesanan/login');
    }
}