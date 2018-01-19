

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
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_dosen" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Dosen</a>

				
			</div>
	 <div class="box-content">
	 
	   <?php if($this->session->flashdata('save_dosen')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_dosen'); ?>
	</div>
	<?php } ?>
	
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>NIDN</th>
		<th>Nama</th>
		<th>Jenis Klamin</th>
		<th>Pendidikan</th>
		<th>Gelar</th>
		<th>Foto</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=0+1;
		foreach($data_dosen->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['nidn']; ?></td>
		<td><?php echo $dp['nama']; ?></td>
		<td><?php echo $dp['jk']; ?></td>
		<td><?php echo $dp['pend']; ?></td>
		<td><?php echo $dp['gelar']; ?></td>
		<td><img src="<?php echo base_url(); ?>foto/<?php echo $dp['foto']; ?>"  alt="" class="img-responsive" style="float:left;padding: 3px;
margin: 3px 5px 3px 0;
max-width:200px; 
max-height:130px;
min-width:200px; 
min-height:130px;
border: 1px solid #999999;"/> </td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_dosen/<?php echo $dp['nidn']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit</a> |
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_dosen/<?php echo $dp['nidn']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a>
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

 