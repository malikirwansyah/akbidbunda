
  <div class="row">

<?php 
  $this->load->view('kiri');
 ?>

    <div id="content" class="col-lg-10 col-sm-10">
      <!-- content starts -->
      <div>
 
</div>

<div class="row">

  <div class="col-md-9">

    <div class="box-inner">
      <div class="box-content row">
        <div class="col-md-12">
  

  <?php if($this->session->flashdata('result_masuk')) { ?>
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <?php echo $this->session->flashdata('result_masuk'); ?>
  </div>
  <?php } ?>
    
    <div class="box-content row ">
    <div class="col-lg-9 col-md-12">
        <?php echo form_open('app/login_mhs','class="form-horizontal"'); ?>

        <?php if(form_error('nim') == FALSE){ ?>
                  <div class="form-group"><!-- default input text -->
              <?php }else{ ?>
                  <div class="form-group has-warning"><!-- warning -->
              <?php } ?>
                <label class="col-sm-5 control-label">NIM</label>
                <div class="col-sm-7">
                <input placeholder="NIM" name="nim" type="text" class="form-control" id="inputError1" value="<?php echo set_value('nim'); ?>">
        <?php echo form_error('nim'); ?>
                </div>
                </div><!-- default input text -->

        <?php if(form_error('pass') == FALSE){ ?>
                  <div class="form-group"><!-- default input text -->
              <?php }else{ ?>
                  <div class="form-group has-warning"><!-- warning -->
              <?php } ?>
                <label class="col-sm-5 control-label">Password</label>
                <div class="col-sm-7">
                <input placeholder="Password" name="pass" type="password" class="form-control" id="inputError1">
        <?php echo form_error('pass'); ?>
                </div>
                </div><!-- default input text -->       
        
        
        <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-default "><i class="glyphicon glyphicon-share"></i> Login</button>
        </div>
        
      <?php echo form_close(); ?>
    </div>
    </div>
  </div>
        
      </div>
    </div>
  </div>

<?php 
  $this->load->view('kanan');
 ?>
</div>

  

  <!-- content ends -->
  </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
