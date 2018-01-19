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
				<a href="#" class="medium-box"><i class="icon-plus-sign icon-white"></i> Edit Nilai Mahasiswa</a>

				
			</div>
	 <div class="box-content">
		  <?php if($this->session->flashdata('save_nilai')) { ?>
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">X</button>
		<?php echo $this->session->flashdata('save_nilai'); ?>
	</div>
	<?php } ?>
			<form method="post" name="form1" action="<?php echo base_url(); ?>index.php/admin/button_edit_nilai" class="form-horizontal" >
			<input required readonly type="hidden" class="form-control" value="<?php echo $edit_nilai->id ?>" name="id">
					
			<div class="control-group">
                    
			
				<div class="form-group">
					<label class="col-sm-4 control-label">NIM</label>
					<div class="col-sm-3 controls">
						<input required readonly type="text" class="form-control" value="<?php echo $edit_nilai->nim ?>" name="nim">
					</div>		
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Kode Mata Kuliah</label>
					<div class="col-sm-3 controls">
						<input required readonly type="text" class="form-control" value="<?php echo $edit_nilai->kd_mk ?>" name="kd_mk">
					
					</div>		
				</div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Nilai Angka</label>
					<div class="col-sm-3">
							<input required type="text" value="<?php echo $edit_nilai->nilai ?>" class="form-control" onkeyup="terbilang();"
                     id="txtTerbilang" name="nilai" placeholder="Masukkan Angka">
					</div>		
				</div>
<!--
				<div class="form-group">
					<label class="col-sm-4 control-label">Nilai Huruf</label>
					<div class="col-sm-3">
							<input required readonly type="text" class="form-control" name="nilai_huruf">
					</div>		
				</div>
!-->				

			<div class="form-group">
					<label class="col-sm-4 control-label">Tahun Akademik</label>
					<div class="col-sm-3">
						<select name="semester" required class="form-control">
							<option value="<?php echo $edit_nilai->semester ?>"><?php echo $edit_nilai->semester ?></option>
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
					<button type="submit" class="btn btn-default" value="edit"><i class="glyphicon glyphicon-plus-sign icon-white"></i> Edit</button>
					<a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/nilai"><i class="glyphicon glyphicon-remove icon-white"></i> Batal</a>
				</div>
				</div>
			</form>
	
		
	
	 </div>
	</div><!--box-inner-->
		</div><!--box--> 


<!-- tampilkan tabl nilai-->
		</div><!--box--> 
</div><!--row-->	 

 