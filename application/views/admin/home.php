
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


<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_pegawai" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Pegawai</a>

				
			</div>
	 <div class="box-content">
	 
	   <?php if($this->session->flashdata('save_pegawai')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_pegawai'); ?>
	</div>
	<?php } ?>
	
		<?php echo form_open("admin/cari", 'class="navbar-form pull-right"'); ?>
		  <input type="text" class="form-control" name="cari">
		  <button type="submit" class="btn btn-info"><i class="icon-search icon-white"></i> Cari Nama Pegawai</button>
		<?php echo form_close(); ?><br /><br /><br />
		<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<tr>
		<th>No.</th>
		<th>NIP</th>
		<th>Nama pegawai</th>
		<th>Jabatan</th>
		<th>Mengajar </th>
		<th>Jenis Kelamin</th>
		<th>Pend. Terakhir</th>
		<th>Gelar</th>
		<th>TMT</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=$tot+1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['nip']; ?></td>
		<td><?php echo $dp['nama']; ?></td>
		<td><?php echo $dp['jabatan']; ?></td>
		<td><?php echo $dp['mengajar']; ?></td>
		<td><?php echo $dp['jk']; ?></td>
		<td><?php echo $dp['pend']; ?></td>
		<td><?php echo $dp['gelar']; ?></td>
		<td><?php echo $dp['tmt']; ?></td>
		<td><?php echo $dp['status']; ?></td>
		
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_pegawai/<?php echo $dp['nip']; ?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_pegawai/<?php echo $dp['nip']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a>
		</td>
	  </tr>
	<?php
			$no++;
		}
	 ?>
	</tbody>
	</table>
		<ul class="pagination">
			<li><?php
			echo $paginator;
			?></li>
		</ul>


	</div>
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 
</div><!--row-->	 

 