<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {


	public function index()
	{
		redirect('app/artikel');
	}

	public function artikel()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;

			$d['tot'] = $offset;
			$tot_hal = $this->db->query("select * from tbl_artikel ORDER BY created DESC ");
			$config['base_url'] = base_url() . 'index.php/app/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;

		$config['first_tag_open'] = '<li>';
		$config['first_link'] = 'First';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_link'] = 'Last';
		$config['last_tag_close'] = '</li>';
		
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			$d['data_artikel'] = $this->db->get("tbl_artikel",$limit,$offset);
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			
			$this->data['title'] = 'Home';

			$this->load->view('atas_home', $this->data);
			$this->load->view('home',$d);
			$this->load->view('footer');
	}
	

public function lokasi()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			$d['data_dosen'] = $this->db->get("tbl_dosen");
		
		$this->load->library('googlemaps');

		$config['center'] = '-1.6357283,103.6606498';
		$config['zoom'] = 'auto';
		$config['directions'] = TRUE;
		$config['directionsMode'] = "DRIVING";
		$config['directionsStart'] = '-1.633898,103.652346';
		$config['directionsEnd'] = '-1.6357283,103.6606498';
		$config['directionsAvoidTolls'] = TRUE;
		$config['directionsAvoidHighways'] = TRUE;
		$config['directionsDraggable'] = TRUE;
		$config['trafficOverlay'] = TRUE;
		$config['directionsDivID'] = 'directionsDiv';
		$this->googlemaps->initialize($config);


		//POSISI TUJUAN
		$marker = array();
		$marker['position'] = '-1.6357283,103.6606498';
		$marker['infowindow_content'] = 'Akbid Keluarga Bunda Jambi';
		
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=Akbid Keluarga Bunda|9999FF|000000';
		$this->googlemaps->add_marker($marker);

		
		$d['map'] = $this->googlemaps->create_map();


		$this->load->view('atas_lokasi',$d);
		$this->load->view('lokasi');	
		$this->load->view('footer');

		//posisi permintaan
		//$marker = array();
		//$marker['position'] = '-1.633898,103.652346';
	///	$marker['draggable'] = TRUE;
		//$marker['animation'] = 'DROP';
		//$this->googlemaps->add_marker($marker);

		//ambil lokasi kita
	//	$this->load->library('googlemaps');

//$config = array();
//$config['center'] = 'auto';
//$config['onboundschanged'] = 'if (!centreGot) {
//	var mapCentre = map.getCenter();
//	marker_0.setOptions({
//		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
///	});
//}
//centreGot = true;';
//$this->googlemaps->initialize($config);
   
// set up the marker ready for positioning 
// once we know the users location/
//$marker = array();
//$this->googlemaps->add_marker($marker);
//$data['map'] = $this->googlemaps->create_map();

		
		
	}

public function street_lokasi()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			$d['data_dosen'] = $this->db->get("tbl_dosen");
		
		$this->load->library('googlemaps');
		$config['center'] = '-1.6357283,103.6606498';
		$config['map_type'] = 'STREET';
		$config['streetViewPovHeading'] = 90;
		$this->googlemaps->initialize($config);
		$d['map'] = $this->googlemaps->create_map();



		$this->data['title'] = 'Lokasi Akbid Keluarga bunda';

		$this->load->view('atas_lokasi',$d);
		$this->load->view('street_lokasi',$this->data);	
		$this->load->view('footer');
		
	}


	public function data_dosen()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			$d['data_dosen'] = $this->db->get("tbl_dosen");


		$this->data['title'] = 'Data Dosen';
		$this->load->view('atas_home', $this->data);
		$this->load->view('data_dosen',$d);	
		$this->load->view('footer');
		
	}

	public function informasi_pmb()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			$d['data_pmb'] = $this->db->get("tbl_pmb");

		$this->data['title'] = 'Informasi pendaftaran mahasiswa baru';

			$this->load->view('atas_home', $this->data);
		$this->load->view('informasi_pmb',$d);	
		$this->load->view('footer');
		
	}

	public function sejarah()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			
		$this->data['title'] = 'Sejarah';

		$this->load->view('atas_home', $this->data);
		$this->load->view('sejarah',$d);	
		$this->load->view('footer');
		
	}

	public function baca($id=0)
	{

			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			

		if(!$d['row']=$this->app_login_model->cek_kode_artikel($id)) redirect('admin/data_artikel');
			
			$d['tbl_artikel'] = $this->app_login_model->editartikel($id)->row();
			
			$this->data['title'] = 'Artikel';

			$this->load->view('atas_home', $this->data);
			$this->load->view('baca',$d);
			$this->load->view('footer');
	}


public function struk()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
			
		$this->data['title'] = 'Struktur Organisasi';

		$this->load->view('atas_home', $this->data);
		$this->load->view('struk',$d);	
		$this->load->view('footer');
		
	}

	


	public function visi_misi()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;

				//artikel kanan
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
				//end aritikel kanan

		$this->data['title'] = 'Visi Misi';

			$this->load->view('atas_home', $this->data);
		$this->load->view('visi_misi',$d);	
		$this->load->view('footer');
		
	}	

	public function sarana()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;

				//artikel kanan
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
				//end aritikel kanan

		$this->data['title'] = 'Sarana';

			$this->load->view('atas_home', $this->data);
		$this->load->view('sarana',$d);	
		$this->load->view('footer');
		
	}	

	public function kenapa()
	{
		$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;

				//artikel kanan
			$d['tot'] = $offset;
			$config['per_page'] = $limit;
			$d['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
				//end aritikel kanan

		$this->data['title'] = 'kenapa Akbid Keluarga bunda';

			$this->load->view('atas_home', $this->data);
		$this->load->view('kenapa',$d);	
		$this->load->view('footer');
		
	}	


	


	
	public function target()
	{
		if($this->session->userdata('logged_in')=="")
		{
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$data['tot'] = $offset;
			$config['per_page'] = $limit;
			$data['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
				
			$data['data_artikel'] = $this->db->get("tbl_artikel");
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			
			if ($this->form_validation->run() == FALSE)
			{
				$this->data['title'] = 'kenapa Akbid Keluarga bunda';

			$this->load->view('atas_home', $this->data);
				
				$this->load->view('target',$data);
				$this->load->view('footer');
			}
			else
			{
				$dt['username'] = $this->input->post('username');
				$dt['password'] = $this->input->post('password');
				$this->app_login_model->getLoginData($dt);
			}
		}
		else if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			header('location:'.base_url().'index.php/admin','refresh');
		}
		else if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="pegawai")
		{
			header('location:'.base_url().'index.php/pegawai','refresh');
		}
		
	}	
	
	public function ganti_password()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{	
			$this->load->view('admin/header');
			$this->load->view('admin/ganti_password');
			$this->load->view('admin/footer');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}	

	public function save_pass()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$this->form_validation->set_rules('pass_lama', 'Password Lama', 'trim|required');
			$this->form_validation->set_rules('pass_baru', 'Password Baru', 'trim|required');
			$this->form_validation->set_rules('ulangi_pass_baru', 'Ulangi Password Baru', 'trim|required');

			$id['username'] = $this->input->post("username");
			$pass_lama = $this->input->post("pass_lama");
			$pass_baru = $this->input->post("pass_baru");
			$ulangi_pass_baru = $this->input->post("ulangi_pass_baru");

			$set['tab_a'] = "active";
			$set['tab_b'] = "";
			$this->session->set_userdata($set);

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/header');
				$this->load->view('admin/ganti_password');
				$this->load->view('admin/footer');
			}
			else
			{
				$login['username'] = $id['username'];
				$login['password'] = $pass_lama;
				$cek = $this->db->get_where('tbl_login', $login);
				if($cek->num_rows()>0)
				{
					if($pass_baru==$ulangi_pass_baru)
					{

						$data = array('password'=>($pass_baru));
						$this->app_login_model->update_pass($data);
						$this->session->set_flashdata('pass', 'Berhasil mengubah password...');
						header('location:'.base_url().'index.php/app/ganti_password');
					}
					else
					{
						$this->session->set_flashdata('pass', 'Password Baru tidak sama...');
						header('location:'.base_url().'index.php/app/ganti_password');
					}
				}
				else
				{
					$this->session->set_flashdata('pass', 'Password Lama salah...');
					header('location:'.base_url().'index.php/app/ganti_password');
				}
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function save_name()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$this->form_validation->set_rules('nama_lengkap', 'Nama Pengguna', 'trim|required');

			$id['username'] = $this->input->post("username");
			$nama_lengkap = $this->input->post("nama_lengkap");

			$set['tab_a'] = "";
			$set['tab_b'] = "active";
			$this->session->set_userdata($set);

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/header');
				$this->load->view('admin/ganti_password');
				$this->load->view('admin/footer');
			}
			else
			{
				$data = array('nama_lengkap'=>($nama_lengkap));
				$this->app_login_model->update_name($data);
				$this->session->set_flashdata('pass', 'Berhasil mengubah nama pengguna');
				$set_new['nama'] = $data['nama_lengkap'];
				$this->session->set_userdata($set_new);
				header('location:'.base_url().'index.php/app/ganti_password');
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'','refresh');
	}
	
	//

public function login_mhs()
	{
		if($this->session->userdata('login_be')=="")
		{
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_artikel');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$data['tot'] = $offset;
			$config['per_page'] = $limit;
			$data['kanan_artikel'] = $this->db->query("select * from tbl_artikel ORDER BY created DESC limit ".$limit." ");
				
			$data['data_artikel'] = $this->db->get("tbl_artikel");
			$this->form_validation->set_rules('nim', 'NIM', 'trim|required');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('atas_target',$data);
				$this->load->view('login_mhs');
				$this->load->view('footer');
			}
			else
			{
				$data['nim'] = $this->input->post('nim');
				$data['pass'] = $this->input->post('pass');
				$this->app_login_model->AmbilData($data);
			}
		}
		else if($this->session->userdata('login_be')!="")
		{
			header('location:'.base_url().'index.php/mahasiswa/','refresh');
		}
	}		
	
	
	
}	
