<?php echo validation_errors(); ?>


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
	
	<section>
		<?php echo form_open('admin/button_edit_user','class="form-horizontal"'); ?>
			<div class="form-group">
				<label class="col-sm-4 control-label">Username</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="username" value="<?php echo $edit_user->username ?>" readonly placeholder="Username">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="password" value="<?php echo $edit_user->password; ?>" placeholder="Password">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Lengkap</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" name="nama_lengkap"  value="<?php echo $edit_user->nama_lengkap; ?>" placeholder="Nama Lengkap">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Status</label>
					<div class="col-sm-3 ">
						<select name="status" required class="form-control">
							<option value="admin" >admin</option>
						</select>
					</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-ok icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/data_user"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
			</div>
			<input type="hidden" name="id_login" value="<?php echo $edit_user->id_login ?>" >
		<?php echo form_close(); ?>	
	</section>
  </div><!--/inner-->
  </div><!--/content-->


