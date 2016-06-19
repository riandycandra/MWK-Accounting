<?php include 'functions.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <!-- Content Header (Page header) -->
    <?php foreach($data as $u){ ?>
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php echo $u->kode_project; ?></small>
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
        <!-- /.col -->
        <div class="col-xs-6">
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

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?php echo base_url('addproject/print_invoice') ?>/<?php echo $u->kode_project; ?>" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
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