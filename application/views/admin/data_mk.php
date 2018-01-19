

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
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_mk" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Mata Kuliah</a>

				
			</div>
	 <div class="box-content">
	 
	   <?php if($this->session->flashdata('save_mk')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_mk'); ?>
	</div>
	<?php } ?>
	
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>Jumlah SKS</th>
		<th>Semester</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=$tot+1;
		foreach($data_mk->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['kd_mk']; ?></td>
		<td><?php echo $dp['nama_mk']; ?></td>
		<td><?php echo $dp['jum_sks']; ?></td>
		<td><?php echo $dp['semester']; ?></td>
		
		<td><?php echo $dp['jurusan']; ?></td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_mk/<?php echo $dp['kd_mk'];?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_mk/<?php echo $dp['kd_mk']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a> |
			
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

 