
  <div class="row">
    <?php 
  $this->load->view('kiri');
 ?>

   
    <!-- left menu ends -->

    <div id="content" class="col-lg-10 col-sm-10">
      <!-- content starts -->
      <div>
  
</div>

<div class="row">
  <div class="col-md-9">
    <div class="box-inner">
     
      <div class="box-content row">
        <div class="col-md-12">
         <h4> <a href="#"><?php echo ucwords($row->judul); ?></a></h4>
         <p><i class="glyphicon glyphicon-time"></i> posted : <?php echo $tbl_artikel->created; ?> oleh <i>Admin</i></p><hr/>

        <img src="<?php echo base_url(); ?>foto/<?php echo $tbl_artikel->foto; ?>" width="185" height="114" class="img-responsive" style="float:left;padding: 3px;
margin: 3px 5px 3px 0;
border: 1px solid #999999;">       
 <p class="text-justify"><?php echo $tbl_artikel->ket; ?></p>

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

 