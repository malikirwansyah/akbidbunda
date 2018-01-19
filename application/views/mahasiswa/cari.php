
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
<div class="alert alert-info">
	  selamat datang kembali, <b><?php echo $this->session->userdata('nama'); ?></b> ^_^
	  <button type="button" class="close" data-dismiss="alert">X</button>
</div>


<div class="row">
	<div class="box col-md-12">
		
	
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Nim</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata('nim'); ?>" disabled /></div>

  <div class="col-md-2"><label for="test">Angkatan</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="angkatan" disabled value="<?php echo $this->session->userdata('angkatan'); ?>" /></div>
</div>
<br />
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Nama</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama'); ?>"disabled /></div>

  <div class="col-md-2"><label for="test">Program Studi</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="jurusan" value="<?php echo $this->session->userdata('jurusan'); ?>"disabled /></div>
</div>
<br />
<div class="row">
  <div class="col-md-2 col-md-offset-1"><label for="test">Jenis Kelamin</label></div>
  <div class="col-md-3"><input type="text" class="form-control" name="jk"disabled value="<?php echo $this->session->userdata('jk'); ?>" /></div>

</div>

<br/>
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<a href="<?php echo base_url(); ?>index.php/mahasiswa/export/" class="medium-box"><i class="glyphicon glyphicon-print"></i> Export to PDF</a>

				
			</div>

	 <div class="box-content">
		
		<?php echo form_open("mahasiswa/button_cari"); ?>
		<div class="control-group">
					<div class="controls">
						<select name="cari" data-placeholder="Cari Nilai" id="selectError2" data-rel="chosen">
							<optgroup>
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
							</optgroup>
						</select>
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-share-alt"></i> Cek Nilai</button>
					</div>
				</div>
	<?php echo form_close(); ?>
	<br/>
		<div>
			<table class="table table-bordered">
	<thead>
	<tr>
		<th>No.</th>
		<th>Kode Mata Kuliah</th>
		<th>Mata Kuliah</th>
		<th>SKS</th>
		<th>Nilai Angka</th>
		<th>Nilai Huruf</th>
		<th>Bobot</th>
		<th>Kredit</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		
	</tr>
	</tbody>
	</table>
		</div>
	</div><!--box-content-->
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 
</div><!--row-->	 

 