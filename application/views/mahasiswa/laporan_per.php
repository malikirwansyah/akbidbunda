
<?php
$temp='';
		$rows=array();
		$totalNH=0;	
		$totalSKS=0;
		
		$no=1;
date_default_timezone_set('ASIA/Jakarta');

$this->pdf->FPDF("P", "cm", "A4");
		$this->pdf->SetMargins(1, 1, 1);
		$this->pdf->AliasNbPages();
		$this->pdf->AddPage();
		//$this->index($nim);
$this->pdf->SetFont('arial', '', 16);
  	$path = base_url() . 'img/logo_akbid.png';
		if (!file_exists($path)) {
		}
//	 $cok = base_url() . 'img/akper.png';
//		if (!file_exists($cok)) {
//		}	
	$this->pdf->SetFont('arial', '', 14);
	$this->pdf->Cell(19, 0.7, 'AKADEMI KEBIDANAN', 0, 0, 'C');
	$this->pdf->Ln();
	
	$this->pdf->Cell(19, 0.7, 'KELUARGA BUNDA JAMBI', 0, 0, 'C');
	$this->pdf->Ln();
	$this->pdf->setFont('arial', '', 14);
	$this->pdf->Cell(19, 0.7, '( AKBID ) BUNDA JAMBI', 0, 0, 'C');
	$this->pdf->Ln();
	$this->pdf->setFont('arial', '', 10);
	$this->pdf->Cell(19, 0.5, 'Jl. Sultan Hasanuddin Rt 43 Jambi
Telp. 0741 570884, Fax 0741 570884
', 0, 0, 'C');
	$this->pdf->Line(1, 3.65, 20, 3.65);
	$this->pdf->Line(1, 3.7, 20, 3.7);
	//$this->pdf->Line(1, 8, 20, 8);
	$this->pdf->Cell(19, 3, $this->pdf->Image($path, 1, 0.5, 3, 'auto'), '3', 'L');
	//$this->pdf->Cell(19, 3, $this->pdf->Image($cok, 17, 0.68, 3, 'auto'), '3', 'L');
	$this->pdf->Ln(1);

		$i = 0;
		$h = 5;
		$this->pdf->SetFont('arial', '', 14);
		//$this->pdf->SetXY(2, 5);
		$this->pdf->Cell(19, 0.5, 'KARTU HASIL STUDY', 0,0, 'C');

		$this->pdf->SetFont('arial', '', 10);
		$this->pdf->SetXY(1.5, $h);
		$this->pdf->MultiCell(19, 0.5, 'Nim ', '2', 'L');
		$this->pdf->SetXY(5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['nim'] , '2', 'L');
		$this->pdf->SetXY(17.5, $h);

		$this->pdf->SetXY(13.1, $h);
		$this->pdf->MultiCell(19, 0.5, 'Angkatan' , '2', 'L');
		$this->pdf->SetXY(17.5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['angkatan'] , '2', 'L');
		$this->pdf->SetXY(17.5, $h);

		$h += 0.5;
		$this->pdf->SetXY(1.5, $h);
		$this->pdf->MultiCell(19, 0.5, 'Nama ', '2', 'L');
		$this->pdf->SetXY(5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['nama'] , '2', 'L');
		$this->pdf->SetXY(17.5, $h);

		$this->pdf->SetXY(13.1, $h);
		$this->pdf->MultiCell(19, 0.5, 'Jurusan' , '2', 'L');
		$this->pdf->SetXY(17.5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['jurusan'] , '2', 'L');
		$this->pdf->SetXY(17.5, $h);



		$h += 0.5;
		$this->pdf->SetXY(1.5, $h);
		$this->pdf->MultiCell(19, 0.5, 'Jenis Kelamin ', '2', 'L');
		$this->pdf->SetXY(5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['jk'], '2', 'L');
		$this->pdf->SetXY(17.5, $h);


		$this->pdf->SetXY(13.1, $h);
		$this->pdf->MultiCell(19, 0.5, 'Semester ', '2', 'L');
		$this->pdf->SetXY(17.5, $h);
		$this->pdf->MultiCell(19, 0.5, ': ' .$this->session->userdata['kata'], '2', 'L');
		$this->pdf->SetXY(17.5, $h);
		

		
		$this->pdf->Ln(1);
		$this->pdf->Cell(0.7, 0.7, 'No ', 1,'LR', 'C');
		$this->pdf->Cell(3, 0.7, 'Kode Mata Kuliah ', 1,'LR', 'C');
		$this->pdf->Cell(7.9, 0.7, 'Mata Kuliah ', 1,'LR', 'C');
		$this->pdf->Cell(1, 0.7, 'SKS ', 1,'LR', 'C');
		$this->pdf->Cell(2, 0.7, 'Nilai Angka ', 1,'LR', 'C');
		$this->pdf->Cell(2, 0.7, 'Nilai Huruf ', 1,'LR', 'C');
		$this->pdf->Cell(1.2, 0.7, 'Bobot ', 1,'LR', 'C');
		$this->pdf->Cell(1.2, 0.7, 'Kredit ', 1,'LR', 'C');
		
		foreach($khs->result() as $value)
		{
			if($temp=='')
			{
		$this->pdf->Ln();
		$this->pdf->Cell(0.7, 0.7 , $no, 1,'LR', 'L');
		$this->pdf->Cell(3, 0.7 , $value->kd_mk, 1,'LR', 'L');
		$this->pdf->Cell(7.9,0.7 , $value->nama_mk, 1,'LR', 'L');
		$this->pdf->Cell(1,0.7 , $value->jum_sks, 1,'LR', 'L');
		$this->pdf->Cell(2,0.7 , $value->nilai, 1,'LR', 'L');
		$this->pdf->Cell(2,0.7 , $value->huruf, 1,'LR', 'L');
		$this->pdf->Cell(1.2,0.7 , $value->grade, 1,'LR', 'L');
		$this->pdf->Cell(1.2,0.7 , $value->J_X_G, 1,'LR', 'L');
		$no++;
		$totalNH=0;
				$totalSKS=0;
			}
			else
			{
		$this->pdf->Ln();
		$this->pdf->Cell(0.7, 0.7 , $no, 1,'LR', 'L');
		$this->pdf->Cell(3, 0.7 , $value->kd_mk, 1,'LR', 'L');
		$this->pdf->Cell(7.9,0.7 , $value->nama_mk, 1,'LR', 'L');
		$this->pdf->Cell(1,0.7 , $value->jum_sks, 1,'LR', 'L');
		$this->pdf->Cell(2,0.7 , $value->nilai, 1,'LR', 'L');
		$this->pdf->Cell(2,0.7 , $value->huruf, 1,'LR', 'L');
		$this->pdf->Cell(1.2,0.7 , $value->grade, 1,'LR', 'L');
		$this->pdf->Cell(1.2,0.7 , $value->J_X_G, 1,'LR', 'L');
		$no++;
			}
			if($value->grade != 'T') {
				$totalNH +=$value->J_X_G;
				$totalSKS+=$value->jum_sks;
			}
			$temp=$value->nilai;
		}
		$ip = 0;
		if($totalNH !=0)			
			$ip = round($totalNH/$totalSKS, 2);
			
		$this->pdf->Ln();
		$this->pdf->Cell(11.6, 0.7, 'Jumlah SKS ', 1, 'LR','C');
		$this->pdf->Cell(1, 0.7,$totalSKS , 1,'LR', 'C');
		$this->pdf->Cell(5.2, 0.7, 'Jumlah Kredit ', 1,'LR', 'C');
		$this->pdf->Cell(1.2, 0.7,$totalNH , 1,'LR', 'C');
		$this->pdf->Ln();
		$this->pdf->Cell(19, 0.7, 'INDEK KOMULATIF : '.$ip, 1, 'LR','C');
		//$this->pdf->MultiCell(19, 3, $this->pdf->Image($path, 15, 5, 3, 'auto'), '3', 'L');

		$this->pdf->Ln(2);

		$this->pdf->Cell(19, 0.7, 'Jambi,  ' . date('d F Y') , 0, 1,'R');
		$this->pdf->Cell(19, 0.7, 'Ketua program studi' , 0, 1,'R');
		$this->pdf->Cell(19, 0.7, '' , 0, 1,'');
		$this->pdf->Cell(19, 0.7, '' , 0, 1,'');
		$this->pdf->SetFont('arial','U');
		$this->pdf->Cell(19, 0.7, 'Contoh Nama Dosen' , 0, 1,'R');
		$this->pdf->SetFont('arial','');
		$this->pdf->Cell(19, 0.7, 'Contoh N I D N' , 0, 1,'R');

		 $this->pdf->Output();
?>