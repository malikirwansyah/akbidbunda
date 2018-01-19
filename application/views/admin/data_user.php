

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
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah User</a>
				
			</div>
	 <div class="box-content">

	   <?php if($this->session->flashdata('save_user')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_user'); ?>
	</div>
	<?php } ?>
	
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	  <tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nama Lengkap</th>
		<th>Status</th>
		<th>Aksi</th>
	  </tr>
	</thead>
	<tbody>
	<?php
		$no=$tot+1;
		foreach($data_user->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['username']; ?></td>
		<td><?php echo $dp['password']; ?></td>
		<td><?php echo $dp['nama_lengkap']; ?></td>
		<td><?php echo $dp['status']; ?></td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_user/<?php echo $dp['id_login']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit</a> |
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_user/<?php echo $dp['id_login']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a>
		</td>
	  </tr>
	 <?php
			$no++;
		}
	 ?>
	</tbody>
  </table>
  
	 </div>
	 	</div>
	</div>
</div>		


  