<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	private $data;

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		
	}
	//data Mahasiswa
	
	
	public function index()
	{
		if($this->session->userdata('login_be')!="")
		{
			//$bc['nama'] = $this->session->userdata('nama');
			//$this->app_login_model->check_name($this->session->userdata('nim'));
			$bc['nim'] = $this->session->userdata('nim');
			$bc['khs'] = $this->app_login_model->ambil_nilai($bc['nim']);
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/home',$bc);
			$this->load->view('mahasiswa/footer');			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function export()
	{
		if($this->session->userdata('login_be')!="")
		{
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			//$bc['nama'] = $this->session->userdata('nama');
			//$this->app_login_model->check_name($this->session->userdata('username'), $this->session->userdata('status'));
			$bc['nim'] = $this->session->userdata('nim');
			$bc['khs'] = $this->app_login_model->ambil_nilai($bc['nim']);
			$this->load->view('mahasiswa/laporan',$bc);	
			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}	

	public function cari()
	{
		if($this->session->userdata('login_be')!="" )
		{
			//$bc['nim'] = $this->session->userdata('nim');
			//$bc['khs'] = $this->app_login_model->ambil_nilai($bc['nim']);
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/cari');
			$this->load->view('mahasiswa/footer');		
		}
		else
		{
			header('location:'.base_url().'');
		}
	}	

	public function button_cari()
	{
		if($this->session->userdata('login_be')!="")
		{
			if($this->input->post("cari")=="")
			{
				$kata = $this->session->userdata('kata');
			}
			else
			{
				$sess_data['kata'] = $this->input->post("cari");
				$this->session->set_userdata($sess_data);
				$kata = $this->session->userdata('kata');
			}
			$set_sess['tbl_mahasiswa_session'] = $this->session->userdata("tbl_mahasiswa_session");
			$this->session->unset_userdata($set_sess);


			//$bc['nama'] = $this->session->userdata('nama');
		//	$this->app_login_model->check_name($this->session->userdata('username'), $this->session->userdata('status'));
			$bc['nim'] = $this->session->userdata('nim');
			$bc['kata'] = $this->session->userdata('kata');
			$bc['khs'] = $this->app_login_model->ambil_nilai_tahun($bc['nim'],$bc['kata']);
			
			if($bc['khs']->num_rows()>0){
				//$this->session->set_flashdata('save_cari', "Data ditemukan");
				# code...
			}
			else{
				$this->session->set_flashdata('save_cari', "Data pencarian kosong");
			}
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/hasil',$bc);
			$this->load->view('mahasiswa/footer');	
		}
		else
		{
			header('location:'.base_url().'');
		}
	}	


	public function export_per()
	{
		if($this->session->userdata('login_be')!="")
		{
			if($this->input->post("cari")=="")
			{
				$kata = $this->session->userdata('kata');
			}
			else
			{
				$sess_data['kata'] = $this->input->post("cari");
				$this->session->set_userdata($sess_data);
				$kata = $this->session->userdata('kata');
			}
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			$set_sess['tbl_mahasiswa_session'] = $this->session->userdata("tbl_mahasiswa_session");
			$this->session->unset_userdata($set_sess);
			//$bc['nama'] = $this->session->userdata('nama');
			//$this->app_login_model->check_name($this->session->userdata('username'), $this->session->userdata('status'));
			$bc['nim'] = $this->session->userdata('nim');
			$bc['kata'] = $this->session->userdata('kata');
			$bc['khs'] = $this->app_login_model->ambil_nilai_tahun($bc['nim'],$bc['kata']);
			
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/laporan_per',$bc);
			$this->load->view('mahasiswa/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}		


	//pengaturan akun
	
	public function ganti_password()
	{
		if($this->session->userdata('login_be')!="")
		{
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/ganti_password');
			$this->load->view('mahasiswa/footer');
			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
		public function save_pass()
	{
		if($this->session->userdata('login_be')!="")
		{
			$this->form_validation->set_rules('pass_lama', 'Password Lama', 'trim|required');
			$this->form_validation->set_rules('pass_baru', 'Password Baru', 'trim|required');
			$this->form_validation->set_rules('ulangi_pass_baru', 'Ulangi Password Baru', 'trim|required');

			$id['nim'] = $this->input->post("nim");
			$pass_lama = $this->input->post("pass_lama");
			$pass_baru = $this->input->post("pass_baru");
			$ulangi_pass_baru = $this->input->post("ulangi_pass_baru");

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('mahasiswa/header');
				$this->load->view('mahasiswa/ganti_password');
				$this->load->view('mahasiswa/footer');
			}
			else
			{
				$login['nim'] = $id['nim'];
				$login['pass'] = $pass_lama;
				$cek = $this->db->get_where('tbl_mahasiswa', $login);
				if($cek->num_rows()>0)
				{
					if($pass_baru==$ulangi_pass_baru)
					{

						$data = array('pass'=>($pass_baru));
						$this->app_login_model->update_password($data);
						$this->session->set_flashdata('pass', 'Berhasil mengubah password...');
						header('location:'.base_url().'index.php/mahasiswa/ganti_password');
					}
					else
					{
						$this->session->set_flashdata('pass', 'Password Baru tidak sama...');
						header('location:'.base_url().'index.php/mahasiswa/ganti_password');
					}
				}
				else
				{
					$this->session->set_flashdata('pass', 'Password Lama salah...');
					header('location:'.base_url().'index.php/mahasiswa/ganti_password');
				}
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	
	
	

}