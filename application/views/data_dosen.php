
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
      <div class="box-header well">
        <h2>Data Dosen  AKBID keluarga bunda jambi</h2>
      </div>
      <div class="box-content row">
        <div class="col-md-12">
      
          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
  <thead>
  <tr>
    <th>No.</th>
    <th>NIDN</th>
    <th>Nama</th>
    <th>Jenis Klamin</th>
    <th>Pendidikan</th>
    <th>Gelar</th>
    <th>Foto</th>
   
  </tr>
  </thead>
  <tbody>
  <?php
    $no=0+1;
    foreach($data_dosen->result_array() as $dp)
    {
  ?>
    <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $dp['nidn']; ?></td>
    <td><?php echo $dp['nama']; ?></td>
    <td><?php echo $dp['jk']; ?></td>
    <td><?php echo $dp['pend']; ?></td>
    <td><?php echo $dp['gelar']; ?></td>
    <td><img src="<?php echo base_url(); ?>foto/<?php echo $dp['foto']; ?>"  alt="" class="img-responsive" style="float:left;padding: 3px;
margin: 3px 5px 3px 0;
max-width:200px; 
max-height:130px;
min-width:200px; 
min-height:130px;
border: 1px solid #999999;"/> </td>
   
    </tr>
  <?php
      $no++;
    }
   ?>
  </tbody>
  </table>

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
