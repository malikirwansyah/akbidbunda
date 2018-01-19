<script type="text/javascript">
    function terbilang(){
        txtTerbilang = $('#txtTerbilang').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'index.php/admin/konversi'; ?>",
            data: {"txtTerbilang":txtTerbilang},
            success: function(resp){
                    $("#hasil_terbilang").html("Nilai Huruf : " + resp);
                    document.form1.nilai_huruf.value=(resp);
            },
            error:function(event, textStatus, errorThrown) {
                $("#hasil_terbilang").html('Error Message: '+ textStatus + ' , HTTP Error: '+errorThrown);
            },
            timeout: 4000
        });
    }
</script>    

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
				<a href="#" class="medium-box"><i class="icon-plus-sign icon-white"></i> Input Nilai Mahasiswa</a>

				
			</div>
	 <div class="box-content">
		  <?php if($this->session->flashdata('save_nilai')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_nilai'); ?>
	</div>
	<?php } ?>
			<form method="post" name="form1" action="<?php echo base_url(); ?>index.php/admin/tambah_nilai" class="form-horizontal" >
			
			<div class="control-group">
                    
			
				<div class="form-group">
					<label class="col-sm-4 control-label">NIM / Nama Mahasiswa</label>
					<div class="col-sm-3 controls">
						<select required name="nim" class="form-control">
							<option value=""></option>
								<?php
									foreach($data_mhs->result_array() as $sp)
									{
									?>
									<option value="<?php echo $sp['nim']; ?>"><?php echo $sp['nim']; ?> -- <?php echo $sp['nama']; ?></option>
								<?php
									}
									?>
							</select>
					</div>		
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Kode / Nama Mata Kuliah</label>
					<div class="col-sm-3 controls">
						<select required name="kd_mk" class="form-control">
							<option value=""></option>
								<?php
									foreach($data_mk->result_array() as $sp)
									{
									?>
									<option value="<?php echo $sp['kd_mk']; ?>"><?php echo $sp['kd_mk']; ?> -- <?php echo $sp['nama_mk']; ?></option>
								<?php
									}
									?>
							</select>
					</div>		
				</div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Nilai Angka</label>
					<div class="col-sm-3">
							<input required type="number" min="0" max="100" class="form-control" onkeyup="terbilang();"
                     id="txtTerbilang" name="nilai" placeholder="Masukkan Angka">
					</div>		
				</div>
<!---
				<div class="form-group">
					<label class="col-sm-4 control-label">Nilai Huruf</label>
					<div class="col-sm-3">
							<input required type="text" class="form-control" name="nilai_huruf" readonly>
					</div>		
				</div>
!-->				
				

			<div class="form-group">
					<label class="col-sm-4 control-label">Tahun Akademik</label>
					<div class="col-sm-3">
						<select name="semester" required class="form-control">
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

				<a href="#" class="medium-box"> Nilai Mahasiswa</a>

				
			</div>
	 <div class="box-content">
	 
	
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
	<thead>
	<tr>
		<th>No.</th>
		<th>Nim	</th>
		<th>Kode Mata Kuliah</th>
		<th>Nilai</th>
		<th>Semester</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$no=$tot+1;
		foreach($data_nilai->result_array() as $dp)
		{
	?>
	  <tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['nim']; ?></td>
		<td><?php echo $dp['kd_mk']; ?></td>
		<td><?php echo $dp['nilai']; ?></td>
		<td><?php echo $dp['semester']; ?></td>
		<td>
			<a href="<?php echo base_url(); ?>index.php/admin/edit_nilai/<?php echo $dp['id'];?>" ><i class="icon-pencil"></i> Edit</a> | 
			<a href="<?php echo base_url(); ?>index.php/admin/hapus_nilai/<?php echo $dp['id']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus</a> |
			
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

 