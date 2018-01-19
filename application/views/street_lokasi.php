
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
        <div class="alert alert-info">
    
     <a href="<?php echo base_url(); ?>index.php/app/street_lokasi" class="btn btn-danger btn-sm" "><i class="glyphicon glyphicon-road"></i> Google Street View </a>
   <a href="<?php echo base_url(); ?>index.php/app/lokasi" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-cog"></i> Google Map</a> 

</div>
      
      <?php echo $map['html']; ?>

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
