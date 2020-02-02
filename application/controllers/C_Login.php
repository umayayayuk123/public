<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class C_Login extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Login');
		}

		public function indexlg()
		{
			

			$this->load->view('login');
		}

		public function indexlg_pr()
		{
			

			$this->load->view('login_pr');
		}

		public function proseslgpk()
		{
			// echo "login pk";
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->M_Login->cek_UP($username,md5($password));

			if ($cek->num_rows()==1) {
				//login berhasil
				$user = $cek->row_array();

				$sess_user = array(
					'sess_operator_id' => $user['operator_id'], 
					'sess_id_hak_akses' => $user['id_hak_akses'], 
				);

				$this->session->set_userdata($sess_user);
				
				if ($sess_user['sess_id_hak_akses']=='ha03') {
					
					redirect(site_url('C_Profilp/profilpp'));
				}elseif ($sess_user['sess_id_hak_akses']=='ha01') {

					redirect(site_url('C_Admin/index'));
				}else{
					$this->session->set_flashdata('error','username atau password salah');
				redirect(site_url('C_Login/indexlg'));
				}


			}else{
				//logoin gagal
				$this->session->set_flashdata('error','username atau password salah');
				redirect(site_url('C_Login/indexlg'));
			}
		}

		public function proseslgpr()
		{
			// echo "login pk";
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->M_Login->cek_UP($username,md5($password));

			if ($cek->num_rows()==1) {
				//login berhasil
				$user = $cek->row_array();

				$sess_user = array(
					'sess_id_user' => $user['id_user'], 
					'sess_id_hak_akses' => $user['id_hak_akses'], 
				);

				$this->session->set_userdata($sess_user);
				
				if ($sess_user['sess_id_hak_akses']=='ha02') {
					
					redirect(site_url('C_Profilpr/profil'));
				}elseif ($sess_user['sess_id_hak_akses']=='ha01') {

					redirect(site_url('C_Admin/index'));
				}else{
					$this->session->set_flashdata('error','username atau password salah');
				redirect(site_url('C_Login/indexlg_pr'));
				}


			}else{
				//logoin gagal
				$this->session->set_flashdata('error','username atau password salah');
				redirect(site_url('C_Login/indexlg_pr'));
			}
		}
	}
 ?>