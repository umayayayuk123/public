<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

   public function index()
   {
      $this->load->view('ui_utama');
   }
}