
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
	
		<form method="post" action="<?php echo base_url(); ?>index.php/admin/tambah_user" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-4 control-label">Username</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Lengkap</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="nama_lengkap" value="<?php echo set_value('nama_lengkap'); ?>" placeholder="Nama Lengkap">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Status</label>
					<div class="col-sm-3 ">
						<select name="status" required class="form-control">
							<option value="admin">admin</option>
						</select>
					</div>
			</div>
			<input type="hidden" name="id_login" value="<?php echo $id_login; ?>">
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default" value="tambah"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Tambah</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
			</div>
		</form>

  </div><!--/inner-->
  </div><!--/content-->

