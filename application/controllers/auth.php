 <?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function login()
    {
        if (isset($_POST['submit'])){
            
            // proses login disini
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $hasil      =  $this->model_operator->login($username,$password);
            if($hasil->num_rows()==1)
            {
                // update last login
                $operator = $hasil->row_array();
                $array = array(
                    'operator_id' => $operator['operator_id'],
                    'id_hak_akses' => $operator['id_hak_akses'], 
                );
               
                $this->session->set_userdata( $array );
                $this->db->update('operator',array('last_login'=>date('Y-m-d')));
                redirect('dashboard');
            }
            else{
                $this->session->set_flashdata('error_login', 'Username atau Password Anda Salah!');
                redirect('auth/login');
            }
        }
        else{
            //$this->load->view('form_login2');
            chek_session_login();
            $this->load->view('form_login');
        }
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}