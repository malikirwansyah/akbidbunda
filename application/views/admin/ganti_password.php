
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

<section id="data-keluarga">
   <div class="box-inner">
  <div class="box-content">
  <br/>
  <?php if($this->session->flashdata('pass')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('pass'); ?>
	</div>
	<?php } ?>


	<div class="tabbable tabs-left">
	<?php
		if($this->session->userdata("tab_a")=="" && $this->session->userdata("tab_b")=="")
		{
			$set['tab_a'] = "active";
			$this->session->set_userdata($set);
		}
		$a = $this->session->userdata("tab_a");
		$b = $this->session->userdata("tab_b");
	?>
	  <ul class="nav nav-tabs">
		<li class="<?php echo $a; ?>"><a href="#lA" data-toggle="tab">Pengaturan Password</a></li>
		<li class="<?php echo $b; ?>"><a href="#lB" data-toggle="tab">Pengaturan Nama Pengguna</a></li>
	  </ul>
	  <div class="tab-content">
		<div class="tab-pane <?php echo $a; ?>" id="lA">
			<?php echo form_open('app/save_pass','class="form-horizontal"'); ?><br />
				<div class="form-group">
					<label class="col-sm-4 control-label" for="pass_lama">Username</label>
					<div class="col-sm-6 ">
					  <input type="text" value="<?php echo $this->session->userdata('username'); ?>" 
					  class="form-control" name="username" id="username" placeholder="Username" readonly="true">
					</div>
				</div>
					
				<div class="form-group">	
					<label class="col-sm-4 control-label" for="pass_lama">Password Lama</label>
					<div class="col-sm-6 ">
					  <input required type="password" class="form-control" name="pass_lama" id="pass_lama" placeholder="Password Lama">
					</div>
				</div>	
					
				<div class="form-group">	
					<label class="col-sm-4 control-label" for="pass_lama">Password Baru</label>
					<div class="col-sm-6 ">
					  <input required type="password" class="form-control" name="pass_baru" id="pass_baru" placeholder="Password Baru">
					</div>
				</div>	
					
				<div class="form-group">		
					<label class="col-sm-4 control-label" for="pass_lama">Ulangi Password Baru</label>
					<div class="col-sm-6 ">
					  <input required type="password" class="form-control" name="ulangi_pass_baru" id="ulangi_pass_baru" placeholder="Ulangi Password Baru">
					</div>
				</div>
				
				<div class="form-group">
			<div class="col-sm-offset-4 col-sm-6">
			  <button type="submit" class="btn btn-default">Simpan</button>
			</div>
		  </div>
			<?php echo form_close(); ?>
		</div>
		<div class="tab-pane <?php echo $b; ?>" id="lB">
		
			  <?php echo form_open('app/save_name','class="form-horizontal"'); ?><br />
					<div class="form-group">
						<label class="col-sm-4 control-label" for="pass_lama">Nama Pengguna</label>
						<div class="col-sm-6">
						  <input required type="text" value="<?php echo $this->session->userdata('nama'); ?>" 
						  class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Pengguna">
						</div>
					</div>
					
			  <div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
				  <button type="submit" class="btn btn-default">Simpan</button>
				</div>
			  </div>
			<?php echo form_close(); ?>
		</div>
	  </div>
	</div> <!-- /tabbable -->
   </div><!--/inner-->
  </div><!--/content-->

</section>


