<div class="col-md-3">
    <div class="box-inner">
      <div class="box-header well">
        <h2>Berita Terbaru </h2>
      </div>
      <div class="box-content row">
        <div class="col-md-12">
        
           <?php 
                                         foreach($kanan_artikel->result() as $row){ 
                                ?>
          <div class="row">
            
            <div class="col-md-12">
            <ul>
            <li>
               <a  href="<?php echo base_url();?>index.php/app/baca/<?php echo $row->id;?>"><?php echo character_limiter ($row->judul,'30'); ?></a>
              </li>
             </ul> 
            </div>
        </div>
       
        <?php 
                                        } 
                                 ?>
                                         
               

       
              
        </div>
      </div>
    </div>
</div>

  

