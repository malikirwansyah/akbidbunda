

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
				<a href="<?php echo base_url(); ?>index.php/admin/tambah_artikel" class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Artikel</a>

				
			</div>
	 <div class="box-content">
	 
	   <?php if($this->session->flashdata('save_artikel')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_artikel'); ?>
	</div>
	<?php } ?>
	
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>Judul</th>
		<th>Foto</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=0+1;
		foreach($data_artikel->result() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo word_limiter ($dp->judul,'5'); ?></td>
		<td><img src="<?php echo base_url(); ?>foto/<?php echo $dp->foto; ?>"  alt="" class="img-responsive" style="float:left;padding: 3px;
margin: 3px 5px 3px 0;
max-width:200px; 
max-height:130px;
min-width:200px; 
min-height:130px;
border: 1px solid #999999;"/>     </td>
		<td><?php echo character_limiter ($dp->ket, '300'); ?>...</td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_artikel/<?php echo $dp->id;?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_artikel/<?php echo $dp->id; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a> |
			<a href="<?php echo base_url();?>index.php/app/baca/<?php echo $dp->id;?>" target="_blank">Selengkapnya</a>
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

 