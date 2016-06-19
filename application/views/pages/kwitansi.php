<?php include 'functions.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <!-- Content Header (Page header) -->
    <?php foreach($data as $u){ ?>
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php echo $u->keterangan; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Project</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>
 <section class="invoice">
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
      <!-- this row will not appear when printing -->
      <div class="row no-print">
      <br><br><br>
        <div class="col-xs-12">
          <a href="<?php echo base_url('inclusion/print_invoice') ?>/<?php echo $u->id_pemasukan; ?>" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>

	<?php } ?>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>

  <!-- /.content-wrapper -->