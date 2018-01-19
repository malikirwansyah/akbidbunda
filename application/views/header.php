 <header class="navbar navbar-default " role="navigation">
    <div class="ch-container">
    <div class="navbar-inner">
      <button type="button" class="navbar-toggle pull-left animated flip">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img src="<?php echo base_url(); ?>asset/bootstrap/img/logo_akbid.png"></a>

      <ul class="collapse navbar-collapse nav navbar-nav top-menu">
        <li><a href="<?php echo base_url(); ?>">Beranda</a></li>

         <li class="dropdown">
          <a href="#" data-toggle="dropdown" > Tentang Akbid Bunda <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>index.php/app/sejarah">Sejarah</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/app/visi_misi">Visi Misi</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/app/struk">Struktur Organisasi</a></li> 
          </ul>
        </li>

       <li><a href="<?php echo base_url(); ?>index.php/app/artikel">Artikel</a></li>
         <li class="dropdown">
          <a href="#" data-toggle="dropdown">Fasilitas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>index.php/app/sarana">Sarana Dan Prasarana</a></li>
          </ul>
        </li>

        <li><a href="<?php echo base_url(); ?>index.php/app/data_dosen">Data Dosen</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/app/lokasi">Lokasi</a></li>
       
        
         
      </ul>

    </div>

    </nav><!--/.nav-collapse -->  
    </div><!-- container ends --> 
  </header>