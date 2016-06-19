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
	
?>
  <!-- Main content -->
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
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
          <address>
            <strong>CV. Master Website Karawang</strong><br>
            JL. Rongo Waluyo Ruko Alfarabi No. 4<br>
            Telukjambe Timur - Karawang<br>
            Phone: 0812 8280 7483<br>
            Email: cs@masterwebsite.web.id
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
          <address>
         
            <strong><?php echo $u->perusahaan; ?></strong><br>
            Contact Person : <?php echo $u->nama_client; ?><br />
			<?php echo $u->alamat; ?><br />
            Phone : <?php echo $u->telepon; ?>            
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
          <b>Invoice #<?php echo $u->kode_project; ?></b><br>
          <br>
          <table width="100%">
          <tr>
          <td width="30%"><b>Order ID</b></td><td width="5%"> :</td><td width="65%"><?php echo $u->kode_project; ?></td></tr>
          <tr>
          <td><b>Payment Due</b> </td><td> :</td><td> <?php echo tgl_indo($u->tanggal); ?></td></tr>
           <tr>
          <td><b>Account</b> </td><td> :</td><td> MWK- <?php echo $u->kode_project; ?></td></tr>
          </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            
              <td>1</td>
               
              <td><?php echo $u->nama_produk; ?></td>
              <td>MWK- <?php echo $u->kode_project; ?></td>
              <td>Products and Services IT</td>
              <td>Rp. <?php echo number_format($u->harga,0, '.',',')?></td>
            </tr>
            </tbody>
          </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
<div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            For payment , please make payment in cash , or can be via bank transfer to the account of Bank BNI with number 0415932910 in the name of Deni Darmayana
          </p>
        </div>
        <!-- /.col -->      <div class="col-xs-6">
        <p class="lead">Amount Due 2/22/2014</p>

        <div class="table-responsive">
                     <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>Rp. <?php echo number_format($u->harga,0, '.',',')?></td>
              </tr>
              <tr>
                <th>Tax</th>
                <td>Rp. -</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>Rp. <?php echo number_format($u->bayar,0, '.',',')?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Rp. <?php echo number_format($u->sisa,0, '.',',')?></td>
              </tr>
            </table>

        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <?php } ?>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
