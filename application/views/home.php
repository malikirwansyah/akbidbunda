
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
       
             
              <?php 
                                         foreach($data_artikel->result() as $row){ 
                                ?>
         
            
               <img src="<?php echo base_url(); ?>foto/<?php echo $row->foto; ?>"  alt="" class="img-responsive" style="float:left;padding: 3px;
margin: 3px 5px 3px 0;
max-width:200px; 
max-height:130px;
min-width:200px; 
min-height:130px;
border: 1px solid #999999;"/>       
            
               <a href="<?php echo base_url();?>index.php/app/baca/<?php echo $row->id;?>"><?php echo ucwords($row->judul); ?></a>
               <p><i class="glyphicon glyphicon-time"></i> posted : <?php echo ucwords($row->created); ?> oleh <i>Admin</i></p>
               <p class="text-justify"><?php echo character_limiter ($row->ket, '300'); ?>...<a href="<?php echo base_url();?>index.php/app/baca/<?php echo $row->id;?>">Selengkapnya</a>
               </p>
        
        <hr />
        <?php 
                                        } 
                                 ?>
                                         
                <ul class="pagination">
                        <li><?php
                        echo $paginator;
                        ?></li>
                </ul>

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
