
	<div class="container">

	<!-- mulai mobile -->
<div class="col-sm-2 col-lg-2">
	<div class="sidebar-nav">
		<div class="nav-canvas">
		  <div class="nav-sm nav nav-stacked">
		  </div>
		</div>
	</div>
</div>
	<!--end mobile-->

<div id="content" class="col-lg-12 col-sm-12">
			<!-- content starts -->
				<div>
		<br/>
	</div>
<div class="alert alert-info">
	  selamat datang kembali, <b><?php echo $this->session->userdata('nama'); ?></b> ^_^
	  <button type="button" class="close" data-dismiss="alert">X</button>
</div>

 <?php if($this->session->flashdata('save_cari')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_cari'); ?>
	</div>
	<?php } ?>

<div class="row">
	<div class="box col-md-12">
		
	
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Nim</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata('nim'); ?>" disabled /></div>

  <div class="col-md-2"><label for="test">Angkatan</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="angkatan" disabled value="<?php echo $this->session->userdata('angkatan'); ?>" /></div>
</div>
<br />
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Nama</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama'); ?>"disabled /></div>

  <div class="col-md-2"><label for="test">Program Studi</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="jurusan" value="<?php echo $this->session->userdata('jurusan'); ?>"disabled /></div>
</div>
<br />
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Jenis Kelamin</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="jk"disabled value="<?php echo $this->session->userdata('jk'); ?>" /></div>

   <div class="col-md-2"><label for="test">Semester</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="jk"disabled value="<?php echo $this->session->userdata('kata'); ?>" /></div>

</div>

<br/>
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<a href="<?php echo base_url(); ?>index.php/mahasiswa/export_per/" class="medium-box"><i class="glyphicon glyphicon-print"></i> Export to PDF</a>

				
			</div>

	 <div class="box-content">
	 	
	<?php 
		$temp='';
		$rows=array();
		$totalNH=0;	
		$totalSKS=0;
		$no=1;
		?>	
		<div>
			<table class="table table-bordered">
	<thead>
	<tr>
		<th>No.</th>
		<th>Kode Mata Kuliah</th>
		<th>Mata Kuliah</th>
		<th>SKS</th>
		<th>Nilai Angka</th>
		<th>Nilai Huruf</th>
		<th>Bobot</th>
		<th>Kredit</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		
		<?php
		foreach($khs->result_array() as $value)
		{
			if($temp=='')
			{
				$rows[]='<tr>
				</tr>';
				$rows[]='<tr>
				<td>'. $no.'</td>
				<td>'. $value['kd_mk'].'</td>
				<td>&nbsp;'. $value['nama_mk'].'</td>
				<td align="center">'. $value['jum_sks'].'&nbsp;</td>
				<td align="center">'. $value['nilai'].'</td>
				<td align="center">'. $value['huruf'].'</td>
				<td align="center">'. $value['grade'].'</td>
				<td align="center">'. $value['J_X_G'].'</td>';
				$no++;
				$totalNH=0;
				$totalSKS=0;
			}		
			else 
			{ 
				$rows[]='<tr>
				<td>'. $no.'</td>
				<td>'. $value['kd_mk'].'</td>
				<td>&nbsp;'. $value['nama_mk'].'</td>
				<td align="center">'. $value['jum_sks'].'</td>
				<td align="center">'. $value['nilai'].'</td>
				<td align="center">'. $value['huruf'].'</td>
				<td align="center">'. $value['grade'].'</td>
				<td align="center">'. $value['J_X_G'].'</td>
			</tr>';
			$no++;

			}
			if($value['grade'] != 'T') {
				$totalNH +=$value['J_X_G'];
				$totalSKS+=$value['jum_sks'];
			}
			$temp=$value['nilai'];

		}
		$ip = 0;
		if($totalNH !=0)			
			$ip = round($totalNH/$totalSKS, 2);
		$rows[]='
				
				<td colspan="3">Jumlah SKS</td>
				<td>'.$totalSKS.'</td>
				<td colspan="3">Jumlah Kredit</td>
				<td> '.$totalNH.'</td>
				</tr>
				<tr>
					<td colspan="8">INDEK KOMULATIF : '.$ip.'</td>
				</tr>';

		foreach($rows as $row)
		{
			echo $row;
		}
		?>

	</tr>
	</tbody>
	</table>
		</div>
	</div><!--box-content-->
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 
</div><!--row-->	 

 