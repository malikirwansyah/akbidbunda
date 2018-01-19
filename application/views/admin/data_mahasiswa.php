

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
		
	</div>



<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_mahasiswa" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Mahasiswa</a>

				
			</div>
	 <div class="box-content">
	 
	   <?php if($this->session->flashdata('save_mahasiswa')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_mahasiswa'); ?>
	</div>
	<?php } ?>
	
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>Nim</th>
		<th>Password</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Angkatan</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=$tot+1;
		foreach($data_mahasiswa->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['nim']; ?></td>
		<td><?php echo $dp['pass']; ?></td>
		<td><?php echo $dp['nama']; ?></td>
		<td><?php echo $dp['jk']; ?></td>
		<td><?php echo $dp['angkatan']; ?></td>
		<td><?php echo $dp['jurusan']; ?></td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_mahasiswa/<?php echo $dp['nim'];?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_mahasiswa/<?php echo $dp['nim']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a> |
			
		</td>
	  </tr>
	<?php
			$no++;
		}
	 ?>
	</tbody>
	</table>
		
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 
</div><!--row-->	 

 