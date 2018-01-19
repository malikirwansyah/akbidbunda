 

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
				<div class="box-icon">
			<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
		</div>
				<a href="#" class="medium-box"><i class="icon-plus-sign icon-white"></i> Input PMB</a>

				
			</div>
	 <div class="box-content">
		  <?php if($this->session->flashdata('save_pmb')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_pmb'); ?>
	</div>
	<?php } ?>
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/tambah_pmb" class="form-horizontal" >
			
			<div class="control-group">
                    
		
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Keterangan</label>
					<div class="col-sm-5">
							<input required type="text" class="form-control" name="ket">
					</div>		
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Dimulai Tanggal</label>
					<div class="col-sm-3">
							<input required type="text" class="form-control datepicker" id="dp1" name="tgl_awal">
					</div>		
				</div>


				<div class="form-group">
					<label class="col-sm-4 control-label">Sampai Tanggal </label>
					<div class="col-sm-3">
							<input required type="text" class="form-control datepicker" id="dp2" name="tgl_akhir">
					</div>		
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Status Pendaftaran</label>
					<div class="col-sm-2">
							<select name="status" class="form-control">
								<option value="Buka">Buka</option>
								<option value="Tutup">Tutup</option>
							</select>
					</div>		
				</div>

				
				

			
			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default" value="tambah"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Tambah</button>
					
				</div>
			</div>
			</form>
	
		
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 


<!-- tampilkan tabl nilai-->
	<br/>
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<div class="box-icon">
			<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
		</div>

				<a href="#" class="medium-box"> Informasi PMB</a>

				
			</div>
	 <div class="box-content">
	 
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>Keterangan	</th>
		<th>Dimulai Tanggal </th>
		<th>Sampai Tanggal</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=0+1;
		foreach($data_pmb->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['ket']; ?></td>
		<td><?php echo $dp['tgl_awal']; ?></td>
		<td><?php echo $dp['tgl_akhir']; ?></td>
		<td><?php echo $dp['status']; ?></td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_pmb/<?php echo $dp['id_pmb'];?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_pmb/<?php echo $dp['id_pmb']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a> |
			
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

 