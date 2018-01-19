
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
	
		<form method="post" action="<?php echo base_url(); ?>index.php/admin/button_edit_mk" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-4 control-label">Kode MK</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" readonly value="<?php echo $edit_mk->kd_mk ?>" name="kd_mk" placeholder="Kode MK">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama MK</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mk->nama_mk ?>" name="nama_mk" placeholder="Nama MK">
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Jumlah SKS</label>
					<div class="col-sm-4 ">
						<input required type="number" class="form-control" value="<?php echo $edit_mk->jum_sks ?>" name="jum_sks" placeholder="Jumlah SKS">
					</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Semester</label>
					<div class="col-sm-4 ">
						<select name="semester" required class="form-control">
							<option value="<?php echo $edit_mk->semester ?>"><?php echo $edit_mk->semester ?></option>
							<option value="2017 Genap" >2017 Genap</option>
							<option value="2017 Ganjil">2017 Ganjil</option>
							<option value="2016 Genap" >2016 Genap</option>
							<option value="2016 Ganjil">2016 Ganjil</option>
							<option value="2015 Genap" >2015 Genap</option>
							<option value="2015 Ganjil">2015 Ganjil</option>
							<option value="2014 Genap" >2014 Genap</option>
							<option value="2014 Ganjil">2014 Ganjil</option>
							<option value="2013 Genap" >2013 Genap</option>
							<option value="2013 Ganjil">2013 Ganjil</option>
							<option value="2012 Genap" >2012 Genap</option>
							<option value="2012 Ganjil">2012 Ganjil</option>
							<option value="2011 Genap" >2011 Genap</option>
							<option value="2011 Ganjil">2011 Ganjil</option>
							<option value="2010 Genap" >2010 Genap</option>
							<option value="2010 Ganjil">2010 Ganjil</option>
							<option value="2009 Genap" >2009 Genap</option>
							<option value="2009 Ganjil">2009 Ganjil</option>
							<option value="2008 Genap" >2008 Genap</option>
							<option value="2008 Ganjil">2008 Ganjil</option>
						</select>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Jurusan</label>
					<div class="col-sm-4 ">
						<input required type="text" class="form-control" value="<?php echo $edit_mk->jurusan ?>" name="jurusan" placeholder="Jurusan">
					</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-default" value="Edit"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/data_mk"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
			</div>
		</form>

  </div><!--/inner-->
  </div><!--/content-->

