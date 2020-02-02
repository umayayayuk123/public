<?php
class pilih_order extends CI_Controller{
    
    
    function index(){
        chek_session();
        

        $this->template->load('template','hal_pilih_order');
    }
}