<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


 public function __construct()
    {
        parent::__construct();
        $this->load->helper('terbilang');
    } 

	//data pegawai
	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			redirect('admin/data_artikel');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

//mulai data user

	public function data_user()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			

			$d['tot'] = 0;
			
			$d['data_user'] = $this->db->get("tbl_login");

			$this->load->view('admin/header');	
			$this->load->view('admin/data_user',$d);
			$this->load->view('admin/footer');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah_user()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$simpan["username"] = $this->input->post("username");
			if($this->app_login_model->cek_kd_user($simpan["username"])==0)
			{
			$this->form_validation->set_rules('username');
			$this->form_validation->set_rules('password');
			$this->form_validation->set_rules('nama_lengkap');
			$this->form_validation->set_rules('status');
			$d['id_login'] = "";
			if($this->form_validation->run() == TRUE){
			$this->app_login_model->inputuser(
			$this->input->post('username'),
			$this->input->post('password'),
			$this->input->post('nama_lengkap'),
			$this->input->post('status'),
			$simpan
			);
			$this->session->set_flashdata('save_user', "Data Berhasil Ditambah");
			redirect('admin/data_user');
			}

			$data['user'] = $this->app_login_model->getuser();
			$this->load->view('admin/header');
			$this->load->view('admin/input_user',$d);
			$this->load->view('admin/footer');
			}
			else
				{
					$this->session->set_flashdata("save_user","
					<p style='text-align:center; margin:0px;'> Username Telah Terpakai</p>");
					header('location:'.base_url().'index.php/admin/data_user');
				}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_user($id_login){
		$hapus = $this->app_login_model->hapususer($id_login);
		$this->app_login_model->hapususer($id_login);
		$this->session->set_flashdata('save_user', "Data Berhasil Dihapus.");
		redirect('admin/data_user');
	}

	

	public function edit_user($id_login=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_user($id_login)) redirect('admin/data_user');
			$data['edit_user'] = $this->app_login_model->edituser($id_login)->row();
			$this->load->view("admin/header");
			$this->load->view("admin/edit_user",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function button_edit_user()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		$id_login=$this->input->post('id_login');
		$this->form_validation->set_rules('username');
		$this->form_validation->set_rules('password');
		$this->form_validation->set_rules('nama_lengkap');
		$this->form_validation->set_rules('status');
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/data_user');
			}
		else
			{
					$this->app_login_model->updateuser(
					$this->input->post("id_login"),
					$this->input->post("username"),
					$this->input->post("password"),
					$this->input->post("nama_lengkap"),
					$this->input->post("status")
					);
					$this->session->set_flashdata('save_user', "Data Berhasil Dirubah.");
					redirect('admin/data_user');
			}
		}
					
		else
		{
			header('location:'.base_url().'');
		}
	}		

//end data user

//mulai artikel

	public function data_artikel()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			//$d['tot'] = 0;
			$d['data_artikel'] = $this->db->get("tbl_artikel");
			$this->load->view('admin/header');	
			$this->load->view('admin/data_artikel',$d);
			$this->load->view('admin/footer');			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function artikel()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$this->load->view("admin/input_artikel", array('error' => ' ' ));
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function tambah_artikel()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$this->form_validation->set_rules('judul', 'Judul');
			$this->form_validation->set_rules('keterangan', 'Keterangan');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view("admin/header");
				$this->load->view("admin/input_artikel", array('error' => ' ' ));
				$this->load->view("admin/footer");
			}
			else
			{
			 	$config['upload_path']          = './foto/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
						$error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('save_artikel', "
										Gambar Tidak Boleh Kosong !!!
										Gambar optimal pada resolusi 1024x768 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif");
							redirect('admin/data_artikel',$error);		
				}
				else
				{
					$data=$this->upload->data();
					$foto=$data['orig_name'];
					$judul=$this->input->post('judul');
					$ket=$this->input->post('ket');
					$this->app_login_model->inputartikel($judul,$ket,$foto);
					$this->session->set_flashdata('save_artikel', "Data Berhasil Ditambah.");
					redirect('admin/data_artikel');	
				}
			}	
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function hapus_artikel($id=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapusartikel($id);
			$this->app_login_model->hapusartikel($id);
			$this->session->set_flashdata('save_artikel', "Data Berhasil Dihapus.");
			redirect('admin/data_artikel');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}
	
	
	public function edit_artikel($id=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_artikel($id)) redirect('admin/data_artikel');
			$data = array('error' => '');
			$data['edit_artikel'] = $this->app_login_model->editartikel($id)->row();

			$this->load->view("admin/header");
			$this->load->view("admin/edit_artikel",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function button_edit_artikel()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('judul');
		$this->form_validation->set_rules('keterangan');
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/edit_artikel');
			}
		else
			{
				$config['upload_path']          = './foto/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if (empty($_FILES['userfile']['name']))
				{
					$id=$this->input->post('id');
					//$foto=$data['orig_name'];
					$judul=$this->input->post('judul');
					$ket=$this->input->post('ket');
					$this->app_login_model->updatear($id,$judul,$ket);
					$this->session->set_flashdata('save_artikel', "Data Berhasil Dirubah.");
					redirect('admin/data_artikel');
				}
				else
				{
					if(!$this->upload->do_upload())
						{
							$error = array('error' => $this->upload->display_errors());
							$this->session->set_flashdata('save_artikel', "
										Gambar optimal pada resolusi 1024x768 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif");
							redirect('admin/data_artikel',$error);	
						}
					$data=$this->upload->data();
					$foto=$data['orig_name'];
					$id = $this->input->post('id');
					$judul=$this->input->post('judul');
					$ket=$this->input->post('ket');
					$this->app_login_model->updateartikel($id,$judul,$ket,$foto);
					$this->session->set_flashdata('save_artikel', "Data Berhasil Dirubah.");
					redirect('admin/data_artikel');		
				}
				
			}
		}

		else
		{
			header('location:'.base_url().'');
		}
	}		

//end artikel


	//mulai data mahasiswa

	public function data_mahasiswa()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			

			$d['tot'] = 0;
			
			$d['data_mahasiswa'] = $this->db->get("tbl_mahasiswa");

			$this->load->view('admin/header');	
			$this->load->view('admin/data_mahasiswa',$d);
			$this->load->view('admin/footer');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah_mahasiswa()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$simpan["nim"] = $this->input->post("nim");
			if($this->app_login_model->cek_kd_mhs($simpan["nim"])==0)
			{
			$this->form_validation->set_rules('nim');
			$this->form_validation->set_rules('pass');
			$this->form_validation->set_rules('nama');
			$this->form_validation->set_rules('jk');
			$this->form_validation->set_rules('angkatan');
			$this->form_validation->set_rules('jurusan');
			
			
			if($this->form_validation->run() == TRUE){
			$this->app_login_model->inputmhs(
			$this->input->post('nim'),
			$this->input->post('pass'),
			$this->input->post('nama'),
			$this->input->post('jk'),
			$this->input->post('angkatan'),
			$this->input->post('jurusan'),
			$simpan
			);
			$this->session->set_flashdata('save_mahasiswa', "Data Berhasil Ditambah");
			redirect('admin/data_mahasiswa');
			}

			$data['data_mahasiswa'] = $this->app_login_model->getmhs();
			$this->load->view('admin/header');
			$this->load->view('admin/input_mahasiswa');
			$this->load->view('admin/footer');
			}
			else
				{
					$this->session->set_flashdata("save_mahasiswa","
					<p style='text-align:center; margin:0px;'> NIM Telah Terpakai</p>");
					header('location:'.base_url().'index.php/admin/data_mahasiswa');
				}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_mahasiswa($nim=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapusmhs($nim);
			$this->app_login_model->hapusmhs($nim);
			$this->session->set_flashdata('save_mahasiswa', "Data Berhasil Dihapus.");
			redirect('admin/data_mahasiswa');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}

	public function edit_mahasiswa($nim=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_mhs($nim)) redirect('admin/data_mahasiswa');
			$data['edit_mahasiswa'] = $this->app_login_model->editmhs($nim)->row();
			$this->load->view("admin/header");
			$this->load->view("admin/edit_mahasiswa",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function button_edit_mhs()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		$this->form_validation->set_rules('nim');
			$this->form_validation->set_rules('pass');
			$this->form_validation->set_rules('nama');
			$this->form_validation->set_rules('jk');
			$this->form_validation->set_rules('angkatan');
			$this->form_validation->set_rules('jurusan');
			
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/data_mahasiswa');
			}
		else
			{
					$this->app_login_model->updatemhs(
					$this->input->post('nim'),
					$this->input->post('pass'),
					$this->input->post('nama'),
					$this->input->post('jk'),
					$this->input->post('angkatan'),
					$this->input->post('jurusan')
					);
					$this->session->set_flashdata('save_mahasiswa', "Data Berhasil Dirubah.");
					redirect('admin/data_mahasiswa');
			}
		}
					
		else
		{
			header('location:'.base_url().'');
		}
	}		
	//end data mahasiswa


	//mulai mata kuliah
	
	public function data_mk()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			

			$d['tot'] = 0;
			
			$d['data_mk'] = $this->db->get("tbl_mk");

			$this->load->view('admin/header');	
			$this->load->view('admin/data_mk',$d);
			$this->load->view('admin/footer');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah_mk()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$simpan["kd_mk"] = $this->input->post("kd_mk");
			if($this->app_login_model->cek_kd_mk($simpan["kd_mk"])==0)
			{
			$this->form_validation->set_rules('kd_mk');
			$this->form_validation->set_rules('nama_mk');
			$this->form_validation->set_rules('jum_sks');
			$this->form_validation->set_rules('semester');
			$this->form_validation->set_rules('jurusan');
			
			
			if($this->form_validation->run() == TRUE){
			$this->app_login_model->inputmk(
			$this->input->post('kd_mk'),
			$this->input->post('nama_mk'),
			$this->input->post('jum_sks'),
			$this->input->post('semester'),
			$this->input->post('jurusan'),
			$simpan
			);
			$this->session->set_flashdata('save_mk', "Data Berhasil Ditambah");
			redirect('admin/data_mk');
			}

			$data['data_mk'] = $this->app_login_model->getmk();
			$this->load->view('admin/header');
			$this->load->view('admin/input_mk');
			$this->load->view('admin/footer');
			}
			else
				{
					$this->session->set_flashdata("save_mk","
					<p style='text-align:center; margin:0px;'> Kode MK Telah Terpakai</p>");
					header('location:'.base_url().'index.php/admin/data_mk');
				}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_mk($kd_mk=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapusmk($kd_mk);
			$this->app_login_model->hapusmk($kd_mk);
			$this->session->set_flashdata('save_mk', "Data Berhasil Dihapus.");
			redirect('admin/data_mk');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}

	public function edit_mk($kd_mk=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_mk($kd_mk)) redirect('admin/data_mk');
			$data['edit_mk'] = $this->app_login_model->editmk($kd_mk)->row();
			$this->load->view("admin/header");
			$this->load->view("admin/edit_mk",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function button_edit_mk()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		$this->form_validation->set_rules('kd_mk');
			$this->form_validation->set_rules('nama_mk');
			$this->form_validation->set_rules('jum_sks');
			$this->form_validation->set_rules('semester');
			$this->form_validation->set_rules('jurusan');
			
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/data_mk');
			}
		else
			{
					$this->app_login_model->updatemk(
					$this->input->post('kd_mk'),
					$this->input->post('nama_mk'),
					$this->input->post('jum_sks'),
					$this->input->post('semester'),
					$this->input->post('jurusan')
					);
					$this->session->set_flashdata('save_mk', "Data Berhasil Dirubah.");
					redirect('admin/data_mk');
			}
		}
					
		else
		{
			header('location:'.base_url().'');
		}
	}	
	//end mata kuliah
//mulai nilai
	public function nilai()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$d['tot'] = 0;
			
			$d['data_mk'] = $this->db->get("tbl_mk");
			$d['data_mhs'] = $this->db->get("tbl_mahasiswa");
			$d['data_grade'] = $this->db->get("tbl_grade");
			$d['data_nilai'] = $this->app_login_model->getnilai();

			$this->load->view('admin/header');	
			$this->load->view('admin/nilai',$d);
			$this->load->view('admin/footer');


		}
		else
		{
			header('location:'.base_url().'');
		}
	}	

	public function konversi() {
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
	        $angka = $this->input->post('txtTerbilang');
	        echo terbilang($angka);
        }
		else
		{
			header('location:'.base_url().'');
		}
    }

    public function tambah_nilai()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$simpan["kd_mk"] = $this->input->post("kd_mk");
			$simpan["nim"] = $this->input->post("nim");
			if($this->app_login_model->cek_kd_nilai($simpan["nim"],$simpan["kd_mk"])==0)
			{
			$this->form_validation->set_rules('nim');
			$this->form_validation->set_rules('kd_mk');
			$this->form_validation->set_rules('nilai');
			$this->form_validation->set_rules('semester');
			
			
			if($this->form_validation->run() == TRUE){
			$this->app_login_model->inputnilai(
			$this->input->post('nim'),
			$this->input->post('kd_mk'),
			$this->input->post('nilai'),
			$this->input->post('semester'),
			$simpan
			);
			$this->session->set_flashdata('save_nilai', "Data Berhasil Ditambah");
			redirect('admin/nilai');
			}

			$data['data_mk'] = $this->app_login_model->getmk();
			$this->load->view('admin/header');
			$this->load->view('admin/nilai');
			$this->load->view('admin/footer');
			}
			else
				{
					$this->session->set_flashdata("save_nilai","
					<p style='text-align:center; margin:0px;'> NIM dan matakuliah yang sama Telah Terpakai</p>");
					header('location:'.base_url().'index.php/admin/nilai');
				}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_nilai($id=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapusnilai($id);
			$this->app_login_model->hapusnilai($id);
			$this->session->set_flashdata('save_nilai', "Data Berhasil Dihapus.");
			redirect('admin/nilai');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}

		public function edit_nilai($id=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$data['data_mk'] = $this->db->get("tbl_mk");
			$data['data_mhs'] = $this->db->get("tbl_mahasiswa");
			$data['data_grade'] = $this->db->get("tbl_grade");
			$data['data_nilai'] = $this->app_login_model->getnilai();

			if(!$data['row']=$this->app_login_model->cek_kode_nilai($id)) redirect('admin/data_nilai');
			$data['edit_nilai'] = $this->app_login_model->editnilai($id)->row();
			$this->load->view("admin/header");
			$this->load->view("admin/edit_nilai",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function button_edit_nilai()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		$id=$this->input->post('id');
		$this->form_validation->set_rules('nim');
		$this->form_validation->set_rules('kd_mk');
		$this->form_validation->set_rules('nilai');
		$this->form_validation->set_rules('nilai_huruf','trim|required');
		$this->form_validation->set_rules('semester');
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/data_user');
			}
		else
			{
					$this->app_login_model->updatenilai(
					$this->input->post("id"),
					$this->input->post('nim'),
					$this->input->post('kd_mk'),
					$this->input->post('nilai'),
					$this->input->post('semester')
					);
					$this->session->set_flashdata('save_nilai', "Data Berhasil Dirubah.");
					redirect('admin/nilai');
			}
		}
					
		else
		{
			header('location:'.base_url().'');
		}
	}		

	//end nilai

	//mulai dosen



	public function data_dosen()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$d['data_dosen'] = $this->db->get("tbl_dosen");
			$this->load->view('admin/header');	
			$this->load->view('admin/data_dosen',$d);
			$this->load->view('admin/footer');			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	
	public function tambah_dosen()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{

			$simpan["nidn"] = $this->input->post("nidn");
			if($this->app_login_model->cek_nidn_dosen($simpan["nidn"])==0)
			{
			$this->form_validation->set_rules('nidn', 'NIDN');
			$this->form_validation->set_rules('nama', 'Nama');
			$this->form_validation->set_rules('jk', 'jk');
			$this->form_validation->set_rules('pend', 'Pend');
			$this->form_validation->set_rules('gelar', 'Gelar');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view("admin/header");
				$this->load->view("admin/input_dosen", array('error' => ' ' ));
				$this->load->view("admin/footer");
			}
			else
			{
			 	$config['upload_path']          = './foto/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
						$error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('save_dosen', "
										Gambar Tidak Boleh Kosong !!!
										Gambar optimal pada resolusi 1024x768 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif");
							redirect('admin/data_dosen',$error);		
				}
				else
				{
					$data=$this->upload->data();
					$foto=$data['orig_name'];
					$nidn=$this->input->post('nidn');
					$nama=$this->input->post('nama');
					$jk=$this->input->post('jk');
					$pend=$this->input->post('pend');
					$gelar=$this->input->post('gelar');
					$this->app_login_model->inputdosen($nidn,$nama,$jk,$pend,$gelar,$foto);
					$this->session->set_flashdata('save_dosen', "Data Berhasil Ditambah.");
					redirect('admin/data_dosen');	
				}
			}

			
		}

		else
		{
			$this->session->set_flashdata("save_dosen","
					<p style='text-align:center; margin:0px;'> NIDN Telah Terpakai</p>");
					header('location:'.base_url().'index.php/admin/data_dosen');
		}

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function hapus_dosen($nidn=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapusdosen($nidn);
			$this->app_login_model->hapusdosen($nidn);
			$this->session->set_flashdata('save_dosen', "Data Berhasil Dihapus.");
			redirect('admin/data_dosen');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}
	
	
	public function edit_dosen($nidn=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_nidn($nidn)) redirect('admin/data_dosen');
			$data = array('error' => '');
			$data['edit_dosen'] = $this->app_login_model->editdosen($nidn)->row();

			$this->load->view("admin/header");
			$this->load->view("admin/edit_dosen",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function button_edit_dosen()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
		
		$this->form_validation->set_rules('nidn', 'NIDN');
			$this->form_validation->set_rules('nama', 'Nama');
			$this->form_validation->set_rules('jk', 'jk');
			$this->form_validation->set_rules('pend', 'Pend');
			$this->form_validation->set_rules('gelar', 'Gelar');
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/edit_dosen');
			}
		else
			{
				$config['upload_path']          = './foto/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if (empty($_FILES['userfile']['name']))
				{
					
					$nidn=$this->input->post('nidn');
					$nama=$this->input->post('nama');
					$jk=$this->input->post('jk');
					$pend=$this->input->post('pend');
					$gelar=$this->input->post('gelar');
					$this->app_login_model->updatedos($nidn,$nama,$jk,$pend,$gelar);
					
					$this->session->set_flashdata('save_dosen', "Data Berhasil Dirubah.");
					redirect('admin/data_dosen');
				}
				else
				{
					if(!$this->upload->do_upload())
						{
							$error = array('error' => $this->upload->display_errors());
							$this->session->set_flashdata('save_artikel', "
										Gambar optimal pada resolusi 1024x768 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif");
							redirect('admin/data_dosen',$error);	
						}
						$data=$this->upload->data();
					$foto=$data['orig_name'];
					$nidn=$this->input->post('nidn');
					$nama=$this->input->post('nama');
					$jk=$this->input->post('jk');
					$pend=$this->input->post('pend');
					$gelar=$this->input->post('gelar');
					$this->app_login_model->updatedosen($nidn,$nama,$jk,$pend,$gelar,$foto);
					$this->session->set_flashdata('save_dosen', "Data Berhasil Dirubah.");
					
					redirect('admin/data_dosen');		
				}
				
			}
		}

		else
		{
			header('location:'.base_url().'');
		}
	}		

	//end dosen

	//mulai pmb
	
	public function pmb()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			
			$d['data_pmb'] = $this->db->get("tbl_pmb");

			$this->load->view('admin/header');	
			$this->load->view('admin/pmb',$d);
			$this->load->view('admin/footer');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah_pmb()
	{

		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$simpan["tgl_awal"] = $this->input->post("tgl_awal");
			$simpan["tgl_akhir"] = $this->input->post("tgl_akhir");

			if($simpan["tgl_awal"] < $simpan["tgl_akhir"] ){

			$this->form_validation->set_rules('ket');
			$this->form_validation->set_rules('tgl_awal','trim|required');
			$this->form_validation->set_rules('tgl_akhir');
			$this->form_validation->set_rules('status');
			
			if($this->form_validation->run() == TRUE){
			$this->app_login_model->inputpmb(
			$this->input->post('ket'),
			$this->input->post('tgl_awal'),
			$this->input->post('tgl_akhir'),
			$this->input->post('status')
			);
			$this->session->set_flashdata('save_pmb', "Data Berhasil Ditambah");
			redirect('admin/pmb');
				}

			}
			else{
			$this->session->set_flashdata('save_pmb', "Periksa tanggalnya");
			redirect('admin/pmb');	
			}
			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_pmb($id_pmb=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			$hapus = $this->app_login_model->hapuspmb($id_pmb);
			$this->app_login_model->hapuspmb($id_pmb);
			$this->session->set_flashdata('save_pmb', "Data Berhasil Dihapus.");
			redirect('admin/pmb');
		}
		else
		{
			header('location:'.base_url().'');
		}	
	}

	public function edit_pmb($id_pmb=0)
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			if(!$data['row']=$this->app_login_model->cek_kode_pmb($id_pmb)) redirect('admin/pmb');
//			$data['edit_dosen'] = $this->app_login_model->editdosen($nidn)->row();

			$data['edit_pmb'] = $this->app_login_model->editpmb($id_pmb)->row();
			$this->load->view("admin/header");
			$this->load->view("admin/edit_pmb",$data);
			$this->load->view("admin/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function button_edit_pmb()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('status')=="admin")
		{
			
			$this->form_validation->set_rules('ket');
			$this->form_validation->set_rules('tgl_awal');
			$this->form_validation->set_rules('tgl_akhir');
			$this->form_validation->set_rules('status');
				
		if($this->form_validation->run() == FALSE)
			{
				redirect('admin/pmb');
			}
		else
			{
					$this->app_login_model->updatepmb(
					$this->input->post('id_pmb'),
					$this->input->post('ket'),
					$this->input->post('tgl_awal'),
					$this->input->post('tgl_akhir'),
					$this->input->post('status')
					);
					$this->session->set_flashdata('save_pmb', "Data Berhasil Dirubah.");
					redirect('admin/pmb');
			}
		}
					
		else
		{
			header('location:'.base_url().'');
		}
	}	
	//end pmb
}	