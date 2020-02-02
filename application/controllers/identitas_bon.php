<?php
class identitas_bon extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_identitas_bon');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_identitas_bon->tampil_data();
        $this->template->load('template','identitas_bon/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses identitas BON
            $ID_BON       =   $this->input->post('ID_BON');
            $Nama           =   $this->input->post('Nama');
            $Instansi      =   $this->input->post('Instansi');
            $Alamat     =   $this->input->post('Alamat');
            $No_HP      =   $this->input->post('No_HP');
            $data       = array('ID_BON'=>$ID_BON,
                                'Nama'=>$Nama,
                                'Instansi'=>$Instansi,
                                'Alamat'=>$Alamat,
                                'No_HP'=>$No_HP);
                                
            $this->model_identitas_bon->post($data);
            redirect('identitas_bon');
        }
        else{
            $this->load->model('model_identitas_bon');
            $data['identitas_bon']=  $this->model_identitas_bon->tampil_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','identitas_bon/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses identitas BON
            $ID_BON       =   $this->input->post('ID_BON');
            $Nama           =   $this->input->post('Nama');
            $Instansi      =   $this->input->post('Instansi');
            $Alamat     =   $this->input->post('Alamat');
            $No_HP      =   $this->input->post('No_HP');
            $data       = array('ID_BON'=>$ID_BON,
                                'Nama'=>$Nama,
                                'Instansi'=>$Instansi,
                                'Alamat'=>$Alamat,
                                'No_HP'=>$No_HP);
                                
            $this->model_identitas_bon->post($data);
            redirect('identitas_bon');
        }
        else{
            $ID_BON=  $this->uri->segment(3);
            $this->load->model('model_identitas_bon');
            $data['identitas_bon']   =  $this->model_identitas_bon->tampil_data()->result();
            $data['record']     =  $this->model_identitas_bon->get_one($ID_BON)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','identitas_bon/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $ID_BON=  $this->uri->segment(3);
        $this->model_identitas_bon->delete($ID_BON);
        redirect('identitas_bon');
    }
}