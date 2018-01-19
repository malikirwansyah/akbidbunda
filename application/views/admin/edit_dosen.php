

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

   <div class="box-inner">
  <div class="box-content">
  <br/>
  
	<form method="post" action="<?php echo base_url(); ?>index.php/admin/button_edit_dosen" enctype="multipart/form-data" class="form-horizontal" name="form1">
			<div class="form-group">
				<label class="col-sm-3 control-label">NIDN</label>
					<div class="col-sm-7">
						<input required type="text" readonly class="form-control" value="<?php echo $edit_dosen->nidn ?>" name="nidn" value="" />
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-7">
						<input required type="text" value="<?php echo $edit_dosen->nama?>" class="form-control" name="nama" value="" />
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Jenis Kelamin</label>
					<div class="col-sm-4 ">
						<select name="jk" required class="form-control">
						<option value="<?php echo $edit_dosen->jk ?>"><?php echo $edit_dosen->jk ?></option>
							<option value="Laki-Laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Pendidikan</label>
					<div class="col-sm-7">
						<input required type="text" class="form-control" value="<?php echo $edit_dosen->pend ?>" name="pend" value="" />
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Gelar</label>
					<div class="col-sm-7">
						<input required type="text" class="form-control" value="<?php echo $edit_dosen->gelar ?>" name="gelar" value="" />
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Foto</label>
					<div class="col-sm-7">
					<div class="alert alert-info">  
										<a class="close" data-dismiss="alert">x</a>  
										Info! <br/>
										Gambar optimal pada resolusi 1024x768 px<br/>
										Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
										File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif
					</div>
						

		<div class="fileinput fileinput-new" data-provides="fileinput" >
		<div class="fileinput-new thumbnail">
			<img class="img-responsive" src="<?php echo base_url(); ?>foto/<?php echo $edit_dosen->foto; ?>">
		</div>
		  <div class="fileinput-preview fileinput-exists thumbnail"></div>
		  <div>
			<span class="btn btn-file btn-default ">
			<input type="file" name="userfile"  >
			<span class="fileinput-new"><i class="fa fa-camera"></i> Ganti</span>
				
				<span class="fileinput-exists"><i class="fa fa-refresh"></i> Ganti</span>

			</span>
			<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash-o"></i> Hapus</a>
		  </div>
		</div>

					</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-7">
					<button class="btn btn-default" type="submit" name="save" value="Save" /><i class="glyphicon glyphicon-plus-sign icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/data_artikel"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
			</div>
	</form>
		
		

   </div><!--/inner-->
  </div><!--/content-->

