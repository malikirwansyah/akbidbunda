<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Login_Model extends CI_Model {
//login model admin
	public function getLoginData($data)
	{	
		$login['username'] = $data['username'];
		$login['password'] = $data['password'];
		$cek = $this->db->get_where('tbl_login', $login);
		if($cek->num_rows()>0)
		{
			foreach($cek->result() as $qad)
			{
				$sess_data['logged_in'] = 'yesGetMeLoginBaby';
				$sess_data['id_user'] = $qad->id_user_login;
				$sess_data['username'] = $qad->username;
				$sess_data['nama'] = $qad->nama_lengkap;
				$sess_data['status'] = $qad->status;
				$this->session->set_userdata($sess_data);
			}
			header('location:'.base_url().'index.php/app/target');
		}
		else
		{
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan salah");
			header('location:'.base_url().'index.php/app/target');
		}
	}


	public function update_pass($data){
		$this->db->where('username',$this->session->userdata('username'));
		$this->db->update('tbl_login',$data);
	}
	public function update_name($data){
		$this->db->where('username',$this->session->userdata('username'));
		$this->db->update('tbl_login',$data);
	}

//mahasiswa

	public function AmbilData($data)
	{	
		$masuk['nim'] = $data['nim'];
		$masuk['pass'] = $data['pass'];
		$cek = $this->db->get_where('tbl_mahasiswa', $masuk);
		if($cek->num_rows()>0)
		{
			foreach($cek->result() as $qad)
			{
				$sess_data['login_be'] = 'sayamasuk';
				$sess_data['nim'] = $qad->nim;
				$sess_data['pass'] = $qad->pass;
				$sess_data['nama'] = $qad->nama;
				$sess_data['jk'] = $qad->jk;
				$sess_data['angkatan'] = $qad->angkatan;
				$sess_data['jurusan'] = $qad->jurusan;
				$this->session->set_userdata($sess_data);
			}
			header('location:'.base_url().'index.php/app/login_mhs');
		}
		else
		{
			$this->session->set_flashdata('result_masuk', "Maaf, kombinasi username dan password yang anda masukkan salah");
			header('location:'.base_url().'index.php/app/login_mhs');
		}
	}


	public function update_password($data){
		$this->db->where('nim',$this->session->userdata('nim'));
		$this->db->update('tbl_mahasiswa',$data);
	}
	public function update_nama($data){
		$this->db->where('nim',$this->session->mhsdata('nim'));
		$this->db->update('tbl_mahasiswa',$data);
	}

//end login	


	//mulai user

	public function cek_kd_user($username) {
		$q = $this->db->query(" SELECT * FROM tbl_login WHERE username='".$username."'");
		$hasil = 0;
		if($q->num_rows()>0)
		{
			$hasil = 1;
		}
		return $hasil;
	}

	public function getuser()
	{
		$query = $this->db->query("SELECT * FROM tbl_login ORDER BY status ");
		return $query;
	}

	public function inputuser($username,$password,$nama_lengkap,$status)
	{
		$this->db->query("INSERT INTO tbl_login VALUES('','$username','$password','$nama_lengkap','$status')");
	}

	public function hapususer($id_login){
		$query = $this->db->query("DELETE FROM tbl_login WHERE id_login = '$id_login'");
	}
	public function cek_kode_user($id_login){
		$q=$this->db->query("select * from tbl_login
		where id_login='$id_login'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}
	public function edituser($id_login){
	$query = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$id_login'");
	return $query;
	}

	public function updateuser($id_login,$username,$password,$nama_lengkap,$status){
		$query = $this->db->query("UPDATE tbl_login 
									SET username='$username',
									password='$password',
									nama_lengkap='$nama_lengkap',
									status='$status'
									WHERE id_login = '$id_login'
								");
	}

	//end user

//admin artikel
	
	public function getartikel($offset,$limit)
	{
		$query = $this->db->query("SELECT * FROM tbl_artikel ORDER BY id LIMIT ".$offset.",".$limit."");
		return $query;
	}
	
	public function inputartikel($judul,$ket,$foto)
	{
		$this->db->query("INSERT INTO tbl_artikel VALUES('','$judul','$ket','$foto',NOW())");
	}
	
	public function hapusartikel($id){
		$query = $this->db->query("DELETE FROM tbl_artikel WHERE id = '$id'");
	}
	
	public function cek_kode_artikel($id){
		$q=$this->db->query("select * from tbl_artikel
		where id='$id'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}
	
	public function editartikel($id){
	$query = $this->db->query("SELECT * FROM tbl_artikel WHERE id = '$id'");
	return $query;
	}
	
	public function updateartikel($id,$judul,$ket,$foto){
		$query = $this->db->query("UPDATE tbl_artikel 
									SET judul='$judul',
									ket='$ket',
									foto='$foto',
									created = NOW()
									WHERE id = '$id'
								");
	}
	public function updatear($id,$judul,$ket){
		$query = $this->db->query("UPDATE tbl_artikel 
									SET judul='$judul',
									ket='$ket',
									created = NOW()
									WHERE id = '$id'
								");
	}

//end admin artikel

//mulai data mahasiswa
public function cek_kd_mhs($nim) {
		$q = $this->db->query(" SELECT * FROM tbl_mahasiswa WHERE nim='".$nim."'");
		$hasil = 0;
		if($q->num_rows()>0)
		{
			$hasil = 1;
		}
		return $hasil;
	}

	public function getmhs()
	{
		$query = $this->db->query("SELECT * FROM tbl_mahasiswa ORDER BY nim");
		return $query;
	}

	public function inputmhs($nim,$pass,$nama,$jk,$angkatan,$jurusan)
	{
		$this->db->query("INSERT INTO tbl_mahasiswa VALUES('$nim','$pass','$nama','$jk','$angkatan','$jurusan')");
	}

	public function hapusmhs($nim){
		$query = $this->db->query("DELETE FROM tbl_mahasiswa WHERE nim = '$nim'");
	}

	public function cek_kode_mhs($nim){
		$q=$this->db->query("select * from tbl_mahasiswa
		where nim='$nim'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}

	public function editmhs($nim){
	$query = $this->db->query("SELECT * FROM tbl_mahasiswa WHERE nim = '$nim'");
	return $query;
	}

	public function updatemhs($nim,$pass,$nama,$jk,$angkatan,$jurusan){
		$query = $this->db->query("UPDATE tbl_mahasiswa 
									SET pass='$pass',
									nama='$nama',
									jk='$jk',
									angkatan='$angkatan',
									jurusan='$jurusan'
									WHERE nim = '$nim'
								");
	}
	

//end ata mahasiswa

	//mulai mk
	public function cek_kd_mk($kd_mk) {
		$q = $this->db->query(" SELECT * FROM tbl_mk WHERE kd_mk='".$kd_mk."'");
		$hasil = 0;
		if($q->num_rows()>0)
		{
			$hasil = 1;
		}
		return $hasil;
	}

	public function getmk()
	{
		$query = $this->db->query("SELECT * FROM tbl_mk ORDER BY kd_mk");
		return $query;
	}

	public function inputmk($kd_mk,$nama_mk,$jum_sks,$semester,$jurusan)
	{
		$this->db->query("INSERT INTO tbl_mk VALUES('$kd_mk','$nama_mk','$jum_sks','$semester','$jurusan')");
	}

	public function hapusmk($kd_mk){
		$query = $this->db->query("DELETE FROM tbl_mk WHERE kd_mk = '$kd_mk'");
	}

	public function cek_kode_mk($kd_mk){
		$q=$this->db->query("select * from tbl_mk
		where kd_mk='$kd_mk'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}

	public function editmk($kd_mk){
		$query = $this->db->query("SELECT * FROM tbl_mk WHERE kd_mk = '$kd_mk'");
		return $query;
	}

	public function updatemk($kd_mk,$nama_mk,$jum_sks,$semester,$jurusan){
		$query = $this->db->query("UPDATE tbl_mk 
									SET nama_mk='$nama_mk',
									jum_sks='$jum_sks',
									semester='$semester',
									jurusan='$jurusan'
									WHERE kd_mk = '$kd_mk'
								");
	}
	//end mk

	//mulai nilai
	public function cek_kd_nilai($nim,$kd_mk) {
		$q = $this->db->query("SELECT * FROM tbl_nilai WHERE nim='".$nim."' && kd_mk='".$kd_mk."'");
		$hasil = 0;
		if($q->num_rows()>0)
		{
			$hasil = 1;
		}
		return $hasil;
	}
	public function getnilai()
	{
		$query = $this->db->query("SELECT tbl_nilai.*,tbl_mk.nama_mk FROM tbl_nilai,tbl_mk WHERE tbl_nilai.kd_mk=tbl_mk.kd_mk ORDER BY nim ");
		return $query;
	}
	public function inputnilai($nim,$kd_mk,$nilai,$semester)
	{
		$this->db->query("INSERT INTO tbl_nilai VALUES('','$nim','$kd_mk','$nilai','$semester')");
	}

	public function hapusnilai($id){
		$query = $this->db->query("DELETE FROM tbl_nilai WHERE id = '$id'");
	}

	public function cek_kode_nilai($id){
		$q=$this->db->query("select * from tbl_nilai
		where id='$id'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}

	public function editnilai($id){
	$query = $this->db->query("SELECT * FROM tbl_nilai WHERE id = '$id'");
	return $query;
	}
	public function updatenilai($id,$nim,$kd_mk,$nilai,$semester){
		$query = $this->db->query("UPDATE tbl_nilai 
									SET kd_mk='$kd_mk',
									nilai='$nilai',
									semester='$semester'
									WHERE id = '$id'
								");
	}
	//end nilai

	//mulai dosen
	public function cek_nidn_dosen($nidn) {
		$q = $this->db->query(" SELECT * FROM tbl_dosen WHERE nidn='".$nidn."'");
		$hasil = 0;
		if($q->num_rows()>0)
		{
			$hasil = 1;
		}
		return $hasil;
	}

	public function inputdosen($nidn,$nama,$jk,$pend,$gelar,$foto)
	{
		$this->db->query("INSERT INTO tbl_dosen VALUES('$nidn','$nama','$jk','$pend','$gelar','$foto')");
	}

	public function hapusdosen($nidn){
		$query = $this->db->query("DELETE FROM tbl_dosen WHERE nidn = '$nidn'");
	}

	public function cek_kode_nidn($nidn){
		$q=$this->db->query("select * from tbl_dosen
		where nidn='$nidn'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}

	public function editdosen($nidn){
	$query = $this->db->query("SELECT * FROM tbl_dosen WHERE nidn = '$nidn'");
	return $query;
	}
	
	public function updatedos($nidn,$nama,$jk,$pend,$gelar){
		$query = $this->db->query("UPDATE tbl_dosen 
									SET nama='$nama',
									jk='$jk',
									pend='$pend',
									gelar='$gelar'
									WHERE nidn = '$nidn'
								");
	}
	public function updatedosen($nidn,$nama,$jk,$pend,$gelar,$foto){
		$query = $this->db->query("UPDATE tbl_dosen 
									SET nama='$nama',
									jk='$jk',
									pend='$pend',
									gelar='$gelar',
									foto='$foto'
									WHERE nidn = '$nidn'
								");
	}

	

	//end dosen

	//mulai pmb

	public function inputpmb($ket,$tgl_awal,$tgl_akhir,$status)
	{
		$this->db->query("INSERT INTO tbl_pmb VALUES('','$ket','$tgl_awal','$tgl_akhir','$status')");
	}
	public function hapuspmb($id_pmb){
		$query = $this->db->query("DELETE FROM tbl_pmb WHERE id_pmb = '$id_pmb'");
	}

	public function cek_kode_pmb($id_pmb){
		$q=$this->db->query("select * from tbl_pmb
		where id_pmb='$id_pmb'");
		if($q->num_rows()>0){
			return $row=$q->row();
		}else{
			return array();
		}
	}
	

	public function editpmb($id_pmb)
	{
		$query = $this->db->query("SELECT * FROM tbl_pmb WHERE id_pmb = '$id_pmb'");
		return $query;
	}
	public function updatepmb($id_pmb,$ket,$tgl_awal,$tgl_akhir,$status){
		$query = $this->db->query("UPDATE tbl_pmb 
									SET ket='$ket',
									tgl_awal='$tgl_awal',
									tgl_akhir='$tgl_akhir',
									status='$status'
									WHERE id_pmb = '$id_pmb'
								");
	}
	//end pmb
	
	//end admin

	//mulai mahasiswa

	//nilai mahasiswa


	function check_name($nim) {
		
			$this->db->where("nim", $nim);
			$query = $this->db->get("tbl_mahasiswa");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data_ambil['nim'] = $row->nim;
					$data_ambil['nama'] = $row->nama;
					$data_ambil['jk'] = $row->jk;
					$data_ambil['angkatan'] = $row->angkatan;
					$data_ambil['jurusan'] = $row->jurusan;
					$data_ambil['kelas'] = $row->kelas;
					$this->session->set_userdata($data_ambil);
				}
				return true;
		}
	}

	public function ambil_nilai($nim){
		return $this->db->query('
				SELECT tbl_nilai.nim, tbl_mahasiswa.nama, tbl_nilai.kd_mk,tbl_nilai.nama_mk, tbl_nilai.jum_sks, tbl_nilai.nilai, tbl_nilai.huruf, tbl_grade.grade, (tbl_nilai.jum_sks * tbl_grade.grade) AS J_X_G 
FROM (
    SELECT tbl_nilai.nim, tbl_nilai.kd_mk,tbl_mk.jum_sks,tbl_mk.nama_mk,tbl_nilai.nilai,
    CASE 
    when tbl_nilai.nilai >= 80 AND tbl_nilai.nilai <=100 THEN "A" 
    when tbl_nilai.nilai >= 68 AND tbl_nilai.nilai <=79.99 THEN "B" 
    when tbl_nilai.nilai >= 56 AND tbl_nilai.nilai <=67.99 THEN "C" 
    when tbl_nilai.nilai >= 45 AND tbl_nilai.nilai <=55.99 THEN "D" 
    ELSE "E" END AS huruf 
    FROM tbl_nilai LEFT JOIN tbl_mk ON tbl_nilai.kd_mk=tbl_mk.kd_mk 
    WHERE tbl_nilai.nim="'.$nim.'")AS tbl_nilai LEFT JOIN tbl_grade ON tbl_nilai.huruf=tbl_grade.nilai 
    LEFT JOIN tbl_mahasiswa ON tbl_nilai.nim=tbl_mahasiswa.nim 


				');
	}

	public function ambil_nilai_tahun($nim,$kata){
		return $this->db->query('
				SELECT tbl_nilai.nim, tbl_mahasiswa.nama, tbl_nilai.kd_mk,tbl_nilai.nama_mk, tbl_nilai.jum_sks, tbl_nilai.nilai, tbl_nilai.huruf, tbl_grade.grade, (tbl_nilai.jum_sks * tbl_grade.grade) AS J_X_G 
FROM (
    SELECT tbl_nilai.nim, tbl_nilai.kd_mk,tbl_mk.jum_sks,tbl_mk.nama_mk,tbl_nilai.nilai,
    CASE 
    when tbl_nilai.nilai >= 80 AND tbl_nilai.nilai <=100 THEN "A" 
    when tbl_nilai.nilai >= 68 AND tbl_nilai.nilai <=79.99 THEN "B" 
    when tbl_nilai.nilai >= 56 AND tbl_nilai.nilai <=67.99 THEN "C" 
    when tbl_nilai.nilai >= 45 AND tbl_nilai.nilai <=55.99 THEN "D" 
    ELSE "E" END AS huruf 
    FROM tbl_nilai LEFT JOIN tbl_mk ON tbl_nilai.kd_mk=tbl_mk.kd_mk 
    WHERE tbl_nilai.nim="'.$nim.'" and tbl_nilai.semester="'.$kata.'")AS tbl_nilai LEFT JOIN tbl_grade ON tbl_nilai.huruf=tbl_grade.nilai 
    LEFT JOIN tbl_mahasiswa ON tbl_nilai.nim=tbl_mahasiswa.nim 


				');
	}
	//end nilai mahasiswa
	//end mahasiswa
}	