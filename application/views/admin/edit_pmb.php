 

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
				<a href="#" class="medium-box"><i class="icon-plus-sign icon-white"></i> Edit PMB</a>

				
			</div>
	 <div class="box-content">
		  <?php if($this->session->flashdata('save_pmb')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_pmb'); ?>
	</div>
	<?php } ?>
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/button_edit_pmb" class="form-horizontal" >
			
			<div class="control-group">
                    
		<input required type="hidden" class="form-control" name="id_pmb" value="<?php echo $edit_pmb->id_pmb ?>">
					
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Keterangan</label>
					<div class="col-sm-5">
							<input required type="text" class="form-control" name="ket" value="<?php echo $edit_pmb->ket ?>">
					</div>		
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Dimulai Tanggal</label>
					<div class="col-sm-3">
							<input required type="text" class="form-control datepicker" id="dp1" name="tgl_awal" value="<?php echo $edit_pmb->tgl_awal ?>">
					</div>		
				</div>


				<div class="form-group">
					<label class="col-sm-4 control-label">Sampai Tanggal </label>
					<div class="col-sm-3">
							<input required type="text" class="form-control datepicker" id="dp2" name="tgl_akhir" value="<?php echo $edit_pmb->tgl_akhir ?>">
					</div>		
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Status Pendaftaran</label>
					<div class="col-sm-2">
							<select name="status" class="form-control">
								<option value="<?php echo $edit_pmb->status ?>"><?php echo $edit_pmb->status ?></option>
								<option value="Buka">Buka</option>
								<option value="Tutup">Tutup</option>
							</select>
					</div>		
				</div>

				
				

			
			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default" value="tambah"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/pmb"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				
				</div>
			</div>
			</form>
	
		
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 


<!-- tampilkan tabl nilai-->
	
</div><!--row-->	 

 