
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
        <h2>Informasi Pendaftaran Mahasiswa Baru AKBID keluarga bunda jambi</h2>
      </div>
      <div class="box-content row">
        <div class="col-md-12">
       
  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><br/>
  <thead>
  <tr>
    <th>No.</th>
    <th>Keterangan  </th>
    <th>Tanggal Awal</th>
    <th>Tanggal Akhir</th>
    <th>Status</th>
    
  </tr>
  </thead>
  <tbody>
  <?php
    $no=0+1;
    foreach($data_pmb->result_array() as $dp)
    {
  ?>
    <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $dp['ket']; ?></td>
    <td><?php echo $dp['tgl_awal']; ?></td>
    <td><?php echo $dp['tgl_akhir']; ?></td>
    <td><?php echo $dp['status']; ?></td>
    
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
