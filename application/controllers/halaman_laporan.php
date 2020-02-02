<?php
class halaman_laporan extends CI_Controller{
    
    
    function index(){
        chek_session();
        

        $this->template->load('template','halaman_laporan');
    }
}