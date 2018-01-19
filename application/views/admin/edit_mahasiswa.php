
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
	
		<form method="post" action="<?php echo base_url(); ?>index.php/admin/button_edit_mhs" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-4 control-label">Nim</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="nim" value="<?php echo $edit_mahasiswa->nim ?>" readonly placeholder="Username">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mahasiswa->pass ?>" name="pass" placeholder="Password">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Lengkap</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mahasiswa->nama ?>" name="nama" placeholder="Nama Lengkap">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Jenis Kelamin</label>
					<div class="col-sm-3 ">
						<select name="jk" required class="form-control">
							<option value="<?php echo $edit_mahasiswa->jk ?>"><?php echo $edit_mahasiswa->jk ?></option>
							<option value="Laki-Laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Angkatan</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mahasiswa->angkatan ?>" name="angkatan" placeholder="Angkatan">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Jurusan</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mahasiswa->jurusan ?>" name="jurusan" placeholder="Jurusan">
					</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default" value="Edit"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/data_mahasiswa"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
			</div>
		</form>

  </div><!--/inner-->
  </div><!--/content-->

