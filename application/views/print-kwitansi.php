<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/kwitansi.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
<?php
date_default_timezone_set('Asia/Jakarta');
    function tgl_indo($tgl){
		$ubah = gmdate($tgl, time()+60*60*8);
		$pisah = explode("-",$ubah);
		$tanggal = $pisah[2];
		$bulan = bulan($pisah[1]);
		$tahun = $pisah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
	
	function bulan($bln){
		switch ($bln){
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}

  function Terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}

function rupiah($angka)
{
  $jadi = "Rp " . number_format($angka,2,',','.');
  return $jadi;
}
	
?>    
<section class="invoice">
  <?php foreach($data as $u){ ?>
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> CV. Master Website Karawang
            <small class="pull-right">Date: <?php echo date('d/m/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <div class="row invoice-info">
        <div class="col-sm-12">
          <center><h2>KWITANSI</h2></center>
        </div>
      </div>
      <!-- info row -->
      <br><br>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Telah Terima Dari<br><br>
          <address>
            <strong><?=$u->nama_client?></strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Uang Sejumlah<br><br>
          <address>
            <strong><?php echo "### ".ucwords(Terbilang($u->nominal))." Rupiah ###"; ?></strong><br>
          </address>
          
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Untuk Pembayaran<br>
          <br>
          <b><?=$u->keterangan?></b>
        </div>
        <!-- /.col -->
      </div>
      <br><br>
      <!-- /.row -->
      <div class="row">
        <div class="col-sm-4 invoice-col">
          <span class="box-kwitansi">
            <?=rupiah($u->nominal)?>
          </span>
        </div>
      </div>
      <br><br><br>

      <div class="row">
        <div class="col-sm-offset-8 col-sm-4 invoice-col">
        <span>Karawang, <?=tgl_indo(date('Y-m-d'))?></span>
        <br><br><br>
        Riandy Candra Winahyu
        </div>
      </div>
      </section>
      <?php } ?>
</div>
<!-- ./wrapper -->
</body>
</html>
